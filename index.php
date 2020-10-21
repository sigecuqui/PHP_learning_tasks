<?php
$shades = 15;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Spalvos </title>
    <style>
        .block {
            width: 300px;
            height: 25px;
        }
    </style>
</head>
<body>
<?php for ($x = 0; $x < $shades; $x++) : ?>
    <div class="block"
         style="background-color: rgb(<?php print 255 * $x / $shades .', '; ?> 0, 0)"></div>
<?php endfor; ?>
<div></div>
</body>
</html>