<?php

class Persegi
{
function Bangunan2()
{
if (isset($_POST['sisi'])){
$sisi = $_POST['sisi'];
$sisi = $_POST['sisi'];
$luas = $sisi * $sisi;

echo "Nilai Sisi = $sisi <br>";
echo "Luas = $sisi * $sisi = $luas";
};
    }
}

?>