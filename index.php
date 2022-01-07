<?php
include_once "Database.php";
include_once "classes/GetProducts.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header-div">
        <div class="header">
            <span>Product List</span>
            <div class="btn-container">
                <button type="submit" name="add_button" onclick="document.location='ProductAdd.php'">ADD</button>
                <button form="form1" id="delete-product-btn" type="submit" name="delete_button" value="MASS DELETE">MASS DELETE</button>
            </div>
            <hr>
        </div>
    </div>
    <form action="delete_product.php" method="post" id="form1">
        <div id="product-list">          
        <?php 
            $product = new GetProducts();
            $product->showProducts();
        ?>
        </div>
        </form>
    <div class="footer-div">
        <div class="footer">
            <hr>
            <p>Scandiweb Test assignment</p>
        </div>
    </div>
</body>
</html>