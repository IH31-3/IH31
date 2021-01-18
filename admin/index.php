<?php
// ---------- 前処理 ----------
// 関数ファイル読み込み
require_once("../functions/admin/functions.php");

// ---------- 初期値設定エリア ----------
// デフォルトで使用する固定値を関数から呼び出し
$const = load_page_source();
// デフォルトで使用するテンプレートの指定
$header = "tpl/header/adminHeader.php";
$main = "tpl/main/index_top.php";
$footer = "tpl/footer/sample.php";


// ---------- 処理分岐・画面差し替えエリア ----------

if(isset($_GET["page"])){ // ----- ページ遷移用
    $page = $_GET["page"];

    // 案件表示前の案件検索結果一覧表示
    if($page=="matter_top"){
        // $result = matter_all_search($_GET["status"], $_GET["text"]);
        // statusとtextで案件検索、結果を配列でmatter_topにて表示する

        $result = search_matter();
        // var_dump($result);
    }

    // 案件詳細表示
    if($page=="matter_detail"){
        $id = $_GET["id"];
        $result = search_matter_detail($id);
        // var_dump($result);
    }

    // 出品登録画面表示のselect用オークション一覧表示
    if($page=="regist_exhibit"){
        // $result = auction_all_search();
        // 開催前のオークションを検索、結果を配列でregist_exhibit内selectボックスにて表示する

        $result = [
            "auction1" => "春季開催！春のセール",
            "auction2" => "夏季開催！夏のセール",
        ];
    }

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

if(isset($_POST["type"])){ // ----- POST登録用
    $type = $_POST["type"];
    $page = "done";

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

    // --- 呼び出しmainページの変更
    $main = "tpl/main/" . $page . ".php";
}

// ---------- html出力 ----------
// 画面呼び出し
require_once($header);
require_once($main);
require_once($footer);