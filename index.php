<?php
$stars = rand(1, 30);

for ($i = 0; $i <= $stars; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        print '* ';
    }
    print '<br>';
}

for ($i = 0; $i <= $stars; $i++) {
    for ($j = $stars - $i; $j >= 1; $j--) {
        echo '* ';
    }
    echo '<br>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangle</title>
</head>
<body>

</body>
</html>