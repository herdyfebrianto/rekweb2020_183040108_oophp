<?php

interface InfoProduk {
    public function getInfoProduk(); 
}

//PARENT
abstract class Produk {

    protected $judul, $penulis,
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

    abstract public function getInfo();
}

//fitur OOP OVERRIDING/
//CHILD
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}
//CHILD
class Game extends Produk implements InfoProduk { 
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}


//CHILD
class CetakInfoProduk {

    public $daftarProduk = array();

    public function tambahProduk ( Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak () {
        $str = "DAFTAR PRODUK : <br>";

        foreach ( $this->daftarProduk as $p) {
            $str .= " - {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

//constructor INPUT
$p1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000 , 100);
$p2 = new Game("LoL", "sholeh", "Garena" , 450000, 50); 

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $p1 );
$cetakProduk->tambahProduk( $p2 );

echo $cetakProduk->cetak();

