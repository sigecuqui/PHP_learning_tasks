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
</body>
</html>