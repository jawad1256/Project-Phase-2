<?php 
include("connection.php");
error_reporting(error_reporting() & ~E_WARNING);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCrud.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <title>Registeration..</title>
</head>

<body>
<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><a href="index.html"><img src="img/logo.jpg" alt="logo"></a></div>
            <li><a href="mainPage.html">Home</a> </li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="about.html">About</a> </li>
            <li><a href="contact.html">Contact Us</a> </li>
            <li><a href="login.php">Log in</a> </li>
        </ul>
        <div class="rightnav">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>

    </nav>
    <div class="container">
        <h1>Registration FORM</h1>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="form">
            <div class="form_title">
                <label>First Name:</label>
                <input type="text" name="Fname" class="input" required>
            </div>
            <div class="form_title">
                <label>Last Name:</label>
                <input type="text" name="Lname" class="input" required>
            </div>
            <div class="form_title">
                <label>Gender</label>
                <select class="selectbox" name="gender" required>
                    <option value="">select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form_title">
                <label>Username:</label>
                <input type="text" name="Uname" class="input" required>
            </div>
            <div class="form_title">
                <label>Password: </label>
                <input type="text" name="password" class="input" required>
            </div>
            <!-- <div class="form_title">
                <label>Upload Img</label>
                <input type="file" name="uploadimg">
                
            </div> -->
            <div class="form_title">
                <input type="Submit" value="Register" name="register" class="btn">
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

// $filename= $_FILES["uploadimg"]['name'];
// $tempname= $_FILES["uploadimg"]['tmp_name'];
// $folder= "images/".$filename;
// move_uploaded_file($tempname,$folder);


    if(isset($_POST['register']))
    {
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $gender=$_POST['gender'];
        $Uname=$_POST['Uname'];
        $pawd=$_POST['password'];
        

        $query= "INSERT INTO registerdpersons(Fname,Lname,gender,Uname,password,Pro_img) values('$Fname','$Lname','$gender','$Uname','$pawd','$folder')";
        $data = mysqli_query($con,$query);

        if($data)
        {
            // echo " Inserted Sucessfully";
            echo "<script>alert('Registration Sucessfull')</script>";
            ?>
                    <meta http-equiv="refresh" content="0; url =login.php " />
            
            <?php
        
        }
        else{
            echo "failed";
        }

    }
?>
</html>