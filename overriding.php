<?php

class Product {
    public $judul = "judul",
        $penulis = "penulis",
        $harga = 0;

    public function __construct($judul,$penulis,$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->harga=$harga;
    }

    public function getFullProduct(){
        return "$this->judul, $this->penulis";
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
        $str = "Komik  | " . parent::getFullProduct() . " Harga "  . " ( " . $this->harga ." ) " . "Halaman"  . $this->halaman;
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
        $str = "Game  | " . parent::getFullProduct() . " Harga "  . " ( " . $this->harga ." ) " . "Waktu Main"  . $this->halaman;
        return $str;
    }
}

class PrintInfoProduct {
    public function doPrint( Product $product ){
        $string = "Nama komik , Nama , Harga";
        return $string;
    }
}

$komik1 = new Komik('Naruto','Masusi Natsumoto',80000, 100, 0 );
echo $komik1->getFullProduct();

echo "<br /><hr />";

$game1 = new Game('GTC','San Andreas',80000, 0, 90 );
echo $game1->getFullProduct();

echo "<br /><hr />";



