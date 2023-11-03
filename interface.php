<?php

interface InfoProduct{
    public function getFullProduct();
}

abstract class Product {
    protected $judul = "judul",
                  $penulis = "penulis";
    protected $diskon=0;
    protected $harga = 0;
    public function __construct($judul,$penulis,$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->harga=$harga;
    }

    abstract public function getInfoProduct();
    public function getHarga(){
        $harga = $this->harga - ( $this->harga * $this->diskon / 100 );
        return $harga ;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
}

class Komik extends  Product implements InfoProduct {
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
    public function getInfoProduct(){
        return "$this->judul, $this->penulis";
    }
}

class Game  extends  Product implements InfoProduct{
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
    public function getInfoProduct(){
        return "$this->judul, $this->penulis";
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





