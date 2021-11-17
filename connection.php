<?php
 $con = mysqli_connect('localhost','root','','factory');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>