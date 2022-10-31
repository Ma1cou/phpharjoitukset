<!DOCTYPE html>
<html>
<body>
<h1> Harjoitukset 1-4 </h1>
<?php
// Alla oleva print-funktio tulostaa tekstin "Hello World!" näytölle

echo "Hello World!";
?> 
<p>Tämä Tulee Html:stä
    <br>
<?php
echo "Tämä Tulee Php:stä!"
?>
</p>


<?php
$teksti = "php on mukavaa ja helppoa!";
$luku1 = 3;
$luku2 = 5;
?>

<br>
<h1> <?php echo $teksti ?> </h1>
<br>
<p> Lukujen summa: <?php echo $luku1 + $luku2 ?> </p>
<br>
<p> Lukujen tyulos: <?php echo $luku1 * $luku2 ?> </p>
</body>
</html>