<?php
$months = 24;
$car_price_new = 30000;
$car_price_used = 30000;
$depreciation = 2;
$depr_perc = 0;

for ($x = 0; $x < $months; $x++) {
    $car_price_used *= (100 - $depreciation) / 100;
}

$depr_perc = number_format(($car_price_new - $car_price_used) * 100 / $car_price_new, 2);
$used = number_format($car_price_used, 2);

$h1 = "Mašina nuvertės";
$h2 = "Naujos mašinos kaina: $car_price_new";
$h3 = "Po $months mėn. mašinos vertė bus: $used eur.";
$h4 = "Mašina nuvertės $depr_perc proc.";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turgus</title>
    <style>
    </style>
</head>
<body>
<h1><?php print $h1; ?></h1>
<h2><?php print $h2; ?></h2>
<h3><?php print $h3; ?></h3>
<h4><?php print $h4; ?></h4>
</body>
</html>