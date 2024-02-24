<?php
  $hostname = "localhost";
  $username = "sa";
  $password = "k=XxAs9K!E72DFRP";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
