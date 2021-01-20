<?php

$url = "http://localhost:9000/sample";
$json = file_get_contents($url);
$arr = json_decode($json,true);
var_dump($arr);


