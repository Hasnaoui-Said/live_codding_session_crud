<?php
session_start();
require('fonction.php');
redirectionLogin();



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
    <p>admin</p>
    <p>email : <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Déconexion</a>
</body>
</html>