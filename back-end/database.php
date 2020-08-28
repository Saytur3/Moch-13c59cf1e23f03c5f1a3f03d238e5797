<?php
  $conn = new mysqli("localhost:3356", "root", "", "test1");

  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  }
?>
