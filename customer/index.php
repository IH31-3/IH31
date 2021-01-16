<?php
// ---------- 前処理 ----------
session_start();
if(!isset($_SESSION['user_id'])){
    $_SESSION['user_id'] = 0;
}
// 関数ファイル読み込み
require_once("../functions/customer/functions.php");

// ---------- 初期値設定エリア ----------
// デフォルトで使用する固定値を関数から呼び出し
// デフォルトで使用するテンプレートの指定
$header = "tpl/header/customerHeader.php";
$main = "tpl/main/index_top.php";
$footer = "tpl/footer/customerFooter.php";


// ---------- 処理分岐・画面差し替えエリア ----------

if(isset($_GET["page"])){ // ----- ページ遷移用
    $page = $_GET["page"];

    // オークション一覧表示
    if($page=="auction_top"){
        // // 開催中のオークション名を一表示する
        // $auction_name = "春季開催！春のセール";
        // // オークションに並ぶ車を一覧表示する
        // $cars = [
        //     "スバルの車",
        //     "マツダの車",
        //     "トヨタの車",
        //     "スズキの車",
        //     "ニッサンの車",
        // ];

        $auction_bid_url = "127.0.0.1:9000/auction/" . $_SESSION['user_id'];
    }

    // // 案件詳細表示
    // if($page=="matter_detail"){
    //     $id = $_GET["id"];
    //     // 案件詳細表示用にmatter_topからid取得、matter_detailにて表示する
    // }

    // // 出品登録画面表示のselect用オークション一覧表示
    // if($page=="regist_exhibit"){
    //     // $result = auction_all_search();
    //     // 開催前のオークションを検索、結果を配列でregist_exhibit内selectボックスにて表示する

    //     $result = [
    //         "auction1" => "春季開催！春のセール",
    //         "auction2" => "夏季開催！夏のセール",
    //     ];
    // }

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

if(isset($_POST["type"])){ // ----- 情報登録用
    $type = $_POST["type"];
    $page = "done";

    // // 従業員登録
    // if($type == "regist_employee"){
    //     $result = regist_employee();
    // }
    // // 車両登録
    // if($type == "regist_car"){
    //     $result = regist_car();
    // }
    // // 出品登録
    // if($type == "regist_exhibit"){
    //     $result = regist_exhibit();
    // }
    // // 売上登録
    // if($type == "regist_sales"){
    //     $result = regist_sales();
    // }
    // // 案件登録
    // if($type == "regist_matter"){
    //     $result = regist_matter();
    // }
    // // オークション登録
    // if($type == "regist_auction"){
    //     $result = regist_auction();
    // }

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

// ---------- html出力 ----------
// 画面呼び出し
require_once($header);
require_once($main);
require_once($footer);