<?php
// 関数ファイル読み込み
require_once("../functions/admin/functions.php");

// -------------------- 初期値設定 -------------------- //
$const = load_page_source();
// デフォルトで使用するテンプレートの指定
$header = "tpl/header/adminHeader.php";
$main = "tpl/main/index_top.php";
// フッター不要なので切ってあります


// -------------------- 画面処理 -------------------- //
// ---------- 画面表示前出力処理 ---------- //
if(isset($_GET["page"])){ 
    $page = $_GET["page"];

    // ---------- 登録 ----------
    // 出品登録画面表示
    if($page=="regist_exhibit"){
        $result = search_auction();
    }

    // ---------- 案件検索 ----------
    // 案件検索表示
    if($page=="matter_top"){
        $result = search_matter();
    }
    // 案件詳細表示
    if($page=="matter_detail"){
        $id = $_GET["id"];
        $result = search_matter_detail($id);
    }

    // ---------- 変更・管理 ----------
    // オークション管理
    if($page=="change_auction"){
        $result = change_auction();
    }
    // オークション詳細
    if($page=="change_auction_detail"){
        $id = $_GET["id"];
        $result = change_auction_detail($id);
        var_dump($result);
    }


    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

// ---------- 画面表示後入力処理 ---------- //
if(isset($_POST["type"])){
    $type = $_POST["type"];
    $page = "done";

    // ---------- 登録 ----------
    // 従業員登録
    if($type == "regist_employee"){
        $result = regist_employee();
    }
    // 車両登録
    if($type == "regist_car"){
        $result = regist_car();
    }
    // 出品登録
    if($type == "regist_exhibit"){
        $result = regist_exhibit();
    }
    // 売上登録
    if($type == "regist_sales"){
        $result = regist_sales();
    }
    // 案件登録
    if($type == "regist_matter"){
        $result = regist_matter();
    }
    // オークション登録
    if($type == "regist_auction"){
        $result = regist_auction();
    }

    // ---------- 案件検索 ----------

    // ---------- 変更・管理 ----------

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

// -------------------- 画面呼び出し -------------------- //
require_once($header);
require_once($main);
// require_once($footer);