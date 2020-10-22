<?php
$zodziai = [
        ' Bzegosz', ' Czeslow', ' ir', ' pimpal', ' kvailai', ' ilgas', ' storas', ' visada', ' tik', ' tekila', ' iki', ' galo', ' Bamboleo',
'traukė', 'kišo', 'į', 'baras', 'ir', 'valgo', 'riaumoja', 'prakaituoja', 'namo', 'kodel', 'klimaksas', 'Zose', 'mandravojasi', 'kelinta', 'karta', 'slaunis',
    'tusavoja', 'koma'
];

$p = '';
$random_length = rand (10, 20);

for($i = 0; $i < $random_length; $i++) {
    $random_word = rand(0, count($zodziai) - 1);
    $p .= $zodziai[$random_word] . ' ';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FOREACH</title>
</head>
<body>
<h1>Lietuvių egzaminas</h1>
<p><?php print $p; ?></p>
</body>
</html>