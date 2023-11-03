<?php
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