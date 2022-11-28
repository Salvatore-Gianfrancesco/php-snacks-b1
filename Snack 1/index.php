<?php

$games = [
    ['Milano', 'Brescia', 65, 41],
    ['Roma', 'Caserta', 78, 87],
    ['Napoli', 'Bolzano', 35, 58],
    ['Palermo', 'Ascoli', 85, 55],
    ['Firenze', 'Genova', 99, 75]
];

foreach ($games as $game) {
    echo "$game[0] - $game[1] | $game[2] - $game[3]" . '<br>';
}
