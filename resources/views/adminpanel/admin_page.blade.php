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
        <input type="number" placeholder="Enter product price" name="product-price" class="box">
        <input type="file" name="product-image" class="box">
        <input type="submit" class="btn" name="add-product" class="box" value="Add product">
    </form>
    </div>

    <?php

    // $select = mysqli_query($conn, "SELECT * FROM products");

    ?>

    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <td>Product image</td>
                    <td>Product name</td>
                    <td>Product price</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tr>
                <td>Product image</td>
                <td>Product name</td>
                <td>Product price</td>
                <td colspan="2">
                    <a href="" class="btn"><i class="fas-fa-edit">Edit</i></a>
                    <a href="" class="btn"><i class="fas-fa-trash">Delete</i></a>
                </td>
            </tr>
        </table>
    </div>


</div>
