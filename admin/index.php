<?php
// ---------- 前処理 ----------
// 関数ファイル読み込み
require_once("../functions/admin/index_function.php");

// ---------- 初期値設定エリア ----------
// デフォルトで使用する固定値を関数から呼び出し
$const = load_page_source();
// デフォルトで使用するテンプレートの指定
$header = "tpl/header/adminHeader.php";
$main = "tpl/main/index_top.php";
$footer = "tpl/footer/sample.php";


// ---------- 処理分岐・画面差し替えエリア ----------
// POST/GETの有無によって処理を分岐

if(isset($_GET["page"])){ // ページ遷移用
    $main = "tpl/main/" . $_GET["page"] . ".php";
    // var_dump($_GET["page"]);
}


// ---------- html出力 ----------
// 画面呼び出し
require_once($header);
require_once($main);
require_once($footer);