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

$product1 = new Product('Naruto','Masusi Natsumoto',80000);

echo $product1->getLabel();

