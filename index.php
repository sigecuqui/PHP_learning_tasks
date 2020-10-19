<?php
$cards = rand(1, 6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>No Moni</title>
    <style>
        body {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 5px;
            height: 300px;
        }

        .container {
            background: red;
        }
    </style>
</head>
<body>
<h1><?php print "Iš viso kortelių: $cards"; ?></h1>
<?php for ($x = 1; $x <= $cards; $x++) :?>
    <div class="container"><?php print $cards; ?></div>
<?php endfor; ?>
</body>
</html>