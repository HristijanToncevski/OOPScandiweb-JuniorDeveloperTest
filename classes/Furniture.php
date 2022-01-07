<?php
    class Furniture extends Product{
        private $height;
        private $width;
        private $length;

        public function setHeight($height){
            $this->height = $height;
        }
    
        public function getHeight(){
            return $this->height;
        }
    
        public function setWidth($width){
            $this->width = $width;
        }
    
        public function getWidth(){
            return $this->width;
        }
    
        public function setLength($length){
            $this->length = $length;
        }
    
        public function getLength(){
            return $this->length;
        }

        public function save($connection):bool{
            $this->setSku($_POST['sku']);
            $this->setName($_POST['name']);
            $this->setPrice($_POST['price']);
            $this->setType($_POST['productType']);
            $this->setHeight($_POST['height']);
            $this->setWidth($_POST['width']);
            $this->setLength($_POST['length']);

            $result = mysqli_query($connection, "SELECT * FROM product WHERE sku = '".$this->getSku()."'");
                if(!$result->fetch_assoc()){
                        $table = "product";
                        $sql = "INSERT INTO $table(sku,name,price,productType,height,width,length) VALUES('".$this->getSku()."','".$this->getName()."','".$this->getPrice()."','".$this->getType()."','".$this->getHeight()."','".$this->getWidth()."','".$this->getLength()."')";
                        mysqli_query($connection, $sql);
                    return true;
                } else {
                    return false;
            }
        }
    }
?>