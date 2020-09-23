<?php

class Produk {
    public $judul, $penulis,
            $penerbit;
    protected $diskon = 0;
    private $harga;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function __construct ($judul, $penulis,$penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

//fitur OOP OVERRIDING/
class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul, $penulis,$penerbit, $harga, $jmlHalaman ) {
        parent::__construct($judul, $penulis,$penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoKomik() {
        $str = "Komik : " . parent::getInfoProduk() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
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
$p1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000, 100);
$p2 = new Game("LoL", "sholeh", "Garena" , 450000, 50); 

echo $p1->getInfoKomik()."<br>";
echo $p2->getInfoProduk()."<hr>";

$p1->setDiskon(45);
echo $p1->getHarga();

$p1->diskon = 100;
echo $p1->getHarga();

