<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font awesome cdn -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="../admin/design.css">
    <link rel="stylesheet" href="./css/homestyle.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/userprofile.css">
    <link rel="stylesheet" href="./css/product-details.css">

</head>

<body>

    <?php
    session_start();
    $count = 0;

    if (isset($_SESSION['cart'])) {
        // count is a php function which counts the number of cart items
        $count = count($_SESSION['cart']);
    }

    ?>
    <!-- Navigation Bar  -->
    <div class="navbar">
        <div class="nav-heading">
            <a href="index.php" id='main-title'>
                <h1><span>URBAN</span>DECAY</h1>
            </a>
        </div>
        <div class="nav-right">
            <ul>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="viewCart.php">
                    <li>Cart (<?php echo $count ?>)</li>
                </a>
                <span class='nav-left-element'>
                    <a href="#">
                        <li>Hello
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo $_SESSION['user'];
                                echo "
                     <a href='form/logout.php'><li>Logout</li></a>
                     ";
                            } else {
                                echo "
                        <a href='form/login.php'><li>Login</li></a>
                        ";
                            }
                            ?>
                        </li>
                    </a>

                    <!-- <a href=".../admin/form/login.php">
                        <li>Admin</li>
                    </a> -->
                </span>
                <!-- Search section -->
                <form method="GET" action="search.php">
                    <input type="text" id='search' name="query" placeholder="Search...">
                    <input type="submit" id='search-btn' value="Search">
                </form>
                <!-- Search section ends here -->
            </ul>


        </div>



        <!-- Mobile responsive navbar -->
        <div id="menuicon">
            <i id="bar" class="fas fa-bars"></i>
            
        </div>
    </div>

     

    <!-- Side navbar for phones -->
    <!-- <div class="sidebar"> -->
            <div id="navbar" class="sidebar dnone">
            <ul>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="viewCart.php">
                    <li>Cart (<?php echo $count ?>)</li>
                </a>
                <span>
                    <a href="#">
                        <li>Hello
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo $_SESSION['user'];
                                echo "
                     <a href='form/logout.php'><li>Logout</li></a>
                     ";
                            } else {
                                echo "
                        <a href='form/login.php'><li>Login</li></a>
                        ";
                            }
                            ?>
                        </li>
                    </a>

                    <!-- <a href="#">
                        <li>Admin</li>
                    </a> -->
                </span>
                <!-- Search section -->
                <!-- <form method="GET" action="search.php">
                    <input type="text" id='search' name="query" placeholder="Search...">
                    <input type="submit" id='search-btn' value="Search">
                </form> -->
                <!-- Search section ends here -->
            </ul>
            <i id="close" class="fas fa-close"></i>
        </div>
            <!-- </div> -->

<!-- Search field with a button -->
<div id="mobile-searchbar">
        <form method="GET" action="search.php" id="search-form">
                    <input type="text" id='search' name="query" placeholder="Search...">
                    <button id="search-btn">Search</button>
                </form>
                </div>  


                
                         <!-- Category Navbar Starts Here -->


    <div class='category-nav'>
        <?php
        include "./Config.php";
        ?>
        <ul>
            <li><a href="Gold.php">Gold</a></li>
            <li><a href="Silver.php">Silver</a></li>
            <li><a href="Perl.php">Pearl</a></li>
        </ul>
    </div>

    <!-- Searched prodects section -->
    <div class="searched-products">

    </div>


    <!-- <script src="index.js"></script> -->
     <script>

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener("click", () => {
        nav.classList.remove('dnone');
    });
}

if (close) {
    close.addEventListener("click", () => {
        nav.classList.add('dnone');
    });
}
     </script>


</body>

</html>