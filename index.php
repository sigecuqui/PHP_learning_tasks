<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$distance = rand(200, 1000);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;
$trip_cost = number_format($price_trip, 2);
$my_money = 100;
if ($my_money >= $price_trip) {
    $available_trip = 'įperkama';
} else {
    $available_trip = 'neįperkama';
}
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
    <li>Turimi pinigai: <?php print $my_money; ?></li>
</ul>
<hr>
<p>Išvada: Kelionė <?php print $available_trip; ?>
</p>
</body>
</html