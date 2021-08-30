<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 - PHP</title>
</head>
<body>
    
<!-- Creiamo una struttura dati che rappresenta le partite di basket di un’ipotetica tappa del calendario.
Ogni array interno conterrà le seguenti informazioni: una squadra di casa, una squadra ospite,
punti fatti dalla squadra di casa, punti fatti dalla squadra ospite
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$array = [
    [
        'home' => 'Inter',
        'guest' => 'Juve',
        'homePoints' => '55',
        'guestPoints' => '60'
    ],
    [
        'home' => 'Roma',
        'guest' => 'Lazio',
        'homePoints' => '1',
        'guestPoints' => '32'
    ],
    [
        'home' => 'Milan',
        'guest' => 'Fiorentina',
        'homePoints' => '87',
        'guestPoints' => '23'
    ]

];

    echo $array;
// for($i=0; i < strlen($array); i++){
    //     echo {$array[i].home} . '' . {$array[i].guest} . ' - ' .{$array[i].homePoints} . ' | ' .{$array[i].guestPoints};
    // };
    
    
    
    ?>

</body>
</html>