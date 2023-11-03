<?php

class Product {
    public $judul = "judul",
                $penulis = "penulis",
                $harga = 0,
                $halaman = 0,
                $waktumain = 0,
                $tipe='komik';

    public function __construct($judul,$penulis,$harga,$halaman,$waktumain,$tipe){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->harga=$harga;
        $this->halaman=$halaman;
        $this->waktumain=$waktumain;
        $this->tipe=$tipe;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }

    public function getFulllable(){
        if($this->tipe=='komik'){
            $str = $this->tipe ." | " . $this->judul . $this->penulis . " Harga "  . " ( " . $this->harga ." ) " . "Halaman"  . $this->halaman;
        }else if ($this->tipe=='game'){
            $str = $this->tipe ." | " . $this->judul . $this->penulis . " Harga "  . " ( " . $this->harga ." ) " . "Waktu Main"  . $this->waktumain;
        }

        return $str;

    }
}

class PrintInfoProduct {
    public function doPrint( Product $product ){
        $string = "Nama komik , Nama , Harga";
        return $string;
    }
}

$product1 = new Product('Naruto','Masusi Natsumoto',80000, 100, 0 , "komik");
echo $product1->getFulllable();

echo "<br /><hr />";

$infoProduct = new PrintInfoProduct();
echo $infoProduct->doPrint($product1);



