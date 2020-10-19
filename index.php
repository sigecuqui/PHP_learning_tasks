<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checker board</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            background: pink;
        }

        .white {
            background-color: white;
            width: 30px;
            height: 30px;
            margin: 0;
        }

        .black {
            background-color: black;
            width: 30px;
            height: 30px;
            margin: 0;
        }

    </style>
</head>
<body>
<?php
for ($i = 0; $i < 8; $i++) {
    print '<div class="container">';
    for ($j = 0; $j < 8; $j++) {
        if ($i % 2 == 0) {
            if ($j % 2 == 0) {
                print '<div class="white"></div>';
            } else {
                print '<div class="black"></div>';
            }
        } else {
            if ($j % 2 == 0) {
                print '<div class="black"></div>';
            } else {
                print '<div class="white"></div>';
            }
        }
    }
    print "</div>";
}
?>
</body>
</html>