<?php
class PrintInfoProduct {
    public $allproduct  =  array();
    public function addProduct(Product $product){
        $this->allproduct [] = $product;
    }
    public function doPrint( ){
        echo "List All Product"."<br />";
        foreach ($this->allproduct as $p){
            echo "-".$p->getFullProduct()."<br />";
        }
    }
}