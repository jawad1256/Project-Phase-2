<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload images</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadimg"><br><br>
        <input type="submit" name="submit" value="Upload img">
    </form>
</body>
</html>
<?php
// print_r($_FILES["uploadimg"]);
$filename= $_FILES["uploadimg"]['name'];
$tempname= $_FILES["uploadimg"]['tmp_name'];
$folder= "images/".$filename;
// echo $folder;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' alt='pic' width='100px' height='100px'>";
?>
