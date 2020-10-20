<?php
$days = 365;
$pack_price = 3.5;
$count_ttl = 0;
$price_ttl = 0;
$cigs_sun = rand(1, 3);
$cigs_sat = rand(10, 20);
$cigs_mon_fri = rand(3, 4);

for ($i = 0; $i <= $days; $i++) {
    $day = date('N', strtotime("+ $i day"));
    if ($day <= 5) {
        $count_ttl += $cigs_mon_fri;
    }
    elseif ($day == 6) {
        $count_ttl += $cigs_sat;
    } else {
        $count_ttl += $cigs_sun;
    }
}

$price_ttl = $count_ttl * $pack_price / 20;
$isvada = "Per $days dienas surūkysiu $count_ttl cigarečių už $price_ttl eur.";

?>
<?php date_default_timezone_set('Europe/Vilnius'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rūkas</title>
</head>
<body>
<h1>Mano dūmų skaičiuoklė</h1>
<h2><?php print $isvada; ?></h2>
</body>