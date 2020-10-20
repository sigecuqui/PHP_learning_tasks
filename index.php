<?php
$month = 31;
$cost = 0.07;
$ttl_cost = 0;

for ($m = 1; $m <= $month; $m++) {
    $month_day = rand(1, 31);
    if ($m <= $month_day) {
        $electr_per_day = rand(2, 5);
        $day_price = $electr_per_day * $cost;
        $ttl_cost += $day_price;
    }
}
$h2 = "Už elektrą reikės sumokėti $ttl_cost eur iki $month_day mėnesio dienos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alektra</title>
</head>
<body>
<h2><?php print $h2; ?></h2>
</body>
</html>