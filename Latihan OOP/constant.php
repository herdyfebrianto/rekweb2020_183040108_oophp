<?php

//digunakan diluar class/global
define('NAMA', 'Herdy Imam Febrianto ');
echo NAMA;

//bisa digunakan diclass
const UMUR = 20;
echo UMUR;
echo "<hr>";

class Coba {
    const NAMAKU = "Herdy Imam Febrianto";
}
echo Coba::NAMAKU;

echo "<br><hr>";
echo "MAGIC CONSTANT <br>";
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";

function cobaMagic() {
    return __FUNCTION__ . "<br>";
}
echo cobaMagic() . "<br>";
//
class coba3 {
    public $kelas = __CLASS__;
    public function cobaMethod(){
        return __METHOD__;
    }
}

$obj = new coba3();
echo $obj->kelas . "<br>";
echo $obj->cobaMethod();
//

?>