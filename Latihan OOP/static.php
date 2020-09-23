<?php

class Contoh {
    public $angka = 1;

    public function halo() {
        return "Halo " . $this->angka++ . " Kalo. <br>";
    }
}

$objek = new Contoh;
echo " Tanpa Static angka <br>" . $objek->halo();
echo $objek->halo();
echo $objek->halo();

echo "<hr>";

$objek2 = new Contoh;
echo $objek2->halo();
echo $objek2->halo();
echo $objek2->halo() . "<hr>";


class ContohStatic {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " Kalo. <br>";
    }
}

$objek = new ContohStatic;
echo " Static angka <br>" . $objek->halo();
echo $objek->halo();
echo $objek->halo();

echo "<hr>";

$objek2 = new ContohStatic;
echo $objek2->halo();
echo $objek2->halo();
echo $objek2->halo();
