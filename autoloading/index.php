<?php

require_once 'App/init.php';

//constructor INPUT
$p1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump" , 30000 , 100);
$p2 = new Game("LoL", "sholeh", "Garena" , 450000, 50); 

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $p1 );
$cetakProduk->tambahProduk( $p2 );

echo $cetakProduk->cetak();
echo "<hr>";
new App\Produk\User();
echo "<hr>";
new App\Service\User();
?>