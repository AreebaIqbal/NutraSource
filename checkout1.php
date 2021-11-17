<?php
session_start();
include 'connection.php';
if(isset($_POST['order'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $number = $_POST['number'];
      $email = $_POST['email'];
      $ad = $_POST['ad'];
      $city = $_POST['city'];
      $payment = $_POST['payment'];
  $qry = "INSERT INTO `orderplace`(`First Name`, `Last Name`, `number`, `Email`, `address`, `city`, `payment`) VALUES ('$fname', '$lname', '$number', '$email', '$ad', '$city', '$payment')";
  $run = mysqli_query($con, $qry);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login_style.css">
    <style>
        .step{
  width:100%;
  height:63px;
  background:#fdd023;
  color:#FFF;
  padding-left:1%;
  padding-top:5px;
  border-bottom:3px solid #d9d9d9;
  border-radius:2px;
  float:left;
}
.number{
  width:50px;
  height:50px;
  background:#fff;
  color:#888;
  font-size:36px;
  text-align: center;
  border-radius:50%;
  float:left;
}
.title{
  float:left;
  width:80%;
  height:50px;
  margin-left:1%;
  font-size:1em;
  font-weight:300;
}
.title h1{
  font-size:2em;
  font-weight:400;
  margin-top:10px;

}
      .btn{
      background-color: rgb(223, 22, 22);
      color: white;
      border: 1px solid rgb(223, 22, 22);
      width: 15rem;
  }
  .btn:hover{
      background-color:  #fdd023;
      border: none;
  }
  .big_button{
  clear:both;
  display:block;
  width:40%;
  margin:0 auto;
  padding-top:15px;
  padding-bottom:10px;
  font-size:2em;
  text-decoration: none;
  background-color: rgb(223, 22, 22);
  color: white;
  text-align:center;
  border-bottom: 3px solid #4da7ff;
  border-radius: 2px;
}
.big_button:hover{
      background-color:  #fdd023;
  }
#complete{
  float:right;
  width:30%;
  padding-top:5px;
  border-top:1px dotted #aaa;
}
  
 
</style>
</head>
<body>
    <div class="step">
    <div class="number">
				<span>1</span>
			</div>
            <div class="title">
				<h1>Billing Information</h1>
			</div>
</div>
            <div class="container" style="background-color: ghostwhite;">
         
          <form method ="POST">
            
            
           
            <div class="form-row">
             
                <div class="form-group col-md-6">
                  <label for="inputfname">First Name</label>
                  <input type="text" class="form-control" id="inputfname" name="fname" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputlname">Last Name</label>
                  <input type="text" class="form-control" id="inputlname" name="lname">
                </div>
              </div>
              <div class="form-group">
                <label for="inputnum">Mobile Number</label>
                <input type="number" class="form-control" id="inputnum" name="number" required>
              </div>

              <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" required>
              </div>

              <div class="form-group">
                <label> Address </label>
                <input type="text" class="form-control" id="password" name="ad" required>
              </div>

              <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" id="Conpassword" name="city" required>
              </div>
            
          
      </div>
      <div class="step">
    <div class="number">
				<span>2</span>
			</div>
            <div class="title">
				<h1>Payment Method</h1>
			</div>
</div>
<div class="container" style="background-color: ghostwhite;">

<div class="form-row">
<div class="form-group col-md-6">
<div class="checkbox-wrapper">
<input type="radio" name="payment" value = "credit" required/>
<img src="credit.png" style="width: 240px; height: 140px;"/>
</div> </div>

<div class="form-group col-md-6">
<div class="checkbox-wrapper">
<input type="radio" name="payment" id="cash" value = "cash" required/> 
<img src="cash.jpg" style="width: 240px; height: 140px;"/>
</div> </div> </div>
<input class="btn" type = "submit" name = "submit" value = "Add Credit Card Information">  </input>
 <?php
 if(isset($_POST['submit'])){ ?>
<form method ="POST">      
            <div class="form-row">
            <div class="form-group col-md-6">
                  <label for="inputfname">Name On Card</label>
                  <input type="text" class="form-control" id="inputfname" name="fname" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputfname">Card Number</label>
                  <input type="text" class="form-control" id="inputfname" name="fname" placeholder="xxxx-xxxx-xxxx-xxxx" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputfname">Expiry Date</label>
                  <input type="date" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputfname">CVV Number</label>
                  <input type="text" class="form-control"  placeholder="xxxx">
                </div>
</div>
</form>
<?php } ?>
</div>
<input class="big_button" id="complete" type = "submit" name = "order" value = "Place Order">  </input>
</form>
</body>
</html>