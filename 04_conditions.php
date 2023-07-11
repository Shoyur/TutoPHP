
<?php

    // *** VOIR PRECEDENCE & ASSOCIATIVITY
    // https://www.youtube.com/watch?v=pmX_-x3LX-k&list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-&index=15




    $nouvelles = [];
    if (!empty($nouvelles)) {
        echo "La 1ère nouvelle est : " . $nouvelles[0];
        echo "<br>";
    }
    else {
        echo "Il n'y a pas de nouvelle...";
        echo "<br>";
    }



    date_default_timezone_set('EST');
    $t = date("H"); // "H" = l'heure, vérifier toutes les possibilités

    if ($t < 12) {
        echo "Bon matin!<br>";
    }
    elseif ($t < 17) {
        echo "Bon après-midi!<br>";
    }
    else {
        echo "Bonne soirée!<br>";
    }

    // ou sur une seule ligne (tertiaire?) :
    echo !empty($nouvelles) ? $nouvelles[0] . "<br>" : "Il n'y a pas de nouvelle...<br>";
    $nouvelles[0] = "Wow!";
    echo !empty($nouvelles) ? $nouvelles[0] . "<br>" : "Il n'y a pas de nouvelle...<br>";

    // Si trop de elseif -> switch case.


    // D'AUTRES COMPARATEURS
    $a = 5;
    $b = "5";
    var_dump($a == $b); // true
    var_dump($a === $b); // false

    $c = 10;
    $d = 10;
    var_dump($c <=> $d); // -1 si <, 0 si =, 1 si >

    $e = null;
    $f = $e ?? "yep!"; // $f devient "yep!" seulement si $e est null


?>

<!-- On peut aussi avoir une syntaxe qui permet du code php et 
mettre le html ensuite comme dans le body plus bas OU -->
<?php if ($e == null) : ?>
    <h1> OUI e est null</h1>
<?php endif ?>



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
