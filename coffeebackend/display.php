<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afterloginPage.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <title>Display</title>
    <style>
        table {
            background-color: #f2f2f2;
            margin: auto;
            width: 50%;
            border-collapse: collapse;
            border: 2px solid black;
            /* Border around the entire table */
        }

        th,
        td {
            border: 2px solid black;
            /* Border between cells */
            padding: 8px;
            align-items: center;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        .update a {
            text-decoration: none;
            color: green;
        }
    </style>
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

    <h2>Display All Records</h2>
    <?php
    include("connection.php");

    $query = "SELECT * FROM product_details";
    $data = mysqli_query($con, $query);


    $total = mysqli_num_rows($data);


    if ($total != 0) {
    ?>
        <table>
            <tr>
                <th> Product ID</th>
                <th>product name</th>
                <th>Stock Avalibilty</th>
                <th>Preview</th>
                <th>Operation</th>
            </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo " <tr>
                <td>" . $result['product_id'] . "</td>
                <td>" . $result['product_name'] . "</td>
                <td>" . $result['stock_ava'] . "</td>
                <td><img src='" . $result['pic'] . "' height='100px' width='100px' ></td>
                <td class='update'><a href='update_data.php?id=$result[ID]'>Update</a>
                 <a href='delete.php?id=$result[ID]' onclick='return checkdelete()' style='color: red;'>Delete</a>
                </td>
                </tr>";
        }
    } else {
        echo "No Record Found";
    }

        ?>
        </table>
        <script>
            function checkdelete() {
                return confirm('Are you sure you want to Delete?');
            }
        </script>

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