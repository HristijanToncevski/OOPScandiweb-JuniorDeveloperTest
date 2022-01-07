<?php
    class Book extends Product{
        private $weight;

        public function getWeight(){
            return $this->weight;
        }

        public function setWeight($weight){
            $this->weight = $weight;
        }

        public function save($connection):bool{
            $this->setSku($_POST['sku']);
            $this->setName($_POST['name']);
            $this->setPrice($_POST['price']);
            $this->setType($_POST['productType']);
            $this->setWeight($_POST['weight']);

            $result = mysqli_query($connection, "SELECT * FROM product WHERE sku = '".$this->getSku()."'");
                if(!$result->fetch_assoc()){
                        $sql = "INSERT INTO product(sku,name,price,productType,weight) VALUES('".$this->getSku()."','".$this->getName()."','".$this->getPrice()."','".$this->getType()."','".$this->getWeight()."')";
                        mysqli_query($connection, $sql);
                    return true;
                } else {
                    return false;
            }
        }
    }
?>
