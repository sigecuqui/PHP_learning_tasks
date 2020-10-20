<?php
$pabiruciai = rand(3, 8);
$suaugeliai = rand(4, 10);
$kids_butelkos_kaina = 0.65;
$adults_butelkos_kaina = 1.15;
$juice_quantity = 0;
$beer_quantity = 0;
$deposito = 0.1;
for ($k = 1; $k <= $pabiruciai; $k++) {
    $juice_bottle = rand(1, 5);
    $juice_quantity += $juice_bottle;
    $juice_total_price = $juice_quantity * $kids_butelkos_kaina;
}
for ($a = 1; $a <= $suaugeliai; $a++) {
    $beer_bottle = rand(1, 5);
    $beer_quantity += $beer_bottle;
    $beer_total_price = $beer_quantity * $adults_butelkos_kaina;
}
$depozitas = ($beer_quantity + $juice_quantity) * $deposito;
$h2 = "$pabiruciai vaikų išgėrė $juice_quantity buteliukų; bendra suma $juice_total_price eur";
$h2_adult = "$suaugeliai suaugusiųjų išgėrė $beer_quantity buteliukų; bendra suma $beer_total_price eur, atgausiu depozito: $deposito eur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Depozito</title>
</head>
<body>
<h2><?php print $h2; ?></h2>
<h2><?php print $h2_adult; ?></h2>

</body>
</html>