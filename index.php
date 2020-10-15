<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$years = rand(1991, 2020);

if ($years % 400 === 0 || $years % 4 === 0 && $years % 100 !== 0) {
    $type = 'Keliamieji';
} else {
    $type = 'Nekeliamieji';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Keliamieji metai</title>
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
<h1>Ar metai yra keliamieji?</h1>
<p>Dabar yra: <?php print $years ;?> metai</p>
<h2>Šie metai yra: <?php print $type; ?></h2>
</body>
</html>