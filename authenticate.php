<?php
  
   session_start();
   include 'connection.php';
   if(isset($_POST['signin']))
   {
      
       $mail = $_POST['email'];
       $pass = $_POST['password'];

       $qry = "SELECT * FROM `login` WHERE email = '$mail' AND password = '$pass'";
       $run = mysqli_query($con , $qry);
       $row = mysqli_num_rows($run);
       if($row <1)
       {
       ?> <script> 
       alert("Incorrect Email Or Password");
       window.open('login.html', '_self');
       </script>
       <?php
    
   }
    else{
        $_SESSION['email'] = $mail;
        $_SESSION['pswrd'] = $pass;
        ?> <script> 
       window.open('index.html', '_self');
       </script>
       <?php
    }
   }
?>
