<?php

class Produk {
        public $judul, $penulis,
         $penerbit, $harga;

    public function getLabel() {
        return "$this->penulis, $this->penerbit,$this->penerbit,$this->harga";
    }
}

$p1 = new Produk();
$p1->judul = "naruto";
$p1->penulis = "masashi kishimoto";
$p1->penerbit = "shonen jump";
$p1->harga = 5000;

echo "Produk 1 " . $p1->getLabel();

$p2 = new Produk();
$p2->judul = "dudung";
$p2->penulis = "diding";
$p2->penerbit = "dadang";
$p2->harga = 74000;

echo "<br>Produk 2 ".$p2->getLabel();