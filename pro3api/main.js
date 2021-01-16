////////////////////////////////////////////////////////////////////////////
//オークションＡＰＩ
//使用書
//http://localhost:9000/auction/:顧客id
/////////////////////////////////////////////////////////////////////////////
var startDate = '2020/01/01';  //オークション開催日
var startHour = 17;  //オークション開催時刻　時(13時)
var auctionTime = 10; //オークションの開催時間 　分(10)
var buffMinutues = 29;  //オークションの開催時刻　分（0）　デバック用
////////////////////////////////////////////////////////////////////////////
const express = require('express');
const app = express();
const http_socket = require('http').Server(app);
const io_socket = require('socket.io')(http_socket);

app.set('view engine', 'ejs');

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));

/**
 * DB 定数
 */
const mysql = require("mysql");
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'vehicle_auction_site_db'
})
//計算用
var date = new Date();  //タイマー
var endDate = new Date();   //終了時刻
var difference = new Date();  //残り時間

//表示用
var strDate = "";  //タイマー  hh:mm:ss
var strEndDate = ""; //終了時刻 hh:mm:ss
var strDifference = "";//残り時間 hh:mm:ss

var aucCount = -1; //オークションカウンター
var putId = 0;  //現在の出品ＩＤ
var nowMoney = 50; //現在の金額
var startMoney = 0; //オークション開始時金額
var count = 0; //入札件数 毎回初期化

var page = 'auction.ejs'; //正常時のオークションページ
var errPage = 'err.ejs';  //異常時のオークションページ

var put;//取り出したテーブルデータ
var aucEnd = 0; //オークションの回数

/**
 * DB接続確認
 */
connection.connect((error) => {
    if (error) {
        console.log('error connecting:' + error.stack);
        return;
    }
    console.log('db_success');
});

http_socket.listen(9000);

///////////////////////////////////////////////////////////////////
/**
 * 時間取得 毎時取得
 */

var timeFunc = function () {
    date = new Date();
    var hour = date.getHours();
    var minutes = date.getMinutes();
    var second = date.getSeconds();
    strDate = hour + ':' + minutes + ':' + second
    // console.log('現在時刻 '+date.toString());
    // console.log('現在時刻 '+strDate);
}
setInterval(timeFunc, 1000);

/////////////////////////////////////////////////////////////////

/**
 * 出品（車両情報）取り出し 
 */
//本日の日付で取り出し
connection.query(
        "SELECT * FROM listing l INNER JOIN vehicle v ON l.vehicle_no = v.vehicle_no WHERE auction_no IN (SELECT auction_no FROM auction WHERE date = '" + startDate + "')  ",
        (error, results) => {
    if (error) {
        console.log('error connectiong' + error.stack);
        return;
    }
    //console.log("内部 :"+results);
    // console.log(results);
    put = results;
    aucEnd = put.length;

})
//console.log("外部 :"+put);

//デバック用
//var put = [1, 2, 3, 4, 5, 6];
//var aucEnd = put.length;
//console,log(aucEnd);
//

//var aucEnd = 5;

/////////////////////////////////////////////////////////////////////
/**
 * 終了時刻計算　
 * @type Number
 */
var endTimeFunc = function () {

    var year = date.getFullYear();
    var month = date.getMonth();
    var day = date.getDate();
    // console.log(date.toString());
    //console.log('年'+year+'月'+month+'日'+day);
    endDate = new Date((year), (month), day, startHour, (auctionTime * (aucCount + 1)) + buffMinutues);
    // endDate = new Date(2020, 11, 15, 11, 41 + 1 + (aucCount * auctionTime), 0);  //デバック用　上書き
    strEndDate = endDate.getHours().toString() + ':' + endDate.getMinutes().toString() + ':' + endDate.getSeconds().toString();
    console.log('終了時刻> ' + strEndDate);
    //console.log('終了時刻 :' + endDate.toString());

    /**
     * クライアントに送信
     * @returns {undefined}
     */
    io_socket.emit('end');
}
endTimeFunc();
//////////////////////////////////////////////////////////////////////////

/**
 * 残り時間計算
 */

var difTImeFunc = function () {
    difference = endDate - date;
    //console.log('difference ' + difference)
    if (difference >= 0) {
        difference = new Date(difference);
        //時間を9時間マイナスする
        strDifference = (parseInt(difference.getHours() - 9)).toString() + ":" + difference.getMinutes() + ":" + difference.getSeconds();
        console.log('残り時間> ' + strDifference);

        /**
         * クライアントに送信
         * 
         */
        io_socket.to(put[aucCount]['vehicle_no']).emit('s2cx', strDifference);


    } else {

        if (aucCount < aucEnd - 1) {
            aucCount++;
            //console.log("オークション取り出し"+put[aucCount]);
            //console.log("オークション終了"+aucEnd);
            nowMoney = put[aucCount]['purchase_amount']*1.2;  // 次の車両情報から 
            startMoney = nowMoney;  //
            console.log('車両番号 :' + put[aucCount]['vehicle_no']);
            count = 0;

            endTimeFunc();

        } else {
            io_socket.emit('end');
            console.log('オークション終了');
            page = errPage;
        }
    }

};
/**
 * 遅延実行
 * @returns {undefined}
 */
setTimeout(function () {
    setInterval(difTImeFunc, 1000);
}, 100);

/////////////////////////////////////////////////////////////////////////
/**
 * サイトアクセス 顧客ＩＤを付与して 
 * 車両情報も送る
 */
app.get('/auction/:customer', (req, res) => {
    var customer = req.params.customer;
    res.render(page,
            {
                money: nowMoney,
                start: startMoney,
                customer: customer,
                time: strDifference,
                count: count,
                room: put[aucCount]['vehicle_no'],
                vehicle: put[aucCount]
            });
});



////////////////////////////////////////////////////////////////////////////
io_socket.on('connection', function (socket) {

//    socket.on('auction', function (message) {
//        console.log('オークション:' + message.msg);
//        nowMoney = message.msg;
//        socket.emit('auction_d', nowMoney);
//    })


    /**
     * JOIN 処理
     */
    socket.on('c2s-join', function (msg) {
        console.log('c2s-join:' + msg.auction);
        socket.join(msg.auction);
    });

    /**
     * オークションやり取り
     */
    socket.on('auction', function (msg) {
        console.log('c2s-chatメッセージ:' + msg.msg);
        nowMoney = msg.msg;
        count++;
        msg.count = count;

        /**
         * データベース登録
         */
        connection.query(
                "INSERT INTO listing_history (listing_no,client_no,money) VALUES ("+put[aucCount]['listing_no']+","+msg.customer+","+msg.msg+")",
                (error, results) => {
            if (error) {
                console.log('error connectiong' + error.stack);
                return;
            }

        })

        io_socket.to(put[aucCount]['vehicle_no']).emit('auction_d', msg);
    })
});


///////////////////////////////////////////////////////////////////////////
