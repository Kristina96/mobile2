<?php
header('Content-type: text/html; charset=utf8');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(!empty($_POST["login"]) ||
       !empty($_POST["pass"])
      ){
        $login=$_POST["login"];
        $pass=$_POST["pass"];
        
        $db = mysqli_connect("localhost", "root", "", "jqueryMobile") or die("Не работает");
        mysqli_query($db, "SET NAMES UTF8");
        
        
        $query="SELECT * FROM users WHERE login='{$login}' AND pass='{$pass}'";
        $result = mysqli_query($db,$query);
        
        if (mysqli_num_rows($result)) {
            echo "Вход1";
        } else {
            echo "Не получилось!";
        }
    }
}