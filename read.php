<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">psw</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $connect=mysqli_connect("localhost","root","","live");

        $sql = "SELECT * FROM user";

        $query = mysqli_query($connect , $sql);
    while($row = mysqli_fetch_array($query)){
        echo '<tr>';
            echo '<td>'.$row['email'].'<td>';
            echo '<td>'.$row['password'].'<td>';
            echo '<td> <a href="update.php?id='.$row['id'].'">edit</a> </td>';
         echo '</tr>';
    }
    ?>
    
  </tbody>
</table>
</body>
</html>