<?php
require_once 'class_persegiPanjang.php';
$LuasPersegi = new PersegiPanjang();
echo "Diketahui";
echo "<br>";
echo "Panjang Persegi Panjang : " .$LuasPersegi->getpanjang(25) ." " ."cm";
echo "<br>";
echo "Lebar Persegi Panjang : " .$LuasPersegi->getlebar(20) ." " ."cm";
echo "<hr>";
echo "Hasilnya adalah";
echo "<br>";
echo $LuasPersegi->luas() ." " ."cm";
echo "<br>";
echo $LuasPersegi->keliling() ." " ."cm";
?>