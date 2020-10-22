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

$friend_memories = [
    'Taksi',
    'Baras',
    'Jėzus',
    'Bažnyčia',
    'Tekilukė su kunigu',
    'Sutana',
    'Maldos'
];

$flashback_index = rand(0, count($my_memories) - 1);
$common_memories = [];

foreach ($my_memories as $memory) {
    if (in_array($memory, $friend_memories, true) && !in_array($memory, $common_memories)) {
       $common_memories[] = $memory;
    }
}
var_dump($common_memories);

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
<h3>Draugo prisiminimai</h3>
<ul>
    <?php foreach ($friend_memories as $memory) : ?>
        <li><?php print $memory; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>