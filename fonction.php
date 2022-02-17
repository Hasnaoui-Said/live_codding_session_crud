<?php

function isConnected(){
    return isset($_SESSION['email']);
}

function redirectionLogin(){
    if(!isConnected()){
        header('Location: index.php');
    }
}

function redirectionAdmin(){
    if(isConnected()){
        header('Location: admin.php');
    }
}