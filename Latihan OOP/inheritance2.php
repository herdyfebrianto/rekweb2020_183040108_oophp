<?php

class Produk {
        public $judul, $penulis,
         $penerbit, $harga, $jmlHalaman, $waktuMain;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function __construct ($judul, $penulis,$penerbit, $harga, $jmlHalaman, $waktuMain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

//fitur OOP/
class Komik extends Produk {
    public function getInfoKomik() {
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp, {$produk->harga})";
        return $str;
    }
}


//MAIN

//constructor
$p1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000, 100, 0);
$p2 = new Game("LoL", "sholeh", "Garena" , 450000, 0, 50); 

echo $p1->getInfoKomik()."<br>";
echo $p2->getInfoProduk();

