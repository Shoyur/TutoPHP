
<?php

    $nouvelles[0] = "Wow!";

    // for, while, do while

    // for x=0 x<count(...) x++

    // foreach POUR LES ARRAYS !
    foreach($nouvelles as $nouvelle) {
        echo "FOREACH -> " . $nouvelle . "<br>";
    }

    // AVEC index :
    foreach($nouvelles as $wohh => $nouvelle) {
        echo $wohh + 1 . " -> ".$nouvelle . "<br>";
    }

    // ***********
    // après la boucle foreach, $wohh et $nouvelle ne sont pas effacés
    // il faut donc
    unset($nouvelle);
    // au cas où on veut s'en servir ailleur, car ici $nouvelle
    // vaut encore "Wow!"

    // avec key / value :
    $couleurs = [
        1 => "rouge",
        2 => "bleu",
        3 => "jaune",
        4 => "vert",
        5 => "blanc",
        6 => "noir"
    ];
    foreach($couleurs as $clé => $valeur) {
        echo "$clé = $valeur<br>";
    }

    // *** break;
    // il y a aussi break 2; pour sortir de 2 boucles,
    // comme par exemple d'un while dans un while.

    // *** continue;
    // va tout skip et retourner au while ou for etc.

    // pour FOR, on peut mettre plus qu'une commande par itération
    // ex:
    function test1($q) { echo $q . " "; }
    for ($i = 0; $i < 15;               $i++, test1($i)     );
    echo "<br>";
    // ou avant le ++
    for ($i = 0; $i < 15;               test1($i), $i++     );
    echo "<br>";
    // ou même dans la manipulation
    for ($i = 0;         test1($i), $i < 15;            $i++);
    echo "<br>";
    // ou carréement dans la fonction callé
    for ($i = 0; $i < 15; test1($i++));
    echo "<br>";

    // ne pas oublier la différence entre $i++ et $++i


    // boucle sur seulement un mot
    for ($i = 0; $i < strlen($nouvelles[0]); $i++) {
        echo $nouvelles[0][$i] . "<br>";
    }
    // MAIS !!! ici on évalue sans cesse strlen
    // donc on doit plutôt mettre :
    for ($i = 0, $len = strlen($nouvelles[0]); $i < $len; $i++) {}

    //  strlen() était pour les caractères d'un mot, sinon
    //  count() pour un array


    // il y les SWITCH évidemment

    // MATCH
    // et aussi depuis PHP 8, match() qui est très semblable
    // mais peut faire une évaluation et aussi attribuer
    // une valeur au début selon le résultat

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
