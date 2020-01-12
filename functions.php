<?php

include('dbcon.php');

function insertDatabase() {
  if (isset($_POST['submit'])) {
      global $con;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];

      $username = mysqli_real_escape_string($con, $username);
      $password = mysqli_real_escape_string($con, $password);

      $sql = "INSERT INTO clients (username, password, email) VALUES ('$username', '$password', '$email')";

      $result = mysqli_query($con, $sql);
      if (!$result) {
          die ("Mysql error " . mysqli_error($con));
      } else {
          echo 'Value inserted into Database';
      }
  }
}

function readDatabase(){
  global $con;
  global $result;
  $sql = "SELECT * FROM clients";
  $result = mysqli_query($con, $sql);
  if (!$result){
      die("Can\'t read database" . mysqli_error($con));
  }
}

function showData() {
  global $con;
  $sql = "SELECT * FROM clients";
  $result = mysqli_query($con, $sql);
  if (!$result){
      die("Can\'t read database" . mysqli_error($con));
  }


  while ($row = mysqli_fetch_assoc($result)){
    
    // print_r($row);
    // print_r($row);
    $id = $row ['id'];
    echo "<option value='$id'>$id</option>";
  }
}


function updateDatabase() {
  global $con;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = $_POST['id'];
  
    $sql = "UPDATE clients SET username='$username', password = '$password', email = '$email' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      die('Can\'t update Database' . mysqli_error($con));
    } else {
      echo "updated";
    }

}


function deleteDatabase() {

  global $con;
 
    $id = $_POST['id'];
  
    // $sql = "UPDATE clients SET username='$username', password = '$password', email = '$email' WHERE id = $id";

    $sql = "DELETE FROM clients WHERE id = $id";

    $result = mysqli_query($con, $sql);
    if (!$result) {
      die('Can\'t update Database' . mysqli_error($con));
    } else {
      echo "deleted";
    }
  }

