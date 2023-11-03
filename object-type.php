<?php

class Product {
    public $judul = "judul",
                $penulis = "penulis",
                $harga = 0;

    public function __construct($judul,$penulis,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

class PrintInfoProduct {
    public function doPrint( Product $product ){
        $string = "Nama komik , Nama , Harga";
        return $string;
    }

}

$product1 = new Product('Naruto','Masusi Natsumoto',80000);


$infoProduct = new PrintInfoProduct();
echo $infoProduct->doPrint($product1);

