<?php

class Produk {
        public $judul, $penulis,
         $penerbit, $harga;

    public function getLabel() {
        return "$this->penulis, $this->penerbit,$this->penerbit,$this->harga";
    }

    public function __construct ($judul, $penulis,$penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

$p1 = new Produk("naruto","masashi kishimoto","shonen jump",5000);
echo "Produk 1 " . $p1->getLabel()."<br>";

$p2 = new Produk("dedeng","dudung","diding",56000);
echo "Produk 2 ".$p2->getLabel();