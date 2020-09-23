<?php

//PARENT
class Produk {
    private $judul, $penulis,
            $penerbit, $harga, $diskon;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function __construct ($judul, $penulis,$penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getDiskon(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    
    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    //SETTER & GETTER

    public function setJudul( $judul ){
        if ( !is_string($judul) ){
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }
//
    public function setPenulis( $penulis ){
        if ( !is_string($penulis) ){
            throw new Exception("penulis Harus String");
        }
        $this->penulis = $penulis;
    }

    public function getpenulis(){
        return $this->penulis;
    }
//
    public function setPenerbit( $penerbit ){
        if ( !is_string($penerbit) ){
            throw new Exception("penerbit Harus String");
        }
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
//
    public function setHarga( $harga ){
    if ( !is_integer($harga) ){
            throw new Exception("harga Harus integer");
         }
         $this->harga = $harga;
    }

    public function getharga(){
         return $this->harga;
    }
}

//fitur OOP OVERRIDING/
//CHILD
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
}
//CHILD
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
}


//CHILD
class CetakInfoProduk {
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp, {$produk->harga})";
        return $str;
    }
}

//constructor INPUT
$p1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000, 100);
$p2 = new Game("LoL", "sholeh", "Garena" , 450000, 50); 

//MAIN
echo $p1->getInfoKomik()."<br>";
echo $p2->getInfoProduk()."<hr>";

$p1->setDiskon(45);
echo $p1->getHarga();

echo "<hr>";

$p1->setJudul("herdy ");
echo $p1->getJudul();

 $p1->setPenulis("mamang ");
 echo $p1->getpenulis();

 $p1->setPenerbit("korporasi ");
 echo $p1->getPenerbit();

 $p1->setHarga(25000);
 echo $p1->getharga();