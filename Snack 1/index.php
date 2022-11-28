<?php

$games = [
    [
        'home_team' => 'Milano',
        'away_team' => 'Brescia',
        'home_points' => 65,
        'away_points' => 41
    ],
    [
        'home_team' => 'Roma',
        'away_team' => 'Caserta',
        'home_points' => 78,
        'away_points' => 87
    ],
    [
        'home_team' => 'Napoli',
        'away_team' => 'Bolzano',
        'home_points' => 58,
        'away_points' =>   35,

    ],
    [
        'home_team' => 'Palermo',
        'away_team' => 'Ascoli',
        'home_points' => 85,
        'away_points' => 55
    ],
    [
        'home_team' => 'Firenze',
        'away_team' => 'Genova',
        'home_points' => 99,
        'away_points' => 75
    ]
];

foreach ($games as $game) {
    echo "$game[home_team] - $game[away_team] | $game[home_points] - $game[away_points]" . '<br>';
}
