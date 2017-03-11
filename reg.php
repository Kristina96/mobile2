<?php
header('Content-type: text/html; charset=utf8');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(!empty($_POST["login"]) ||
       !empty($_POST["pass"]) ||
      !empty($_POST["email"]) ||
      !empty($_POST["name"])
      ){
        $login=$_POST["login"];
        $pass=$_POST["pass"];
        $email=$_POST["email"];
        $name=$_POST["name"];
        
        $db = mysqli_connect("localhost", "root", "", "jqueryMobile") or die("Не работает");
        mysqli_query($db, "SET NAMES UTF8");
        
        
        $query="SELECT * FROM users WHERE login='{$login}'";
        $result = mysqli_query($db,$query);
        
        if (mysqli_num_rows($result)) {
            echo "Пользователь с таким логином уже существует в базе данных";
            return false;
        }
        
        $query="SELECT * FROM users WHERE email='{$email}'";
        $result = mysqli_query($db,$query);
        
        if (mysqli_num_rows($result)) {
            echo "Пользователь с таким e-mail уже существует в базе данных";
            return false;
        }
        
        $query="INSERT INTO users(name,login,pass, email) VALUE ('{$name}', '{$login}', '{$pass}', '{$email}')";
        $result=mysqli_query($db,$query);
        
        
        if(!$result){
            mysqli_error($db);
            echo"Ошибка";
        }
        else{echo"успешно";}
    
    }
}