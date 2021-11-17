<?php
   session_start();
   include 'functions.php';
   include 'connection.php';
   if(isset($_POST['signin']))
   {
      
       $new_un = get_safe_value($con, $_POST['username']);
       $new_pass = get_safe_value($con,$_POST['password']);
    
       $qry2 = "UPDATE `login` SET `email`='$new_un' ,`pass`= '$new_pass'";
       $run = mysqli_query($con, $qry2);

       #$qry = "SELECT * FROM `login` WHERE email = '$un' AND pass = '$pass'";
      
    //    $row = mysqli_fetch_assoc($run);
    //    $un = $row['email'];
    //    $pass = $row['pass'];
    
   }
   $qry = "SELECT * FROM `login`";
   $run = mysqli_query($con , $qry);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Setting</title>
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
    <?php
                    while ($row = mysqli_fetch_assoc($run)) {
                       
                    ?>
    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" value = "<?php echo $row['email'] ?>" required>
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" value = "<?php echo $row['pass'] ?>" required>
      <input type="submit" class="fadeIn fourth" value="UPDATE" name="signin">
    </form>

    <!-- Remind Passowrd -->
    
<?php } ?>
  </div>
</div>
</body>
</html>