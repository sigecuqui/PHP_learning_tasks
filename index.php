<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$bin_vol = 40;
$bin_heap_vol = rand(5, 10);
$trash_per_day = 15;
$days = floor(($bin_vol + $bin_heap_vol) / $trash_per_day);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dat Variables, Bitsh</title>
</head>
<body>
<h1>Šiukšlių prognozė</h1>
<p>Turima šiukšlinė - <?php print $bin_vol; ?></p>
<p>Žmona nieko nesako, kol kaupas neviršija <?php print $bin_heap_vol; ?> litrų</p>
<h3>Išvada: Nieko nedarysiu <?php print $days; ?> dienas</h3>
</body>
</html