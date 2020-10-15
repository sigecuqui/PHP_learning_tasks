<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$number = rand(0, 100000);
$hours = floor($number / 3600);
$minutes = floor(($number / 60) % 60);
$seconds = $number % 60;
$result= $hours . 'h ' . $minutes . 'min ' . $seconds . 's';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Seconds converted</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<h1>Iš viso sekundžių: <?php print $number ;?></h1>
<h2>Tai yra: <?php print $result; ?></h2>
</body>
</html>