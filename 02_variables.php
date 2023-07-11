
<?php

    // Tout existe :

    // bool : true / false
    // integers 0 -0 = false
    // floats 0.0 -0.0 = false
    // string '' '0' = false
    // array [] = false
    // special type null = false

    // int
    // float
    // string

    // array
    // object
    // callable
    // iterable

    // resource 
    // null

    // Les variables commencent par $
    // commencent par lettre ou _
    // peuvent contenir a-Z, 0-9, _
    // $name par égal à $NAME

    // constante :
    // convention que les constantes sont en majuscule
    define("T", 400);
    $T = 200; // ne fonctionne PAS
    echo T;
    echo "<br>";
    echo T + T;
    echo "<br>";
    define("Y", "yo!");
    echo Y;
    echo "<br>";
    echo T, Y;
    echo "<br>";
    // echo t + y; // impossible d'additionner int + string.
    // echo "<br>";

    // 2e façon:
    const A = 1;
    echo "A = ", A, "<br>";
    echo "A = ".A."<br>";
    // MAIS, const est à la compilation et define() est au runtime
    // exemple
    if (true) {
        define('STATUS', true);
        // const FOO = 'bar'; // ceci crée une erreur
    }

    //  et il y a beaucoup de constantes prédéfinies dans php
    // exemple 
    echo PHP_VERSION, "<br>";

    // il y a aussi des constantes magiques que leur valeur change
    // selon l'endroit ou le contexte
    // ex 
    echo "La ligne est ", __LINE__, "<br>";
    echo "Le fichier est ", __FILE__, "<br>";



    // il y a aussi des variables variables "variable-variable"
    // qui créent une variable nommé par la valeur d'une autre variable
    $foo = 'bar';
    $$foo = 'nouveau';
    echo $bar;
    echo "<br>";
    echo $$foo;
    echo "<br>";

    // Arrays :
    $nombres = [1, 2, 3];
    $fruits = ["pommes", "oranges"];
    print_r($nombres);
    echo "<br>";
    print_r($fruits);
    echo "<br>";
    $fruits2 = array("pommes", "oranges");
    print_r($fruits2);
    echo "<br>";
    echo $fruits[1];
    echo "<br>";
    // pour ajouter:
    array_push($fruits, "bananes");
    // ou bien
    $fruits[] = "raisins";
    print_r($fruits);
    echo "<br>";
    // ou mieux affiché :
    echo "<pre>";
    print_r($fruits);
    echo "</pre>";

    // Tableau associatif :
    $couleurs = [
        1 => "rouge",
        2 => "bleu",
        3 => "jaune",
        4 => "vert",
        5 => "blanc",
        6 => "noir"
    ];
    echo $couleurs[3];
    echo "<br>";

    $contraires = [
        "rouge" => 1,
        "bleu" => 2,
        "jaune" => 3,
        "vert" => 4,
        "blanc" => 5,
        "noir" => 6,
        "mauve" => 7,
    ];
    echo $contraires["mauve"];
    echo "<br>";

    // et cela peut être 2D avec disons
    // echo $personnes[2]["courriel"];


    // *** Variable par référence :
    // (utiliser l'adresse (référence) d'une variable au lieu de sa valeur)
    $x = 1;
    $y = $x;
    $x = 5;
    echo "y = $y<br>";
    $y = &$x;
    echo "y = $y<br>";



    // dans une fonction, passer une variable va dépendre de la manipulation
    // ex
    function sum($v1, $v2) {
        echo "La somme est de ", $v1 + $v2, "<br>";;
    }
    sum(1,2);
    sum(1,"5"); // Ça considère le "5" comme int, on appelle ça du "type juggling"

    // sinon on peut convertir juste avant en forcant à l'entrée de la fonction :
    function sum2(int $v1, int $v2) {
        echo "La somme est de ", $v1 + $v2, "<br>";;
    }

    // et si on veut que le type ne puisse PAS passer de string à int
    // alors on met les types à strict avec :
    // declare(strict_types=1);
    // MAIS au DÉBUT du script
    // en fait le strict sera appliqué à tout ce qui est SOUS le declare
    // et seulement dans ce même fichier


    // on peut caster int sur string comme d'autres langages avec :
    $v3 = "22";
    $v4 = (int) $v3;
    var_dump($v4); // int(22)
    echo "<br>";



    // avec des boolean, afficher (echo) la reponse va donner '1' ou rien, 
    // car ça converti en string, un peu comme si on écrivait
    // echo (string) $trueOrFalse
    // si on veut vraiment true or false affiché
    // is_bool($trueOrFalse);


    // INTEGERS plus en détails :
    // (int) 5.9 -> 5
    // $d = 0b11 -> 3
    // $d = 0x2A ->42
    // $d = 055 -> 45
    // PHP_INT_MAX + 1 devient un float
    // (int) true -> 1, et le contraire
    // (int) "87" -> 87
    // (int) "87abc" -> 87
    // (int) "abc" -> 0
    // savoir si c'est un int is_int($d)
    // on a le droit de mettre des _underscores dans un int 
    // pour le rendre plus lisible $d = 2_000_000_000


    // FLOATS plus en détails :
    // $f = 13.5e3 -> 13500
    // $f = 13.5e-3 -> 0.0135
    // *** ne pas oublier que vu que tout est storé en binaire
    // donc 0.1 n'est pas exactement 0.1, donc ne PAS
    // faire confiance aux floats si on fait des if, des égalités, 
    // des ceil() ou floor()
    // on doit faire confiance à is_nan() et is_finite()


    // STRINGS plus en détails :
    //  voir fichier 08_...


    // NULL
    $n1 = null; // n'a pas encore de valeur
    echo $n1; // RIEN
    $n2; // n'a pas encore de valeur



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
