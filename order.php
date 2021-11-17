<?php
session_start();
include 'connection.php';
$id=$_GET['id'];
$query=mysqli_query($con,"select * from `products` where id='$id'");
$row=mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "stylesheet" href = "css/Login-order.css">

    <style>
        #formContent {
            border: 2px solid lightgrey;
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
        form {
  width: 300px;
  margin: 0 auto;
  text-align: center;
  padding-top: 0px;
}

.value-button {
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 20px;
  text-align: center;
  vertical-align: middle;
  padding: -8px 0;
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.value-button:hover {
  cursor: pointer;
  background: grey;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

input#number {
  text-align: center;
  border: none;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  margin: 8px;
  width: 60px;
  height: 40px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
    </style>

    <script>
        function increaseValue() {
  var value = parseInt(document.getElementById('number').value);
 
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value);
  if(value>1){
  value--;
  document.getElementById('number').value = value;
  }
  
}

    </script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
      <br>
      <h1 style = "text-align: center; "> Add To Cart </h1>
      <br>
    <?php if($row['img']!=''){ ?>
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" width=160px; height=160px alt = "" />
    <?php } 
    else{
       ?> <img src="images/about-img-03.jpg" width=160px; height=160px alt="">
     <?php }
    ?>
    <br>
    <h2 style = "text-align: center; color:rgb(223, 22, 22);"> <b> <?php echo $row['name'] ?> 
    <?php if($row['number']!=''){ ?>
                 - <?php echo $row['number'] ?> 
                  <?php } 
                  else {
                   ?>  <br>
                  <?php }
                  ?>
</b> </h2>
    
    <?php if($row['description']!=''){ ?>
                  <h6> <?php echo $row['description']; ?> </h6>
                  <?php } ?>
   
  <form action = "order1.php?id=<?php echo $row['id']; ?>" method="POST">
  <h5> Rs. <?php echo $row['price'] ?>  
    
  <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number" name="quantity" value="1" />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
  <input type="submit" class="fadeIn fourth" value="Add To Cart" name="submit">
</form> </h5>

    
</body>
</html>