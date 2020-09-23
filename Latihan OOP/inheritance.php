<?php

class Produk {
        public $judul, $penulis,
         $penerbit, $harga, $jmlHalaman, $waktuMain;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function __construct ($judul, $penulis,$penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik" ){
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game" ) {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp, {$produk->harga})";
        return $str;
    }
}

//constructor
$p1 = new Produk("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000, 100, 0, "Komik");
$p2 = new Produk("LoL", "sholeh", "Garena" , 450000, 0, 50, "Game"); 

echo $p1->getInfoLengkap()."<br>";
echo $p2->getInfoLengkap();

