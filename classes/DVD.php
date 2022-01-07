<?php
    class DVD extends Product{
        private $size;

        public function getSize(){
            return $this->size;
        }

        public function setSize($size){
            $this->size = $size;
        }

        public function save($connection):bool{
            $this->setSku($_POST['sku']);
            $this->setName($_POST['name']);
            $this->setPrice($_POST['price']);
            $this->setType($_POST['productType']);
            $this->setSize($_POST['size']);

            $result = mysqli_query($connection, "SELECT * FROM product WHERE sku = '".$this->getSku()."'");
                if(!$result->fetch_assoc()){
                        $sql = "INSERT INTO product(sku,name,price,productType,size) VALUES('".$this->getSku()."','".$this->getName()."','".$this->getPrice()."','".$this->getType()."','".$this->getSize()."')";
                        mysqli_query($connection, $sql);
                    return true;
                } else {
                    return false;
            }
        }
    }
?>