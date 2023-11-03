<?php
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