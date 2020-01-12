<?php

include('dbcon.php');
include('functions.php');

if (isset($_POST['submit'])) {
  updateDatabase();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="col-sm-6">
      <form action="dbupdate.php" method="post">
        <div class="form-group">
          <label for="username">Username
            <input type="text" name="username" placeholder="username" class="form-control">
          </label><br>
        </div>
        <div class="form-group">
          <label for="password">Password
            <input type="password" name="password" placeholder="password" class="form-control">
          </label><br>
        </div>
        <div class="form-group">
          <label for="email">Email address
            <input type="text" name="email" placeholder="Your email" class="form-control">
          </label><br>
        </div>
        <div class="form-group">




          <select name="id" id="">


            <?php
            showData();
            ?>



          </select>
        </div>

        <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
      </form>
    </div>
  </div>


</body>

</html>