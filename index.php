<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$sunny = rand(0, 1);
$rainy = rand(0, 1);
if ($sunny) {
    if ($rainy) {
        $weather_class = 'weather--sunny-rainy';
        $weather_text = 'Sunny, but it is a bit rainy';
    } else {
        $weather_class = 'weather--sunny';
        $weather_text = 'It is sunny';
    }
} else {
    if ($rainy) {
        $weather_class = 'weather--cloudy-rainy';
        $weather_text = 'Rainy';
    } else {
        $weather_class = 'weather--cloudy';
        $weather_text = 'Cloudy';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orai</title>
    <style>
        .weather--sunny {
            background-image: url('https://icons.iconarchive.com/icons/icons-land/weather/256/Sunny-icon.png');
            width: 200px;
            height: 200px;
            background-size: cover;
        }

        .weather--sunny-rainy {
            background-image: url('https://icons-for-free.com/iconfiles/png/512/cloudy+rain+sunny+weather+icon-1320196634753156841.png');
            width: 200px;
            height: 200px;
            background-size: cover;
        }

        .weather--cloudy-rainy {
            background-image: url('https://png.pngtree.com/png-vector/20190822/ourlarge/pngtree-rain-icon-sky-filled-with-cartoon-clouds-png-image_1699315.jpg');
            width: 200px;
            height: 200px;
            background-size: cover;
        }

        .weather--cloudy {
            background-image: url('https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-cloudy-icon-png-image_450295.jpg');
            width: 200px;
            height: 200px;
            background-size: cover;
        }
    </style>
</head>
<body>

<div class="weather <?php print $weather_class; ?>"></div>
<p><?php print $weather_text; ?></p>

</body>
</html