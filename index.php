<?php
$tracks = [
    [
        'available' => true,
        'pins' => [
            [true],
            [false, false],
            [false, false, false],
            [true, true, true, true]
        ],

    ],
    [
        'available' => false,
        'pins' => [
            [false],
            [false, false],
            [false, false, false],
            [false, false, false, false]
        ],
    ],
];

var_dump($tracks);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>

</body>
</html>