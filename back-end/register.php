<?php include "database.php";
session_start();

$result = $conn->query("SELECT username FROM user where username='".$_POST['username']."'");
if ($result) {

  echo 'userdigunakan';
} else {
  $insert = $conn->query("INSERT INTO user (username,password,lastlogin) VALUES ('".$_POST['username']."','".md5($_POST[username])."','".date('Y-m-d H:i:s')."')");
  if ($insert) {
    echo 'berhasil';
  } else {
    echo 'cobalagi';
  }

}
$result->close();


?>
