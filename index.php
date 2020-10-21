<?php
$height = rand(1, 30);

for ($a = 1; $a <= $height; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        $decorations = rand(1, 30);
        if ($decorations == 1) {
            print '🔪';
        } elseif ($decorations == 2) {
            print '😭';
        } elseif ($decorations == 3) {
            print '⚔️';
        } else {
            print '☠ ';
        }
    }
    print "<br>";
}
for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= 2; $b++) {
        print "☢ ";
    }
    print "<br>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Death Tree</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
</body>
</html>