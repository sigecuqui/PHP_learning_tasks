<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($x = 1; $x <= $months; $x++) {
    $month_expenses = rand(500, 800);
    $wallet += $month_income - $month_expenses;
}
$isvada = "Po $months m. prognozuojamas likutis: $wallet";
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

