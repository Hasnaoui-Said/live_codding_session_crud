<?php 
$connect=mysqli_connect("localhost","root","","live");
$id = $_GET['id'];
$data = "SELECT * FROM user WHERE id = $id" ;
$result = mysqli_query($connect , $data);
$row = mysqli_fetch_array($result);

if(isset($_POST['edit']))
{
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `user` SET `email`='$email',`password`='$password' WHERE id = '$id'";

    $query = mysqli_query($connect , $sql);
    header("Location: read.php");
}
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
    <form action="" method = "POST">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $row['email']; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $row['password'] ;?>">
  </div>
  
  <button name="edit" type="submit">edit</button>
    </form>
</body>
</html>



