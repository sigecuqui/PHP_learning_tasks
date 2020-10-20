<?php
$week_gain = 0;
$week_lost = 0;

for ($c = 1; $c <= 7; $c++) {
    $day_calories_gain = rand(1300, 3000);
    $day_calories_lost = rand(1000, 3200);
    $week_gain += $day_calories_gain;
    $week_lost += $day_calories_lost;
    $week_calories = $week_gain - $week_lost;
    if ($week_gain > $week_lost) {
        $h2 = 'Svoris auga, beib';
    }
    elseif ($week_gain < $week_lost) {
        $h2 = 'Svoris krenta, beib';
    } else {
        $h2 = 'Stabilus riebaliukas';
    }
}

$week = "Per savaitėlę pririjai $week_gain kalorijų, bet numetei $week_lost";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Riebaliukai</title>
</head>
<body>
<h2><?php print $week; ?></h2>
<h2><?php print $h2; ?></h2>
</body>
</html>