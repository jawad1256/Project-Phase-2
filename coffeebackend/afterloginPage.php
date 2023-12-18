<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afterloginPage.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Admin Home</title>
</head>

<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><a href="mainPage.html"><img src="img/logo.jpg" alt="logo"></a></div>
            <li><a href="afterloginPage.css">Home</a> </li>
            <li><a href="addtoproduct.php">Add to Product</a></li>
            <li><a href="display.php">Display all Products</a> </li>
            <li><a href="mainPage.html">Log out</a> </li>
        </ul>
    </nav>

    <section class="coffee_container">
        <?php
        include("connection.php");



        // Query to get products in stock
        $query = "SELECT * FROM product_details WHERE stock_ava = 'yes'";
        $result = mysqli_query($con, $query);


        // Display products on the home page
        if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {
                // echo "<p>" . $row["product_name"] . "</p>";
                echo "
            
            <div class='card'>
            <div class='card-image'><img src=".$row["pic"]."  style='height: 220px; width: 300px; border-radius: 15px 15px 0 0;'></div>
            <h2>" . $row["product_name"] . "</h2>
            <p>Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk.</p>
            </div>";
            }
        } else {
            echo "No products in stock.";
        }

        ?>
    </section>

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

</html>