
<?php
class Login{
    function CreateInstance(){
        $db = new \PDO('mysql:='.$MYSQL_HOST.';host='.$HOST_NAME.';charset=utf8mb4', $MYSQL_USER, $MYSQL_PASS);
        $auth = new \Delight\Auth\Auth($db); 
    }
}