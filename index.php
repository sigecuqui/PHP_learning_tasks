<?php
$minutes = abs(date('i') - 59);
$minutes_remain = $minutes % 5;
$seconds = abs(date('s') - 59);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Joint’o Load</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vH;
    }

    .joint-smoked {
        background-image: url('./burned.png');
        background-size: cover;
        width: <?php print $minutes_remain.$seconds/100; ?>%;
        height: 400px;
        display: flex;
        justify-content: center;
        position: absolute;
        left: 0;
    }

    .joint {
        position: relative;
        background-image: url('./joint.png');
        background-size: cover;
        width: 400px;
        height: 400px;
        display: flex;
        justify-content: center;
    }
</style>
<body>
<div class='joint'>
    <div class='joint-smoked'></div>
</div>
<p>Liko: <?php print $minutes_remain . ':' . $seconds; ?> </p>
</body>
</html>