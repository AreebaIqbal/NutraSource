<?php
session_start();
include 'connection.php';
$mail=$_SESSION['UserEmail'];
              if($mail){
               $qry = "SELECT * FROM `orders` o INNER JOIN `products` p ON p.id = o.pid WHERE UserEmail='$mail'";
               $res = mysqli_query($con , $qry);
              }
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>NeutraSource</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body {
  background: #eee;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

.clearfix {
  content: "";
  display: table;
  clear: both;  
}

#site-header, #site-footer {
  background: #fff;
}

#site-header {
  margin: 0 0 30px 0;
}

#site-header h1 {
  font-size: 31px;
  font-weight: 300;
  padding: 40px 0;
  position: relative;
  margin: 0;
}

a {
  color: #000;
  text-decoration: none;

  -webkit-transition: color .2s linear;
  -moz-transition: color .2s linear;
  -ms-transition: color .2s linear;
  -o-transition: color .2s linear;
  transition: color .2s linear;
}

a:hover {
  color: #53b5aa;
}

#site-header h1 span {
  color: #53b5aa;
}

#site-header h1 span.last-span {
  background: #fff;
  padding-right: 150px;
  position: absolute;
  left: 217px;

  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
  -ms-transition: all .2s linear;
  -o-transition: all .2s linear;
  transition: all .2s linear;
}

#site-header h1:hover span.last-span, #site-header h1 span.is-open {
  left: 363px;
}

#site-header h1 em {
  font-size: 16px;
  font-style: normal;
  vertical-align: middle;
}

.container {
  font-family: 'Open Sans', sans-serif;
  margin: 0 auto;
  width: 980px;
}

#cart {
  width: 100%;
}

#cart h1 {
  font-weight: 300;
}

#cart a {
  color: #53b5aa;
  text-decoration: none;

  -webkit-transition: color .2s linear;
  -moz-transition: color .2s linear;
  -ms-transition: color .2s linear;
  -o-transition: color .2s linear;
  transition: color .2s linear;
}

#cart a:hover {
  color: #000;
}

.product.removed {
  margin-left: 980px !important;
  opacity: 0;
}

.product {
  border: 1px solid #eee;
  margin: 20px 0;
  width: 100%;
  height: 195px;
  position: relative;

  -webkit-transition: margin .2s linear, opacity .2s linear;
  -moz-transition: margin .2s linear, opacity .2s linear;
  -ms-transition: margin .2s linear, opacity .2s linear;
  -o-transition: margin .2s linear, opacity .2s linear;
  transition: margin .2s linear, opacity .2s linear;
}

.product img {
  width: 100%;
  height: 100%;
}

.product header, .product .content {
  background-color: #fff;
  border: 1px solid #ccc;
  border-style: none none solid none;
  float: left;
}

.product header {
  background: #000;
  margin: 0 1% 20px 0;
  overflow: hidden;
  padding: 0;
  position: relative;
  width: 24%;
  height: 195px;
}

.product header:hover img {
  opacity: .7;
}

.product header:hover h3 {
  bottom: 73px;
}

.product header h3 {
  background: #53b5aa;
  color: #fff;
  font-size: 22px;
  font-weight: 300;
  line-height: 49px;
  margin: 0;
  padding: 0 30px;
  position: absolute;
  bottom: -50px;
  right: 0;
  left: 0;

  -webkit-transition: bottom .2s linear;
  -moz-transition: bottom .2s linear;
  -ms-transition: bottom .2s linear;
  -o-transition: bottom .2s linear;
  transition: bottom .2s linear;
}

.remove {
  cursor: pointer;
}

.product .content {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 140px;
  padding: 0 20px;
  width: 75%;
}

.product h1 {
  color: #53b5aa;
  font-size: 25px;
  font-weight: 300;
  margin: 17px 0 20px 0;
}

.product footer.content {
  height: 50px;
  margin: 6px 0 0 0;
  padding: 0;
}

.product footer .price {
  background: #fcfcfc;
  color: #000;
  float: right;
  font-size: 23px;
  font-weight: 300;
  line-height: 49px;
  margin: 0;
  padding: 0 30px;

  -webkit-transition: margin .15s linear;
  -moz-transition: margin .15s linear;
  -ms-transition: margin .15s linear;
  -o-transition: margin .15s linear;
  transition: margin .15s linear;
  
}

.product footer .full-price {
  background:  #fdd023;
  color: white;
  float: right;
  font-size: 42px;
  font-weight: 300;
  line-height: 49px;
  margin: 0;
  padding: 0 30px;

  -webkit-transition: margin .15s linear;
  -moz-transition: margin .15s linear;
  -ms-transition: margin .15s linear;
  -o-transition: margin .15s linear;
  transition: margin .15s linear;
}

