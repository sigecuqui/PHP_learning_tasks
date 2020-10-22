<?php
$my_memories = [
    'Taksi',
    'Baras',
    'Jėzus',
    'Bažnyčia',
    'Rožančius',
    'Nuodėmės',
    'Išpirkimas'
];

$flashback_index = rand(0, count($my_memories) - 1);
$flashback_text = $my_memories[$flashback_index];
$h3 = "Flashback $flashback_index : $flashback_text";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FOREACH</title>
</head>
<body>
<h1>Kas buvo penktadienį?</h1>
<h2>Mano prisiminimai</h2>
<ul>
    <?php foreach ($my_memories as $memory) : ?>
        <li><?php print $memory; ?></li>
    <?php endforeach; ?>
</ul>
<h3><?php print $h3; ?></h3>
</body>
</html>