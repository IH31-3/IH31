<?php
require("../../config.php");
require("../../vendor/autoload.php");
require("./Login.php");
require("./Modify.php");
require("./Search.php");
require("./SignUp.php");

class AdminMain{
    function load_page_source() {
    // 画面の固定値を戻り値に指定
        $const = [
            "title" => "TOP | HALMORTOR",
            "path_to_logo_image" => "./img/HALMOTOR.png",
            "regist" => "登録",
            "matter" => "案件",
            "change" => "変更・管理",
            "log_out" => "ログアウト",
        ];
        return $const;
    }
    function get_check_sample($name, $age, $gender, $address) {

        $hoge = [
            "ok" => "GETデータは取得できています。",
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "address" => $address,
        ];
        return $hoge;
    }
    function post_check_sample($hobby, $qualification, $advantages, $disadvantages) {
        $fuga = [
            "ok" => "GETデータは取得できています。",
            "hobby" => $hobby,
            "qualification" => $qualification,
            "advantages" => $advantages,
            "disadvantages" => $disadvantages,
        ];
        return $fuga;
    }
}