.qt-minus {
  display: block;
  float: left;
  font-size: 20px !important;
}

.qt {
  font-size: 19px;
  line-height: 50px;
  width: 70px;
  text-align: center;
}

.qt-minus {
  background: #fcfcfc;
  border: none;
  font-size: 30px;
  font-weight: 300;
  height: 100%;
  padding: 0 20px;
  -webkit-transition: background .2s linear;
  -moz-transition: background .2s linear;
  -ms-transition: background .2s linear;
  -o-transition: background .2s linear;
  transition: background .2s linear;
}
.qt-minus {
  line-height: 47px;
}

#site-footer {
  margin: 30px 0 0 0;
}

#site-footer {
  padding: 40px;
}

#site-footer h1 {
  background: #fcfcfc;
  border: 1px solid #ccc;
  border-style: none none solid none;
  font-size: 24px;
  font-weight: 300;
  margin: 0 0 7px 0;
  padding: 14px 40px;
  text-align: center;
}

#site-footer h2 {
  font-size: 24px;
  font-weight: 300;
  margin: 10px 0 0 0;
}

#site-footer h3 {
  font-size: 19px;
  font-weight: 300;
  margin: 15px 0;
}

.left {
  float: left;
}

.right {
  float: right;
}

.btn {
  background: #fdd023;
  border: 1px solid #999;
  border-style: none none solid none;
  cursor: pointer;
  display: block;
  color: #fff;
  font-size: 20px;
  font-weight: 300;
  padding: 16px 0;
  width: 290px;
  text-align: center;

  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
  -ms-transition: all .2s linear;
  -o-transition: all .2s linear;
  transition: all .2s linear;
}

.btn:hover {
  color: white !important;
  background: rgb(223, 22, 22);
}

.type {
  background: #fcfcfc;
  font-size: 13px;
  padding: 10px 16px;
  left: 100%;
}

.type, .color {
  border: 1px solid #ccc;
  border-style: none none solid none;
  position: absolute;
}

.color {
  width: 40px;
  height: 40px;
  right: -40px;
}

.red {
  background: #cb5a5e;
}

.yellow {
  background: #f1c40f;
}

.blue {
  background: #3598dc;
}

.minused {
  margin: 0 50px 0 0 !important;
}

.added {
  margin: 0 -50px 0 0 !important;
}
</style>
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
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
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About</a></li>
                        <li><a class="nav-link" href="#services">Oath</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
						<li><a class="nav-link" href="#team">Team</a></li>
						<li><a class="nav-link" href="products.php">Products</a></li>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a class="nav-link" href="login.html"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts"><i class="fas fa-comment-dots"></i></a>
                          </li>
                    </ul>
                </div>

            </div>
        </nav>
	</header>
	<!-- End header -->


<div class="container">

<section id="cart"> 
      <?php 
      $total = 0;
      while ($row = mysqli_fetch_assoc($res)) { ?>
  <article class="product">
    <header>
    <?php if($row['img']!=''){ ?>
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" width=60px; />
    <?php } 
            else{ ?>
            <img src="images/about-img-03.jpg" alt="">
            <?php } ?>
    </header>

    <div class="content">

    <h1 style = " color:rgb(223, 22, 22);"> <b> <?php echo $row['name'] ?> 
    <?php if($row['number']!=''){ ?>
                 - <?php echo $row['number'] ?> 
                  <?php } 
                  else {
                   ?>  <br>
                  <?php }
                  ?> </b></h1>

      <?php echo $row['description'] ?> 
    </div>

    <footer class="content">
      <span  class="qt-minus"  >Quantity: <?php echo $row['quantity'] ?> </span>
      
      <h2 class="full-price" >
      <?php
      $price = $row['price'] * $row['quantity'];
      echo $price;
      $total = $total + $price;
      ?>
      </h2>
       
      <h2 class="price">
      <?php echo $row['price'] ?>
      </h2>
    </footer>
  </article>
    <?php } ?>
  

</section>

</div>

<footer id="site-footer">
<div class="container clearfix">

  <div class="left">
    <h2 class="subtotal">Subtotal: <span></span><?php echo $total; ?>Rs</h2>
    <h3 class="tax">Taxes: <span>0.00</span>Rs</h3>
    <h3 class="shipping">Shipping: <span>0.00</span>Rs</h3>
  </div>

  <div class="right">
    <h1 class="total">Total: <span>  </span> <?php echo $total; ?>Rs</h1>
    <a class="btn">Checkout</a>
  </div>

</div>
</footer>
</body>
</html>