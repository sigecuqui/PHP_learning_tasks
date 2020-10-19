<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($m = 1; $m <= $months; $m++) {
    $month_expenses = rand(500, 1200);
    $wallet += $month_income - $month_expenses;
    $isvada = "Po $months m. prognozuojamas likutis: $wallet";
    if ($wallet <= 0) {
        $isvada = "Atsargiai, $m mėnesį gali baigtis pinigai!";
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>No Moni</title>
</head>
<body>
<h1>Wallet Forecast</h1>
<h2><?php print $isvada; ?></h2>
</body>
</html>

