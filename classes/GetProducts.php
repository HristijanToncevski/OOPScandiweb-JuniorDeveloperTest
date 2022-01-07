<?php
include_once "Product.php";
include_once "./Database.php";
class GetProducts extends Product{
    public function showProducts(){
        $db = new Database();
        $connection = $db->getConnection();
        $query = "SELECT * FROM product";
        $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                echo "<div class='container'>
                <input type='checkbox' class='delete-checkbox' name='delete[]' value='$id'>
                <p>".$row['sku']."</p>
                <p>".$row['name']."</p>
                <p>".$row['price'].".00$</p>";
                if($row['productType'] == 'DVD'):
                    echo "<p>Size: ".$row['size']." MB</p>";
                elseif($row['productType'] == 'Book'):
                    echo "<p>Weight: ".$row['weight']." KG</p>";
                elseif($row['productType'] == 'Furniture'):
                    echo "<p>Dimesions: ".$row['height']."x".$row['width']."x".$row['length']."</p>";
                endif;
                echo "</div>";
            }
        }

    public function save($connection){
        $lol = "Nothing here";
    }
}
?>