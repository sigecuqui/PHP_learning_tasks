<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$date = date('Y-m-d', strtotime('+ 1 day'));
$day = date('l', strtotime('+ 1 day'));

$breakfast_random = rand(1, 3);
$lunch_random = rand(1, 3);
$dinner_random = rand(1, 3);
$total_amount = 0;

$breakfast_price1 = 6.5;
$breakfast_price2 = 7;
$breakfast_price3 = 9;

$lunch_price1 = 10;
$lunch_price2 = 8.5;
$lunch_price3 = 9.5;

$dinner_price1 = 12;
$dinner_price2 = 11.5;
$dinner_price3 = 10.5;

if ($breakfast_random === 1) {
    $breakfast = $breakfast_price1;
    $total_amount += $breakfast;
} elseif ($breakfast_random === 2) {
    $breakfast = $breakfast_price2;
    $total_amount += $breakfast;
} else {
    $breakfast = $breakfast_price3;
    $total_amount += $breakfast;
}

if ($lunch_random === 1) {
    $lunch = $lunch_price1;
    $total_amount += $lunch;
} elseif ($lunch_random === 2) {
    $lunch = $lunch_price2;
    $total_amount += $lunch;
} else {
    $lunch = $lunch_price3;
    $total_amount += $lunch;
}

if ($dinner_random === 1) {
    $dinner = $dinner_price1;
    $total_amount += $dinner;
} elseif ($dinner_random === 2) {
    $dinner = $dinner_price2;
    $total_amount += $dinner;
} else {
    $dinner = $dinner_price3;
    $total_amount += $dinner;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cards</title>
    <style>
        .body {
            font-family: Bahnschrift;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .food_card {
            width: 190px;
            height: 200px;
            background-size: cover;
        }

        .breakfast-1 {
            background-image: url('https://images-na.ssl-images-amazon.com/images/I/61fZ%2BYAYGaL._SX569_.jpg');
        }

        .breakfast-2 {
            background-image: url('https://media.healthyfood.com/wp-content/uploads/2017/04/HTC-natural-yoghurt-iStock_58226440-1024x825.jpg');
        }

        .breakfast-3 {
            background-image: url('https://www.candywarehouse.com/item-images/126889-01_skittles-candy-54-ounce-bag.jpg');
        }

        .lunch-1 {
            background-image: url('https://www.lrt.lt/img/2020/08/04/698167-377182-756x425.jpg');
        }

        .lunch-2 {
            background-image: url('https://prod-wolt-venue-images-cdn.wolt.com/5b162dd2983060000e08f664/e71eb95c1e927cc8c8543fa3f04c2c44-edits/23bbe301acdb95611d1bd82677718825');
        }

        .lunch-3 {
            background-image: url('https://img-global.cpcdn.com/recipes/6a1810e72c8b80fa/400x400cq70/photo.jpg');
        }

        .dinner-1 {
            background-image: url("https://253qv1sx4ey389p9wtpp9sj0-wpengine.netdna-ssl.com/wp-content/uploads/2020/05/GettyImages-1044350714.jpg");
        }

        .dinner-2 {
            background-image: url("https://digitalcontent.api.tesco.com/v2/media/ghs/1183490f-b986-4ccd-8bf7-8254fa96eed0/snapshotimagehandler_1479726212.jpeg?h=540&w=540");
        }

        .dinner-3 {
            background-image: url('https://www.liquor.com/thmb/SXNhMbygwzNU_L5TVLkBa3pttLI=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__liquor__2019__02__13090826__pina-colada-720x720-recipe-253f1752769447f6998afd2b9469c24e.jpg');
        }
    </style>
</head>
<body class="body">
<h1><?php print $date; ?></h1>
<h2><?php print $day; ?></h2>
<h3>Breakfast</h3>
<div class="food_card breakfast-<?php print $breakfast_random; ?>"></div>
<p><?php print $breakfast; ?></p>
<h3>Lunch</h3>
<div class="food_card lunch-<?php print $lunch_random; ?>"></div>
<p><?php print $lunch; ?></p>
<h3>Dinner</h3>
<div class="food_card dinner-<?php print $dinner_random; ?>"></div>
<p><?php print $dinner; ?></p>
<p>Total amount: <?php print $total_amount ?></p>
</body>
</html