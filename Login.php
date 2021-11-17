<?php
   session_start();
   include 'functions.php';
   include 'connection.php';
   if(isset($_POST['signin']))
   {
      
       $un = get_safe_value($con, $_POST['username']);
       $pass = get_safe_value($con,$_POST['password']);

       $qry = "SELECT * FROM `login` WHERE email = '$un' AND pass = '$pass'";
       $run = mysqli_query($con , $qry);
       $row = mysqli_num_rows($run);
       if($row <1)
       {
       ?> <script> 
       alert("Incorrect Username Or Password");
       window.open('login.php', '_self');
       </script>
       <?php
    
   }
    else{
      $_SESSION['email'] = $un;
      $_SESSION['pswrd'] = $pass;
        ?> <script> 
       window.open('admin.html', '_self');
       </script>
       <?php
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "stylesheet" href = "css/Login-order.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="menu-arrow.png" id="icon" alt="Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required>
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="LOG IN" name="signin">
    </form>

    <!-- Remind Passowrd -->
    

  </div>
</div>
</body>
</html>