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

if(isset($_POST["POST値"])){
    // テンプレート内で使う変数(配列)を準備
    $post_hoge = function_of_load_sample();
    // テンプレート差し替え
    $main = "テンプレートを差し替える場合ここでパスを指定";
}

if(isset($_GET["GET値"])){
    // テンプレートで使う変数を準備
    $get_hoge = function_of_load_sample2();
    // テンプレート差し替え
    $main = "adminHeaderじゃないテンプレート.php";
}


// ---------- html出力 ----------
// 画面呼び出し
require_once($header);
require_once($main);
require_once($footer);

// もうフレームワーク使った方が早いやんって意見もわかります。笑