<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4 - PHP</title>
</head>
<body>

<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà i seguenti dati:
nome
cognome
un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    'Alunno1' => [
        'name' => 'Antonio',
        'surname' => 'Venezia',
        'voti' => [
                    'italiano' => 2,
                    'matematica' => 5,
                    'inglese' => 8
                ]
    ],
    'Alunno2' => [
        'name' => 'Liborio',
        'surname' => 'Racamato',
        'voti' => [
                    'italiano' => 9,
                    'matematica' => 3,
                    'inglese' => 6
                ]
    ],
    'Alunno3' => [
        'name' => 'Alessandro',
        'surname' => 'Cosenza',
        'voti' => [
                    'italiano' => 1,
                    'matematica' => 10,
                    'inglese' => 4
                ]
    ]    
];

for($i=0; $i < count($students); $i++){
    echo "<h1>Name: </h1> {$students[$i]['name']} <br/>";
    echo "<h1>Surname: </h1> {$students[$i]['surname']} <br/>";
    echo "<h1>Media voti: </h1>" . (array_sum($students[$i]) / count($students[$i]['voti']) . "<br/><hr>";
};

?>
    
</body>
</html>