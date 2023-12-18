<!-- PHP CODE FOR GETTING ID -->
<?php
include("connection.php");
error_reporting(error_reporting() & ~E_WARNING);
$id = $_GET['id'];
$query = "SELECT * FROM product_details WHERE ID='$id'";
$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!-- HTML CODE  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCrud.css">
    <link rel="stylesheet" href="afterloginPage.css">
    <title>Update Page</title>
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
        <h1>Update Product Information</h1>
        <form action="#" method="POST">
            <div class="form">
                <div class="form_title">
                    <label>Product ID:</label>
                    <input type="text" value="<?php echo $result['product_id'] ?>" name="pro_id" class="input" >
                </div>
                <div class="form_title">
                    <label>Product name:</label>
                    <input type="text" value="<?php echo $result['product_name'] ?>" name="pro_name" class="input">
                </div>
                <div class="form_title">
                    <label>Stock Available</label>
                    <select class="selectbox" name="stock_a" required>
                        <option value="">select</option>
                        <option value="yes" <?php
                                                if ($result['yes'] == 'yes') {
                                                    echo "Selected";
                                                }
                                                ?>>yes</option>
                        <option value="No" <?php
                                                if ($result['No'] == 'No') {
                                                    echo "Selected";
                                                }
                                                ?>>No</option>
                    </select>
                </div>
                <div class="form_title">
                    <label>Upload Img</label>
                    <input type="file" name="uploadimg">

                </div>

                <div class="form_title">
                    <input type="Submit" value="Update Details" name="updateDetails" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>

<!-- PHP CODE -->
<?php

if (isset($_POST['updateDetails'])) {
    $pid = $_POST['pro_id'];
    $pname = $_POST['pro_name'];
    $stock = $_POST['stock_a'];
    
    

    $query = "UPDATE product_details set product_id= '$pid', product_name='$pname', stock_ava= '$stock' WHERE ID='$id' ";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "<script>alert('Record Updated Sucessfully')</script>";
?>
        <meta http-equiv="refresh" content="0; url =display.php " />

<?php
    } else {
        echo "failed";
    }
}
?>

</html>