<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$hour = date('h') * 30;
$minute = date('i') * 6;
$second = date('s') * 6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laikrodis</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .clock-body {
            background-image: url('https://webstockreview.net/images/clock-clipart-black-and-white-19.png');
            width: 600px;
            height: 600px;
            background-size: cover;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .arrow {
            position: absolute;
            width: 5px;
            height: 200px;
            top: 100px;
            transform-origin: 10% 100%;
        }

        .arrow--hour {
            background: blue;
            transform: rotate(<?php print $hour;?>deg);
        }

        .arrow--minute {
            background: red;
            transform: rotate(<?php print $minute;?>deg);
        }

        .arrow--second {
            background: green;
            transform: rotate(<?php print $second;?>deg);
        }
    </style>
</head>
<body>
<div class="clock-body">
    <div class="arrow arrow--hour"></div>
    <div class="arrow arrow--minute"></div>
    <div class="arrow arrow--second"></div>
</div>
</body>
</html