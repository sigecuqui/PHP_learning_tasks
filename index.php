<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$card_one = rand(1, 11);
$card_two = rand(1, 11);
$card_three = rand(1, 11);
$card_four = rand(1, 11);

$player_cards = $card_one + $card_two;
$opponent_cards = $card_three + $card_four;

if ($player_cards > $opponent_cards) {
    $winner = 'Player';
    $winner_points = $player_cards;
} elseif ($player_cards == $opponent_cards) {
    $winner = 'TIE';
    $winner_points = $player_cards;
} else {
    $winner = 'Opponent';
    $winner_points = $opponent_cards;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cards</title>
    <style>
        .card {
            border: 2px solid red;
            width: 190px;
            height: 200px;
            display: flex;
            justify-content: center;
            font-size: 25px;
            margin-top: 20px;
            padding-top: 40px;
            background-image: url('https://i.pinimg.com/474x/47/38/83/4738831b11d99e80bcf5e1b4087b6b9c.jpg');
            background-size: cover;
            color: red;
        }

        .d-flex {
            display: flex;
        }
    </style>
</head>
<body>
<h3>Player gets: <?php print $player_cards; ?></h3>
<div class="d-flex">
<div class="card">Card one is: <?php print $card_one; ?></div>
<div class="card">Card two is: <?php print $card_two; ?></div>
</div>
<h3>Opponent gets: <?php print $opponent_cards; ?></h3>
<div class="d-flex">
<div class="card">Card one is: <?php print $card_three; ?></div>
<div class="card">Card two is: <?php print $card_four; ?></div>
</div>
<h2>The winner is: <?php print $winner; ?> with <?php print $winner_points; ?></h2>
</body>
</html