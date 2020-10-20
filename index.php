<?php
$speed_of_sound = 333;
$max_db = 120;
$sec = 60;
$db = 120;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>speedo</title>
</head>
<body>
<h1>Griaustinio zona</h1>
<article><?php for ($i = 1; $i <= $sec; $i++): ?>
        <?php $dist = $speed_of_sound * $i; ?>
        <?php for ($j = 1; $j <= $speed_of_sound * $i / 10; $j++): ?>
            <?php $db -= $db / 100 * 25; ?>
        <?php endfor; ?>
        <p><?php print "Po $i sec. ($dist m.): $db" ?></p>
    <?php endfor; ?>
</article>
</body>
</html>