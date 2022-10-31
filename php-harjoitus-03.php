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
?>

<?php
$a = 5;
$b = 8;

if($b < $a === true){
    echo  "False";
} else {
    echo "True";
}
?>

</body>
</html>