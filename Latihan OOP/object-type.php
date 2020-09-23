<?php

class Produk {
        public $judul, $penulis,
         $penerbit, $harga;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function __construct ($judul, $penulis,$penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

class CetakInfoProduk {
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp, {$produk->harga})";
        return $str;
    }
}

$p1 = new Produk("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000);
$p2 = new Produk("LoL", "sholeh", "Garena" , 450000); 


echo "Komik : ". $p1->getLabel() . "<br>";
echo "Game : ".  $p2->getLabel() . "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($p1);
echo $infoProduk1->cetak($p2);