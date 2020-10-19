<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checker board</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            background: pink;
        }

        .white {
            background-color: white;
            width: 30px;
            height: 30px;
            margin: 0;
        }

        .black {
            background-color: black;
            width: 30px;
            height: 30px;
            margin: 0;
        }
        .board {
            margin: 50px auto;
            width: 240px;
            display: table;
        }
        .board > .box {
            width: 30px;
            height: 30px;
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>
<body>
<div class="board">
    <?php for ($y = 0; $y < 8; $y++): ?>
        <?php for ($x = 0; $x < 8; $x++): ?>
            <div class="box <?= ($x + $y) % 2 == 0 ? 'black' : 'white' ?>"></div>
        <?php endfor; ?>
    <?php endfor; ?>
</div>
</body>
</html>