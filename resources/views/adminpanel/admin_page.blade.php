<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php

@include 'config.php';

?>

<link rel="stylesheet" href="css/admin.css">

<div class="container">
    <div class="admin-product-form-container">

        <form action="" method="POST" enctype="multipart/form-data">
        <h3>Add new product</h3>
        <input type="text" placeholder="Enter product name" name="product-name" class="box">
        <input type="text" placeholder="Enter product brand" name="product-brnad" class="box">
        <input type="text" placeholder="Enter product flavour" name="product-flavour" class="box">
        <input type="text" placeholder="Enter product color" name="product-color" class="box">
        <input type="text" placeholder="Enter product description" name="product-description" class="box">
        <input type="number" placeholder="Enter product price" name="product-price" class="box">
        <input type="file" name="product-image" class="box file-upload">
        <input type="submit" class="btn" name="add-product" class="box" value="Add product">
    </form>
    </div>

    <?php

    // $select = mysqli_query($conn, "SELECT * FROM products");

    ?>

<div class="content-wrapper">

    <section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8 offset-md-2">
    <form action="simple-results.html">
    <div class="input-group">
    <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
    <div class="input-group-append">
    <button type="submit" class="btn btn-lg btn-default">
    <i class="fa fa-search"></i>
    </button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </section>
    </div>

    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Brand</td>
                    <td>Flavour</td>
                    <td>Color</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tr>
                <td>Image</td>
                <td>Name</td>
                <td>Brand</td>
                <td>Flavour</td>
                <td>Color</td>
                <td>Price</td>
                <td>Description</td>

                <td colspan="2">
                    <a href="" class="btn">Edit</a>
                    <a href="" class="btn">Delete</a>
                </td>
            </tr>
        </table>
    </div>


</div>
