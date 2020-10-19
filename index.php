<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication</title>
    <style>
        body {
            display: grid;
            grid-template-columns: repeat(9, 1fr);
            grid-gap: 15px;
        }

        .container {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 9; $i++): ?>
    <div class="container">
        <?php for ($j = 1; $j <= 9; $j++) :
            print "$i * $j = " . $i * $j . "</br>"; ?>
        <?php endfor; ?>
    </div>
<?php endfor; ?>
</body>
</html>