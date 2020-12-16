////////////////////////////////////////////////////////////////////////////
//オークションＡＰＩ
//使用書
//http://localhost:9000/auction/:顧客id
/////////////////////////////////////////////////////////////////////////////
var startHour = 13;  //オークション開催時刻　時(13時)
var auctionTime = 1; //オークションの時間 　分(10)

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

var aucCount = 0; //オークションカウンター
var putId = 0;   //現在の出品ＩＤ；
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
 * 出品取り出し 
 */
connection.query(
        "SELECT * FROM auction",
        (error, results) => {
    if (error) {
        console.log('error connectiong' + error.stack);
        return;
    }
})



/////////////////////////////////////////////////////////////////////
/**
 * 終了時刻計算　
 * @type Number
 */
var endTimeFunc = function () {
    var year = date.getFullYear();
    var month = date.getMonth();
    var day = date.getDay();
    //console.log('年'+year+'月'+month+'日'+day);
    endDate = new Date(year, month + 1, day, startHour, 10 * aucCount);
    endDate = new Date(2020, 11, 14, 12 ,50 + (aucCount * auctionTime), 0);  //デバック用　上書き
    strEndDate = endDate.getHours() + ':' + endDate.getMinutes() + ':' + endDate.getSeconds();
    console.log('終了時刻> ' + strEndDate);
    //console.log('終了時刻 ' + endDate.toString());
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
        io_socket.emit('s2cx', strDifference);

    } else {
        aucCount++;
        endTimeFunc();
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
 * サイトアクセス
 */
app.get('/auction', (req, res) => {

    res.render('test.ejs',
            {
                putId: putId,
                difference: strDifference
            });
});
////////////////////////////////////////////////////////////////////////////
//io_socket.on('connection', function (socket) {
//    console.log('connected');
//     io_socket.emit('s2c', strDifference);
//     socket.join(strDifference);
//});


///////////////////////////////////////////////////////////////////////////
