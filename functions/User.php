
<?php
class Login{
    function CheckLogin(String $user,String $pass){
      $pass = password_hash($pass,PASSWORD_DEFAULT); 
    }
    function CreateInstance(){

    }
    function CheckInstance(){

    }
}