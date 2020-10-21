<?php
$score_max = 100;
for ($i = 1; $i <= 10; ++$i) {
    $score = rand($score_max - 10, $score_max);
    switch (rand(0, 9)) {
        case 0:
            $name = "Joaquin Spence";
            break;
        case 1:
            $name = "Chris Velasquez";
            break;
        case 2:
            $name = "Jesse Moreno";
            break;
        case 3:
            $name = "Mylee Simmons";
            break;
        case 4:
            $name = "Allison Barry";
            break;
        case 5:
            $name = "Aubree Irwin";
            break;
        case 6:
            $name = "Kobe Nguyen";
            break;
        case 7:
            $name = "Reuben Howard";
            break;
        case 8:
            $name = "Rocco Livingston";
            break;
        case 9:
            $name = "Tyrone Dodson";
            break;
    }
    print $i . ' ' . $name . ' ' . $score . '</br>';
    $score_max -= 10;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leaderboard</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
</body>
</html>