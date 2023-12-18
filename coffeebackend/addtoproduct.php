<?php 
include("connection.php");
error_reporting(error_reporting() & ~E_WARNING);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afterloginPage.css">
    <link rel="stylesheet" href="styleCrud.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <title>Add Products</title>
</head>
<body>
<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><a href="index.html"><img src="img/logo.jpg" alt="logo"></a></div>
            <li><a href="afterloginPage.php">Home</a> </li>
            <li><a href="addtoproduct.php">Add to Product</a></li>
            <li><a href="display.php">Display all Products</a> </li>
            <li><a href="mainPage.html">Log out</a> </li>
        </ul>
    </nav>

    <div class="container">
        <h1>Add New Product</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form">
            <div class="form_title">
                <label>Product ID:</label>
                <input type="text" name="Pro_id" class="input" required>
            </div>
            <div class="form_title">
                <label>Product name:</label>
                <input type="text" name="pro_name" class="input" required>
            </div>
            <div class="form_title">
                <label>Stock Available</label>
                <select class="selectbox" name="stock_a" required>
                    <option value="">select</option>
                    <option value="yes">yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="form_title">
                <label>Upload Img</label>
                <input type="file" name="uploadimg">
                
            </div>
            <div class="form_title">
                <input type="Submit" value="Add Product" name="add" class="btn">
            </div>
        </div>
        </form>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="row">

                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Our serivices</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="coffee.html">Coffees</a></li>
                        <li><a href="donut.html">Donuts</a></li>
                    </ul>
                </div>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-link">
                        <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com" class="fa fa-instagram"></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>


</body>
<?php 

$filename= $_FILES["uploadimg"]['name'];
$tempname= $_FILES["uploadimg"]['tmp_name'];
$folder= "images/".$filename;
move_uploaded_file($tempname,$folder);


    if(isset($_POST['add']))
    {
        $proId=$_POST['Pro_id'];
        $proname=$_POST['pro_name'];
        $stock=$_POST['stock_a'];
        
        

        $query= "INSERT INTO product_details(product_id,product_name,stock_ava,pic) values('$proId','$proname','$stock','$folder')";
        $data = mysqli_query($con,$query);

        if($data)
        {
            // echo " Inserted Sucessfully";
            echo "<script>alert('Product is Added Sucessfully')</script>";
            ?>
                    <meta http-equiv="refresh" content="0; url =afterloginPage.php " />
            
            <?php
        }
        else{
            echo "failed";
        }

    }
?>
</html>