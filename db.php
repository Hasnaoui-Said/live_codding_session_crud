<?php

function verifie($email, $password){
    $db = new PDO('mysql:dbname=live;host=localhost;port=3306',"root","");
    $smt = $db->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
    $smt->execute([
        ":email"=>$email,
        ":password"=>$password
    ]);
    $data = $smt->fetch(PDO::FETCH_OBJ);
    if(!$data){
        return false;
    }else{
        $_SESSION['email'] = $email;
        return true;
    }
}