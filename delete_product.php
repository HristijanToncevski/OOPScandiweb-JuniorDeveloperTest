<?php
include_once "Database.php";
    if(isset($_POST['delete_button'])){
        $db = new Database();
        $connection = $db->getConnection();
        if(!empty($_POST['delete'])){
            $all = $_POST['delete'];
            $string = implode(",", $all);
            $query = "DELETE FROM product WHERE id IN ($string)";
            $result = mysqli_query($connection, $query);
        header("Location: index.php");
        exit;
    } else{
        header("Location: index.php");
        exit;
        }
    }
?>