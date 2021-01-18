<?php
require_once '../config.php';
require_once '../functions/admin/reqistration.php';
require_once '../functions/archived/select.php';

function load_page_source() {
// 画面の固定値指定
    $const = [
        "title" => "TOP | HALMORTOR",
        "path_to_logo_image" => "./img/HALMOTOR.png",
        "regist" => "登録",
        "matter" => "案件検索",
        "change" => "変更・管理",
        "log_out" => "ログアウト",
    ];
    return $const;
}