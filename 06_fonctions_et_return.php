<?php

$y = 333;

function enregistrer($nom) {

    // Besoin de "global" $y sinon pas dans le "scope".
    global $y;
    echo "y = ", $y, "<br>";
    echo "y = ".$y."<br>";
    echo "y = $y<br>";

    $x = 10;
    
    echo "$nom enregistré!<br>";
}

echo $x; // ERREUR pas dans le "scope", (warning undefined $x)
enregistrer("Johnny");


function sum(int $a, int $b) {
    return $a + $b;
}

echo sum(3, 5) . " est la réponse du sum()!<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo "TESTx"; ?> </h1>
</body>
</html>
