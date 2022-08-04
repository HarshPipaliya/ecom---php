<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include '../css/style.css'
        ?><?php include '../css/admin.css'
            ?>
    </style>
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

    $query = "select * from tblproducts";
    $res = mysqli_query($con, $query);
    $rows = mysqli_num_rows($res);
    ?>
    <header class="index_header">
        <p>Welcome to www.shoppie.com</p>
    </header>
    <div class="navbar">
        <div class="logo">
            <h1>shoppie</h1>
        </div>
        <div class="nav-menu">
            <ul>
                <a href="" class="nav-links">
                    <li>Home</li>
                </a>
                <a href="" class="nav-links">
                    <li>Users</li>
                </a>
                <div class="nav-buttons">
                    <a href=""><button class="btn logout">Logout</button></a>
                </div>
            </ul>
        </div>
    </div>
    <div class="main_container">
        <div id="add_products">
            <form action="./index.php" method="post" enctype="multipart/form-data">
                <h1 class="add_head">Add Products</h1>
                <table>
                    <tbody>
                        <tr>
                            <td><input type="text" name="pname" class="input" placeholder="Enter product name"></td>
                            <td><input type="text" name="title" class="input" placeholder="Enter product desc"></td>
                            <td><input type="text" name="category" class="input" placeholder="Enter category"></td>
                            <td><input type="text" name="price" class="input" placeholder="Enter Price"></td>
                            <td><input type="file" accept="image/*" name="image"></td>
                            <td><input type="submit" value="Add" name="add"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div id="product_main">
            <h1 class="prod_head">Your Products</h1>
            <table id="products">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                <?php
                if ($rows > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        echo "<tr>
                            <td>" . $rows['pid'] . "</td>
                            <td>" . $rows['pname'] . "</td>
                            <td>" . $rows['title'] . "</td>
                            <td>" . $rows['price'] . "</td>
                            <td>" . $rows['category'] . "</td>
                            <td><img src='" . $rows['img'] . "' alt='' style='height:100px;object-fit:contain'></td>
                            <td><button class='actions'>Update</button><button class='actions'>Delete</button></td>
                        </tr>";
                    }
                ?>
            </table>
        </div>
    </div>
<?php
                }

                if ((isset($_POST['add'])) && ($_POST['add'] == 'Add')) {
                    $name = $_POST['pname'];
                    $title = $_POST['title'];
                    $price = $_POST['price'];
                    $category = $_POST['category'];
                    $files = $_FILES['image'];
                    if (strlen($name) > 0 || strlen($title) > 0 || strlen($category) > 0 || strlen($files['name']) > 0 || strlen($price) > 0) {

                        $filename = $files['name'];
                        $fileerror = $files['error'];
                        $filetmp = $files['tmp_name'];

                        $destination = 'images/' . $filename;
                        move_uploaded_file($filetmp, $destination);

                        $query = "INSERT INTO tblproducts (pname, title, price, category, img) VALUES ('$name', '$title', '$price', '$category', '$destination');";

                        $res = mysqli_query($con, $query);

                        echo "<script>alert('Product inserted successfully')</script>";

                        $_POST['pname'] = '';
                        $_POST['desc'] = '';
                        $_POST['price'] = '';
                        $_POST['category'] = '';
                        $_FILES['image'] = '';
                    } else {
                        echo "<script>alert('Please enter valid data')</script>";
                    }
                }
?>

</body>

</html>