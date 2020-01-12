<?php
/* 
include('dbcon.php');


if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO clients (username, password, email) VALUES ('$username', '$password', '$email')";

    $result = mysqli_query($con, $sql);
    if (!$result) {
      die ("Mysql error " . mysqli_error($con));
    } else {
      echo 'Value inserted into Database';
    }

 
    $users = ["Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom"];


    if (strlen($username) < 3) {
        echo "Your username is less than 3 characters";
    } else {
        echo "Your username is " . $username;
    }

    if (strlen($password) < 3) {
        echo "Your password is less than 3 characters";
    } elseif (strlen($password) > 10) {
        echo "Your password is larger than 10";
    } else {
        echo "Your password is " . $password;
    }

    if (!in_array($username, $users)){
        echo "You arent invited";
    } else {
        echo "welcome";
    }
    

    // echo "Hello " . $username;
    // echo "Your password is: " . $password;
}
 */
?>


<!--

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <form action="testconnection2.php" method="post">
    <input type="text" name="username" placeholder="username"> <br>
    <input type="password" name="password" placeholder="password"> <br>
    <input type="text" name="email" placeholder="Your email"><br>
    <input type="submit" name="submit">
  </form>

</body>

</html> -->