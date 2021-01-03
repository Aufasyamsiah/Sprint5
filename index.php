<!DOCTYPE html>
<html>
<head>
<title>Bangun Datar</title>
</head>
<body>
<h1>Bangun Datar</h1>

<h2>Lingkaran</h2>
<form action="" method="post">
<table>
<tr><td>Jari - Jari <input type="text" name="jari"></td></tr>
<tr><td>Luas <input type="text" name="luas"></td></tr>
<tr><td><input type="submit" name=""></td></tr>
</table>
</form>
<?php
function autoloadBangunan1 ($Lingkaran)
{
$file = "Bangun_Datar/{$Lingkaran}.php";
if (is_readable($file)) {
require $file;
}
}

spl_autoload_register("autoloadBangunan1");

$lingkaran = new Lingkaran ();
$lingkaran->Bangunan1 ();

?>

<h2>Persegi</h2>
<form action="" method="post">
<table>
<tr><td>sisi <input type="text" name="sisi"></td></tr>
<tr><td>sisi <input type="text" name="sisi"></td></tr>
<tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>  

<?php

function autoloadBangunan2 ($Persegi)
{
$file = "Bangun_Datar/{$Persegi}.php";
if (is_readable($file)) {
require $file;
}
}

spl_autoload_register("autoloadBangunan2");

$persegipanjang = new Persegi();
$persegipanjang->Bangunan2();

?>


<h2>Segitiga</h2>
<form action="" method="post">
<table>
<tr><td>Alas <input type="text" name="alas"></td></tr>
  <tr><td>Tinggi <input type="text" name="tinggi"></td></tr>
  <tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>

<?php
function autoloadBangunan3 ($Segitiga)
{

$file = "Bangun_Datar/{$Segitiga}.php";
if (is_readable($file)) {
require $file;
}
}

spl_autoload_register("autoloadBangunan3");

$segitiga = new Segitiga;
$segitiga->Bangunan3();

?>


</body>
</html>

