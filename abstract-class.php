<?php

abstract  class Product {
    private $judul = "judul",
                  $penulis = "penulis";
    protected    $diskon=0;
    protected    $harga = 0;
    public function __construct($judul,$penulis,$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->harga=$harga;
    }
    abstract public function getFullProduct();

    public function getInfoProduct(){
        return "$this->judul, $this->penulis";
    }
    public function getHarga(){
        $harga = $this->harga - ( $this->harga * $this->diskon / 100 );
        return $harga ;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
}

class Komik extends  Product{
    public $halaman;
    public function __construct($judul, $penulis, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->halaman = $halaman;
    }

    public function getFullProduct(){
        $str = "Komik  | " . $this->getInfoProduct() . " Harga "  . " ( " . $this->harga ." ) " . "Halaman"  . $this->halaman;
        return $str;
    }
}

class Game  extends  Product{
    public $waktumain;

    public function __construct($judul, $penulis, $harga,$waktumain)
    {
        parent::__construct($judul, $penulis, $harga);

        $this->waktumain = $waktumain;
    }

    public function getFullProduct(){
        $str = "Game  | " . $this->getInfoProduct() . " Harga "  . " ( " . $this->harga ." ) " . "Waktu Main"  . $this->halaman;
        return $str;
    }
}
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


$komik1 = new Komik('Naruto','Masusi Natsumoto',80000, 100, 0 );
$game1 = new Game('GTC','San Andreas',80000, 0, 90 );

$listProduct = new PrintInfoProduct();
$listProduct->addProduct($komik1);
$listProduct->addProduct($game1);

echo $listProduct->doPrint();




