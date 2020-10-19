<?php
$table_height = 5;
$table_width = 3;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alphabet</title>
    <style>
        body {
            text-align: center;
        }
        .container {
            margin: 50px auto;
            width: 400px;
        }
        .letter {
            border: 1px solid gray;
            margin: 10px;
            padding: 10px;
            line-height: 10px;
            display: inline-block;
        }
        .letter .empty {
            opacity: 0.1;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="letter a">
        <?php
        for ($x = 1; $x <= $table_height; $x++) {
            for ($y = 1; $y <= $table_width; $y++) {
                if ($x == 1 && $y == 2) {
                    print ' • ';
                } elseif ($x == 1 && ($y == 1 || $y == 3)) {
                    print '<span class="empty"> • </span>';
                }
                if ($x == 2 && ($y == 1 || $y == 3)) {
                    print ' • ';
                } elseif ($x == 2 && $y == 2) {
                    print '<span class="empty"> • </span>';
                }
                if ($x == 3 && ($y == 1 || $y == 2 || $y == 3)) {
                    print ' • ';
                } elseif ($x == 3 && ($y == 1 || $y == 3)) {
                    print '<span class="empty"> • </span>';
                }
                if ($x == 4 && ($y == 1 || $y == 3)) {
                    print ' • ';
                } elseif ($x == 4 && $y == 2) {
                    print '<span class="empty"> • </span>';
                }
                if ($x == 5 && ($y == 1 || $y == 3)) {
                    print ' • ';
                } elseif ($x == 5 && $y == 2) {
                    print '<span class="empty"> • </span>';
                }
            }
            print '</br>';
        }
        ?>
    </div>