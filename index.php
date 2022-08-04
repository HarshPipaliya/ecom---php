<?php
if (isset($_POST['add_to_cart'])) {
    $pid = $_POST['pid'];
    echo "<script>alert($pid)</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include './css/style.css' ?>
    </style>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    $server = "localhost";
    $db = "shop";
    $pw = "";
    $user = "root";

    $con = mysqli_connect($server, $user, $pw, $db);
    if (!$con) {
        die("Sorry, we lost the connection");
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar_main">
        <div class="container nav-content">
            <a class="navbar-brand" href="./index.php" style="font-size: 25px;font-weight: 700;">Shoppie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav_links" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav_links" aria-current="page" href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav_links" aria-current="page" href="./about.php">About us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="./login.php"><button class="button">Login</button></a>
                    <a href="./signup.php"><button class="button">Signup</button></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="main_container">
        <div class="slider">

        </div>
        <div class="container">
            <h1 class="product_h1">Products</h1>
            <div class="row">
                <?php
                $query = "select * from tblproducts";
                $res = mysqli_query($con, $query);
                $rows = mysqli_num_rows($res);
                if ($res) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                ?>
                        <div class='col-lg-3 col-md-4 col-sm-6 col-12 mt-3'>
                            <form method='POST' action='./index.php'>
                                <div class='card'>
                                    <input hidden type='hidden' name='pid' value="<?php echo $rows['pname']; ?>">
                                    <img src='./admin/<?php echo $rows['img']; ?>' class='card-img-top' alt=''>
                                    <div class='card-body'>
                                        <span><?php echo $rows['pname']; ?></span>
                                        <h5 class='card-title'><?php echo $rows['title']; ?></h5>
                                        <p class='card-text'>₹<?php echo $rows['price']; ?>/-</p>
                                        <a href="" class="btn btn-success" name="add_to_cart">Add to cart</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div id=" about" class="about_main container-fluid">
        <div class="about container">
            <h1>About Us</h1>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 about_links">
                    <h5>Quick Links</h5>
                    <h6><a href="">Home</a></h6>
                    <h6><a href="">Admin</a></h6>
                    <h6><a href="">Contact Us</a></h6>
                    <h6><a href="">About</a></h6>
                    <h6><a href="">Profile</a></h6>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 about_links">
                    <h5>Top Products</h5>
                    <h6><a href="">Watches</a></h6>
                    <h6><a href="">Clothes</a></h6>
                    <h6><a href="">Home Applinces</a></h6>
                    <h6><a href="">Shoes</a></h6>
                    <h6><a href="">Stationary</a></h6>
                    <h6><a href="">Books</a></h6>
                    <h6><a href="">Electrics</a></h6>
                    <h6><a href="">Mobiles</a></h6>
                    <h6><a href="">Electronics</a></h6>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 about_links">
                    <h5>Make Money with Us</h5>
                    <h6><a href="">Sell products on Amazon</a></h6>
                    <h6><a href="">Sell on Amazon Business</a></h6>
                    <h6><a href="">Sell apps on Amazon</a></h6>
                    <h6><a href="">Become an Affiliate</a></h6>
                    <h6><a href="">Advertise Your Products</a></h6>
                    <h6><a href="">Self-Publish with Us</a></h6>
                    <h6><a href="">Host an Amazon Hub</a></h6>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 about_links">
                    <h5>Shoppie Payment Products</h5>
                    <h6><a href="">Amazon Business Card</a></h6>
                    <h6><a href="">Shop with Points</a></h6>
                    <h6><a href="">Reload Your Balance</a></h6>
                    <h6><a href="">Amazon Currency Converter</a></h6>
                </div>
            </div>
        </div>
    </div>

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>