<?php include "database.php";
session_start();

if (isset($_SESSION['userid'])) {
  $result = $conn->query("SELECT username,lastlogin FROM user where id=".$_SESSION['userid']);
  $data = $result->fetch_array();
  if ($data['username']) {
    echo $data['username'].' <br/>Last login : '.$data['lastlogin'];
  } else {
    echo 'notlogin';
  }
  $result->close();
} else {
  echo 'notlogin';
}

?>
