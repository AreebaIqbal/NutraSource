<?php
include 'connection.php';
$id=$_GET['id'];
$query=mysqli_query($con,"select * from `products` where id='$id'");
$row=mysqli_fetch_array($query);


    $new_image =   base64_encode($row['img']); 
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        if(!empty($_FILES["image"]["name"])) { 
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($image)); 
                $qry = "UPDATE `products` SET `name`= '$name' ,`number`= '$number' ,`price`= '$price' ,`description`='$desc' ,`img`= '$imgContent' WHERE id='$id' " ;
                $run = mysqli_query($con, $qry);
                ?> <script> 
                window.open('edit-delete.php', '_self');
                </script> <?php
    }
}
    else {
        $qry = "UPDATE `products` SET `name`= '$name' ,`number`= '$number' ,`price`= '$price' ,`description`='$desc'  WHERE id='$id' " ;
                $run = mysqli_query($con, $qry);
                ?> <script> 
                window.open('edit-delete.php', '_self');
                </script> <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">

    <title>Edit</title>
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
                                    <input type="text" class="form-control" name="name" value = "<?php echo $row['name'] ?>" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="label" >Product Number</label>
                                    <input type="text" class="form-control" name="number" value = "<?php echo $row['number'] ?>" placeholder="Product Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" >Price</label>
                                    <input type="text" class="form-control" name="price" value = "<?php echo $row['price'] ?>" placeholder="eg: 50rs/tablet or 500rs/bottle" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Product Description </label>
                                    <textarea name="desc" class="form-control" cols="30" rows="4"  placeholder="description"> <?php echo $row['description'] ?> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label" >Product Image(optional) <br>
                                <?php if(empty($_FILES["image"]["name"])) { ?>
                                <img src='data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['img']); ?>'' width=60px; /> <?php } ?>
                            </label>
                                <input type="file" class="form-control" name="image" >
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="UPDATE" name="submit" class="btn btn-primary">
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
</body>
</html>