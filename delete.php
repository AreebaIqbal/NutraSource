<?php
include 'connection.php';
 $id=$_GET['id'];
	
	$qry = "delete from `products` where id='$id'";
    $run = mysqli_query($con, $qry);
	header('location:edit-delete.php');
?>