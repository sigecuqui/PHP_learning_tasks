<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$distance = rand(50, 400);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;
$trip_cost = number_format($price_trip, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dat Variables, operators, Bitsh</title>
</head>
<body>
<h1>Kelionės skaičiuoklė</h1>
<ul>
    <li>Nuvažiuota distancija: <?php print $distance; ?> km</li>
    <li>Sunaudota <?php print $fuel_total; ?> l kuro.</li>
    <li>Kaina: <?php print $trip_cost; ?> pinigų</li>
</ul>
</body>
</html