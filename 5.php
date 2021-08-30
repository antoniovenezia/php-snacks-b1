<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5 - PHP</title>
</head>
<body>

<!-- Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un
nuovo paragrafo. -->
    
<?php

    $text = "Con il termine lorem ipsum si indica un testo segnaposto utilizzato da grafici, designer, 
    programmatori e tipografi a modo riempitivo per bozzetti e prove grafiche.[1] È un testo privo di senso, 
    composto da parole (o parti di parole) in lingua latina, riprese pseudocasualmente da uno scritto di Cicerone 
    del 45 a.C, a volte alterate con l'inserzione di passaggi ironici."

    $textArray = explode(".", $text);
    
    for($i=0; $i < count($textArray)-1; $i++){
        echo "<p> {$textArray[$i]. </p>}";
    }


?>

</body>
</html>