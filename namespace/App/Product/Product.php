<?php
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