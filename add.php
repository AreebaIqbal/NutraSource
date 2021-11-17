<?php
include 'connection.php';
if(isset($_POST["submit"])){ 
 $name = $_POST['name'];
 $number = $_POST['number'];
 $price = $_POST['price'];
 $desc = $_POST['desc'];
//$img = $_POST['img'];

    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $qry = "INSERT INTO `products`(`name`, `number`, `price`, `description`, `img`) VALUES ('$name' ,'$number', '$price', '$desc', '$imgContent')";
            $run = mysqli_query($con , $qry);
             
            
 
// Display status message 

        }}
	else {
		$qry = "INSERT INTO `products`(`name`, `number`, `price`, `description`) VALUES ('$name' ,'$number', '$price', '$desc')";
		$run = mysqli_query($con , $qry);
	}
	
	}
    
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/add.css">

	

	</head>
	<body>
	<section class="ftco-section">
		
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">ADD PRODUCT</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" >Product Name</label>
													<input type="text" class="form-control" name="name"  placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" >Product Number(optional)</label>
													<input type="text" class="form-control" name="number"  placeholder="Product Number">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" >Price</label>
													<input type="text" class="form-control" name="price"  placeholder="eg: 50rs/tablet or 500rs/bottle" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label">Product Description </label>
													<textarea name="desc" class="form-control" cols="30" rows="4" placeholder="description"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="label" >Product Image(optional)</label>
												<input type="file" class="form-control" name="image" >
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="UPLOAD" name="submit" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(add.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

