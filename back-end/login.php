<?php include "database.php";
session_start();

$result = $conn->query("SELECT id FROM user where username='".$_POST['username']."' and password='".md5($_POST['password'])."'");
if ($result) {
  $data = $result->fetch_array();
  if ($data['id']) {
    $_SESSION['userid'] = $data['id'];
    $update = $conn->query("UPDATE user SET lastlogin='".date('Y-m-d H:i:s')."' where id=".$data['id']);
    echo 'berhasil';
  } else {
    echo 'inputsalah';
  }
} else {

}
$result->close();


?>
