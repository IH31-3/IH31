<?php

//dbの読み込み　SELECT文 引数(HOST,ユーザ名,パスワード,db名,SQL文) 戻り値　$result　＊外で mysqli_fetch_assoc をおこなう必要がある
function dbread($host, $user, $pass, $name, $sql) {
    $cn = mysqli_connect($host, $user, $pass, $name);
    mysqli_set_charset($cn, 'utf8');
    $result = mysqli_query($cn, $sql);
    mysqli_close($cn);
    return $result;
}

//dbの書き込み INSERT文,UPDATE文など  引数(HOST,ユーザ名,パスワード,db名,SQL文) 戻り値　無し　
function dbwrite($host, $user, $pass, $name, $sql) {
    $cn = mysqli_connect($host, $user, $pass, $name);
    mysqli_set_charset($cn, 'utf8');
    mysqli_query($cn, $sql);
    mysqli_close($cn);
}

//空白チェック 引数（検索対象）戻り値　空白であれば false それ以外は　引数をそのまま返す ＊if文にいれて使う
function blankcheck($val) {
    if ($val == "") {
        return false;
    }
    return $val;
}

function array_add($val) {
    $rtn = 0;
    foreach ($val as $value) {
        $rtn += $value;
    }
    return $rtn;
}

function datecheck($date) {
    $str = str_split($date);
    $year = "";
    $month = "";
    $day = "";

    $year .= $str[0] . $str[1] . $str[2] . $str[3];
    $month .= $str[5] . $str[6];
    $day .= $str[8] . $str[9];
    if (checkdate($month, $day, $year)) {
        return true;
    }
    return false;
}
function chk_str($val,$chk){
    $ret=true;
    $str = str_split($val);
    foreach ($str as $value) {
        if($value==$chk){
            $ret=false;
        }
    }
    return $ret;
}

/**
 * 金額に「,」をつける
 * @param type $money
 * @return type
 */
function set_money($money) {
    $money= intval($money);
    $str = str_split($money);
    $many = count($str);
    $cnt = 0;
    $i = 0;
    $ret = "";
    foreach ($str as $val) {
        if ($cnt % 3 == ($many % 3)&&$many!=3) {
            $ret .= ",";
        }
        $ret .= $str[$i];
        $i++;
        $cnt++;
    }
    return $ret;
}

/**
 * 　date をＯ月Ｏ日　
 * @param type $date
 * @return string
 */
function set_date($date) {
    $ret = "";
    $str = str_split($date);
    $ret .= $str[5] . $str[6] . "月" . $str[8] . $str[9] . "日";
    return $ret;
}

/**
 * 　date を　O年
 * @param type $date
 * @return string
 */
function set_year($date) {
    $ret = "";
    $str = str_split($date);
    $ret.=$str[0] . $str[1] . $str[2] . $str[3];
    return $ret;
}

function set_month($date) {
    $ret = "";
    $str = str_split($date);
    $ret.=$str[5] . $str[6] ;
    return $ret;
}


function month($date) {
    $str = str_split($date);
    $month = "";
    $month .= $str[0] . $str[1] . $str[2] . $str[3] . $str[4] . $str[5] . $str[6] . $str[7] . "01";
    //var_dump($month);
    return $month;
}

function monthchk($month) {
    $days = 0;
    $str = str_split($month);
    $date = "";
    $date .= $str[5] . $str[6];
    if ($date == 1 || $date == 3 || $date == 5 || $date == 7 || $date == 8 || $date == 10 || $date == 12) {
        $days = 31;
    } else if ($date == 2) {
        $days = 28;
    } else {
        $days = 30;
    }
    //var_dump($days);
    return $days;
}

function numchk ($num,$cnt){
     $str = str_split($num);
     $count=0;
     $ret=true;
     foreach($str as $val){
         if(!is_numeric($val)){
             $ret=false;
         }
         $count++;
     }
     if($cnt!=$count){
         $ret=false;
     }
     return $ret; 
}
