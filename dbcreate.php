<?php

include('dbcon.php');
include('functions.php');

insertDatabase();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="col-sm-6">
        <div class="form-group">
          <form action="dbcreate.php" method="post">
            <input type="text" name="username" placeholder="username" class="form-control"> <br>
            <input type="password" name="password" placeholder="password" class="form-control"> <br>
            <input type="text" name="email" placeholder="Your email" class="form-control"><br>
            <input type="submit" name="submit" class="btn btn-primary">
          </form>
        </div>
    </div>
  </div>

</body>

</html>