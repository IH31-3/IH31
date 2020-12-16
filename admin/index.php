<?php
// ---------- 前処理 ----------
// 関数ファイル読み込み
require_once("./functions/index_function.php");

// ---------- 初期値設定エリア ----------
// デフォルトで使用する固定値を関数から呼び出し
$const = load_page_source();
// デフォルトで使用するテンプレートの指定
$header = "tpl/header/adminHeader.php";
$main = "tpl/main/sample.php";
$footer = "tpl/footer/sample.php";


// ---------- 処理分岐・画面差し替えエリア ----------
// POST/GETの有無によって処理を分岐

if(isset($_GET["switch_process_with_button_name"])){
    // 配列にして送るのも良いと思います。
    $hoge = get_check_sample($_GET["name"], $_GET["age"], $_GET["gender"], $_GET["address"]);
}

if(isset($_POST["switch_process_post_data"])){
    $fuga = post_check_sample($_POST["hobby"], $_POST["qualification"], $_POST["advantages"], $_POST["disadvantages"]);
}

// ---------- html出力 ----------
// 画面呼び出し
require_once($header);
require_once($main);
require_once($footer);