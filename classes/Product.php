<?php
    abstract class Product{
        protected $sku;
        protected $name;
        protected $price;
        protected $productType;

        public function setSku($sku){
            $this->sku = $sku;
        }
    
        public function getSku(){
            return $this->sku;
        }
    
        public function setName($name){
            $this->name = $name;
        }
    
        public function getName(){
            return $this->name;
        }
    
        public function setPrice($price){
            $this->price = $price;
        }
    
        public function getPrice(){
            return $this->price;
        }

        public function setType($productType){
            $this->productType = $productType;
        }

        public function getType(){
            return $this->productType;
        }
        
        abstract public function save($connection);
    } 
?>