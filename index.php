<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$name = 'Kebabas';
$age = rand(13, 69);
$conviction = rand(0, 1);
$children = rand(1, 5);
$reason_children = '';
$reason_conviction = '';
$reason_age = '';
if ($conviction) {
    $convicted_person = 'teistas';
} else {
    $convicted_person = 'neteistas';
}
if ($age >= 18 && $age <= 25 && !$conviction && $children <= 2) {
    $h2 = $name . ' yra šaukiamas į kariuomenę!';
} else {
    $h1 = $name . ' nėra šaukiamas į kariuomenę, nes';
    if ($children > 2) {
        $reason_children = ' turi ' . $children . ' vaikus';
    }
    if ($conviction) {
        $reason_conviction = ' yra ' . $convicted_person;
    }
    if ($age < 18) {
        $reason_age = ' per jaunas';
    }
    if ($age > 25) {
        $reason_age = ' per senas';
    }
    $h2 = $h1 . $reason_children . $reason_conviction . $reason_age;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Military</title>
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
<ul>
    <li>Vardas: <?php print $name; ?></li>
    <li>Amžius: <?php print $age; ?></li>
    <li>Teistumas: <?php print $convicted_person; ?></li>
    <li>Turi vaikų: <?php print $children; ?></li>
</ul>
<h2><?php print $h2; ?></h2>
</body>
</html>