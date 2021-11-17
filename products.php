<?php
include 'connection.php';
$sql = "SELECT * FROM `products` order by id desc";
$res = mysqli_query($con, $sql);
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
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    marquee{
      /* background-color:rgb(245, 49, 49); */
      background: rgb(223, 22, 22);
      color: #fdd023;
      
      font-size: 30px;
      padding: 20px;
  }
  
  .col-md-3 .card{
    margin: 8% 0%;
   box-shadow: 1px 2px 15px gray ;
}
 
  .btn{
      
      border: 4px solid #fdd023;
      width: 15rem;
      text-align: auto; 
      background-color:  rgb(223, 22, 22);
      color: #ffffff;
  }
  .btn:hover{
      background: #fdd023; 
      border: 1px solid rgb(223, 22, 22);
      color: #ffffff;
  }
  .card img:hover{
    transform: scale(1.1);
    transition: .5s;
    cursor: pointer;
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
                          <li><a class="nav-link active" href="index.html">Home</a></li>
                          <li><a class="nav-link" href="index.html#about">About Us</a></li>
                          <li><a class="nav-link" href="index.html#services">Oath</a></li>
                          <li><a class="nav-link" href="index.html#gallery">Gallery</a></li>
                          <li><a class="nav-link" href="index.html#team">Team</a></li>
                          <li><a class="nav-link" href="products.php">Products</a></li>
                          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a class="nav-link" href="login.html"><i class="fas fa-user"></i></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="cart.html"><i class="fas fa-shopping-bag"></i></a>
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
    <br> <br>
<marquee direction="left" scrollamount="15">
            Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp
            Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp Bringing The Medicine At Your Door!
            Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp Bringing The Medicine At Your Door! &nbsp &nbsp &nbsp Bringing The Medicine At Your Door! 
          </marquee> 
          <div class="row">
          <?php
                    while ($row = mysqli_fetch_assoc($res)) {
                      if($row!=0){
                        $descr = $row['description'];
                        $count = strlen($descr);
                    ?>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card" style="width: 18rem;">
            <?php if($row['img']!=''){ ?>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" height="250" class="card-img-top" alt="...">
            <?php } 
            else{ ?>
            <img src="images/about-img-03.jpg" alt="">
            <?php } ?>
                <div class="card-body" style="width: 18rem; height: 240px;">
                <hr style="background-color:rgb(223, 22, 22);height: 3px;">
                  <h2 style = "text-align: center; color:rgb(223, 22, 22);"> <b> <?php echo $row['name'] ?> </b> </h2>
                  <?php if($row['description']!=''){ ?>
                  <h5> <?php echo substr($descr,0,120); ?> 
                  <?php 
                        if($count>150){
                         ?> <b style="color: blue;"> ...... </b> </h5>
                      <?php  }
                } ?>
                  <?php if($row['number']!=''){ ?>
                  <h3 style = "text-align: center; color:rgb(223, 22, 22);"> <b> Number # </b>  <?php echo $row['number'] ?> </h3>
                  <?php } 
                  else {
                   ?>  <br>
                  <?php }
                  ?>
                    <a href="order.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" ><?php echo $row['price'] ?></a>
                </div>
            </div>
        </div>
        <?php }}
       ?>
       </div> 
</body>
</html>