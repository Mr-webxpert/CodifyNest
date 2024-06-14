<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "codifynest_db";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // if(isset($_POST["submit"])){

  //   $name = $_POST["name"];
  //   $email = $_POST["emailHelp"];
  //   $phone = $_POST["phone"];
  //   $subject = $_POST["subject"];
  //   $message = $_POST["comments"];
  // }

  if($conn) {
    die("connection failed" . mysqli_connect_error());
  } 

  echo"connected successfully";
  
?>