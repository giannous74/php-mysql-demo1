<?php

include('dbcon.php');
include('functions.php');

readDatabase();

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
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
//            print_r($row);
            echo $row["username"].", Password ".$row["password"].", email: ".$row["email"] . "<br>" ;
        }
//      $rows = mysqli_fetch_assoc($result);
//        foreach ($rows as $row){
//            echo $row;
//        }
      ?>
    </div>
  </div>

</body>

</html>