<?php
require('db.php');
require('fonction.php');
$erreur = "";
session_start();
$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(verifie($email, $password)){
        header("Location: admin.php");
    }else{
        $erreur = "email ou mot de passe incorect";
    }
}
redirectionAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $erreur; ?></p>
    <form action="" method='POST'>
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>