<!DOCTYPE html>
<html>
<body>
<h1> Harjoitus 6 </h1>
<?php
$vaihtuvaTyyppi = 3.14;
settype($vaihtuvaTyyppi, "string");
echo $vaihtuvaTyyppi;
echo gettype($vaihtuvaTyyppi);
?>
<br>
<br>
<?php
settype($vaihtuvaTyyppi, "integer");
echo $vaihtuvaTyyppi;
echo gettype($vaihtuvaTyyppi);
?>
<br>
<br>
<?php
settype($vaihtuvaTyyppi, "double");
echo $vaihtuvaTyyppi;
echo gettype($vaihtuvaTyyppi);
?>
<br>
<br>
<?php
settype($vaihtuvaTyyppi, "boolean");
echo $vaihtuvaTyyppi;
echo gettype($vaihtuvaTyyppi);
?>
<br>
<br>
<h1> Harjoitus 7 </h1>
<?php
$arvo1 = 9;
$arvo2 = 12;
?>
<br>
<p> Lukujen summa (9+12): <?php echo $arvo1 + $arvo2 ?> </p>
<p> Lukujen erotus (9-12): <?php echo $arvo1 - $arvo2 ?> </p>
<p> Lukujen tulo (9*12): <?php echo $arvo1 * $arvo2 ?> </p>
<p> Lukujen jakojäännös (9/12): <?php echo $arvo1 / $arvo2 ?> </p>
<br>

<h1> Harjoitus 8 </h1>

<?php
$kokonaisluku = 5;
?>
<p> Kokonaisluku ilman lisäyksiä: <?php echo $kokonaisluku ?> </p>
<?php
$kokonaisluku++;
?>
<p> Kokonaisluku lisäyksellä ($kokonaisluku++): <?php echo $kokonaisluku ?> </p>
<?php
$kokonaisluku--;
?>
<p> Kokonaisluku vähennyksellä ($kokonaisluku--): <?php echo $kokonaisluku ?> </p>

<?php
++$kokonaisluku;
?>
<p> Kokonaisluku vähennyksellä (++$kokonaisluku): <?php echo $kokonaisluku ?> </p>

<h1> Harjoitus 9 ja 10</h1>

<?php
$a = 5;
$b = 8;

if($a < $b === true){
    echo  "False";
} else {
    echo "True";
}

if($b < $a === true){
    echo  "False";
} else {
    echo "True";
}
?>

<h1> Harjoitus 11 ja 12 </h1>

<?php
$automerkki = array("Toyota"=>"bZ4X", "Volvo"=>"V50", "Mercedes-Benz"=>"C", "Tesla"=>"Roadster", "Kia"=>"XCeed");
print_r($automerkki);
?>

<h1> Harjoitus 13 </h1>
<?php
$kello = 2;
//$aamu = range(6, 11);
//$päivä = range(12, 16);
//$ilta = range(17, 22);
//$yö = range(23, 5);


if($kello > 5 && $kello < 12 === true) {
    echo "Nyt On Aamu.";
}   elseif($kello > 11 && $kello < 17 === true) {
    echo "Nyt on päivä";
}   elseif($kello > 16 && $kello < 23 === true) {
    echo "Nyt on ilta";
}   elseif($kello > 22) {
    echo "Nyt on yö";
}   elseif($kello > 0 && $kello < 5 === true) {
    echo "Nyt on yö";
}
?>

<h1> Harjoitus 14 </h1>

<?php
$ihmiset = ["Jaakko", "Pate", "Viljami", "Mico", "Tarmo"];
$taulukonpituus = count($ihmiset);
$i = 0;

while($i < $taulukonpituus)
{
	echo $ihmiset[$i].
    "<br>";
	$i++;
}
?>

<h1> Harjoitus 15 </h1>
<?php

$kello = "16";

switch ($kello) {
  case ($kello > 11 && $kello < 17 === true):
    echo "Nyt on päivä";
    break;
  case ($kello > 5 && $kello < 12 === true):
    echo "Nyt on aamu";
    break;
  case ($kello > 16 && $kello < 23 === true):
    echo "Nyt on ilta";
    break;
  case ($kello > 22 === true):
    echo "Nyt on yö";
    break;
  case ($kello > 0 && $kello < 5 === true):
    echo "Nyt on yö";
    break;
}
?>

<h1> Harjoitus 16 </h1>

<?php  
for ($numero = 0; $numero <= 70; $numero+=7) {
  echo "Seitsemän kertotaulu: $numero <br>";
}
?>

<h1> Harjoitus 17 </h1>

<?php
function naytaViesti() {
    echo "Tervehdys funktiosta!";
    naytaViesti();
}
?>

</body>
</html>