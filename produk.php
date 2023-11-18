<?php 

class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

public function __construct($judul, $penulis, $penerbit, $harga ) {
$this->judul = $judul;
$this->penulis = $penulis
$this->penerbit = $penerbit
$THIS->harga = $harga
}

public function getlabel(){
    return "$this->penulis, $this->penerbit";
}

}

$produk1 = new produk("naruto","masashi kishimoto","shonen jump","40000");
$produk2 = new produk("one piece","Eiichiro oda","shonen jump","10000000");

var_dump(produk1);