<?php
include("connection.php");
$id = $_GET['id'];
$query= "DELETE FROM product_details where ID='$id' ";
$data= mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('Sucessfully Deleted')</script>";
    ?>
        <meta http-equiv="refresh" content="0; url =display.php " />

<?php
}
else{
    echo "Failed";
}
?>