<?php
// ---------- 前処理 ----------
session_start();
if(!isset($_SESSION['user_id'])){

    // ログイン中のユーザーIDとして001を保持
    $_SESSION['user_id'] = "001";
}
// 関数ファイル読み込み
require_once("../functions/customer/functions.php");

// ---------- 初期値設定エリア ----------
// デフォルトで使用するテンプレートの指定
$header = "tpl/header/customerHeader.php";
$main = "tpl/main/index_top.php";
$footer = "tpl/footer/customerFooter.php";


// ---------- 処理分岐・画面差し替えエリア ----------

if(isset($_GET["page"])){ // ----- ページ遷移用
    $page = $_GET["page"];

    if($page=="index_top"){
        $url = "http://localhost:9000/sample";
        $json = file_get_contents($url);
        $arr = json_decode($json,true);
        var_dump($arr);

        // array(8) {
        //     ["vehicle_no"]=> int(1) 
        //     ["model_name"]=> string(3) "NSX" 
        //     ["maker"]=> string(9) "ホンダ" 
        //     ["money"]=> int(1800) 
        //     ["model_year"]=> int(2019) 
        //     ["displacement"]=> int(3500) 
        //     ["car_history"]=> string(9) "自家用" 
        //     ["repair_history"]=> string(3) "有" 
        // }


    }

    // オークション一覧表示
    if($page=="auction_top"){
        $auction_bid_url = "http://127.0.0.1:9000/auction/" . $_SESSION['user_id'];
    }

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

if(isset($_POST["type"])){ // ----- 情報登録用
    $type = $_POST["type"];
    $page = "done";

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

// ---------- html出力 ----------
// 画面呼び出し
require_once($header);
require_once($main);
require_once($footer);