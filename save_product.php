<?php
include_once "classes/Product.php";
include_once "classes/Book.php";
include_once "classes/DVD.php";
include_once "classes/Furniture.php";
include_once "Database.php";
    if(isset($_POST['save_product']) and $_POST['productType']!=""){
        $type = $_POST['productType'];
        $object = new $type();
        if($object->save($db->getConnection())){
            header("Location: index.php");
        } else {
            echo '<div class="error">Product with this SKU already exist!</div>';
        }
    }else{
        header("Location: index.php");
    }
?>