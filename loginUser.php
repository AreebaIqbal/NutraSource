<?php
 session_start();
 include 'connection.php';
 if(isset($_POST['login']))
 {
    
     $mail = $_POST['email'];
     $pass = $_POST['pass'];

     $qry = "SELECT * FROM `signup` WHERE Email = '$mail' AND Password = '$pass'";
     $run = mysqli_query($con , $qry);
     $row = mysqli_num_rows($run);
     if($row <1)
     {
     ?> <script> 
     alert("Incorrect Email Or Password");
     window.open('loginUser.php', '_self');
     </script>
     <?php
  
 }
  else{
      $_SESSION['UserEmail'] = $mail;
      $_SESSION['pswrd'] = $pass;
      ?> <script> 
     window.open('index.html', '_self');
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login_style.css">
 
  <style>
    .btn{
    background-color: rgb(223, 22, 22);
    border: 1px solid rgb(223, 22, 22);
    width: 15rem;
}
.btn:hover{
    background-color:  #fdd023;
    border: none;
}

</style>
</head>
<body>

  <div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<h1 style="margin-top: 10px; color: white;">Welcome To NutraSource!</h1>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						
					</div>
					<div class="right-top">
						<div style="margin-top: 10px;" class="mail-b"><a href="Login.php"> Login as admin</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img style="width: 380px; height: 100px;" src="images/logo1.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <li><a class="nav-link active" href="index.html">Home</a></li>
                        <li><a class="nav-link" href="index.html#about">About</a></li>
                        <li><a class="nav-link" href="index.html#services">Oath</a></li>
                        <li><a class="nav-link" href="index.html#gallery">Gallery</a></li>
						<li><a class="nav-link" href="index.html#team">Team</a></li>
						<li><a class="nav-link" href="products.php">Products</a></li>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a class="nav-link" href="login.html"><i class="fas fa-user"></i></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contact"><i class="fas fa-comment-dots"></i></a>
                          </li>
                    </ul>
                </div>

            </div>
        </nav>
	</header>
	<!-- End header -->

      <div class="container butn_head">
          <a href="login.html" class="btn btn-primary sign">LOG IN</a>
          <a href="signup.html" class="btn btn-primary sign">SIGN UP</a>
          <br> <br> <br>
      </div>
      <div class="container" style="background-color: ghostwhite;">
         
          <form method="POST">
            
            <div class="butn">
              <label> <ins> LOG IN</ins></label> <br>
            
            </div>

            <div class="form-group">
              <label for="formGroupExampleInput">Email </label>
              <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Email Address" name="email" required="required">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Password</label>
              <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password" name="pass" required="required">
            </div>
            
            <div class="butn"> <button class="log btn btn-primary" name="login">  LOG IN</button> </div>
            
          </form>
      </div>

      <br>
      <br>
      <br>
      
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>


</body>
</html>