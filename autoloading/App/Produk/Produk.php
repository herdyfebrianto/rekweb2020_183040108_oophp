<?php

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

?>