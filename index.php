<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($k = 1; $k <= $kates; $k++) {

    for ($s = 1; $s <= $sunys; $s++) {
        if ($pavyko = rand(0, 1)) {
            $katasuniai++;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katašuniai</title>
</head>
<body>
<h1>Katašunių išeiga</h1>
<h2>Dalyvavo <?php print "$kates katės ir $sunys šunys"; ?></h2>
<h3>Katašunių išeiga: <?php print $katasuniai; ?></h3>
</body>
</html>

