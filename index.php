<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if($grizai_velai) {
    if ($grizai_isgeres) {
        $aukselis_ar_sudelis = 'Grįžai vėlai ir išgėręs';
    } else {
        $aukselis_ar_sudelis = 'Grįžai vėlai';
    }
}
else {
    if($grizai_isgeres) {
        $aukselis_ar_sudelis = 'Grįžai išgėręs';
    }
    else{
        $aukselis_ar_sudelis = 'Nieko nepadarei';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dat Variables, operators, Bitsh</title>
</head>
<body>
<h1>Buitinė skaičiuoklė</h1>
<h2>
    Situacija: <?php print $aukselis_ar_sudelis ;?>
</h2>
</body>
</html