<?php
session_start();
include 'connection.php';
$id=$_GET['id'];   
$mail=$_SESSION['UserEmail'];
echo $mail;
    $quantity = $_POST['quantity'];
            $qry = "INSERT INTO `orders`(`pid`, `UserEmail`, `quantity`) VALUES ('$id', '$mail', '$quantity')";
            $run = mysqli_query($con , $qry);          
               ?> <script> 
               window.open('cart.php', '_self');
               </script>
?>