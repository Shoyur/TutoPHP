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


function sum(int $a, int $b) { // paramètres
    return $a + $b; // arguments
}
echo sum(3, 5) . " est la réponse du sum()!<br>";



// si on est en mode STRICT, on peut préciser le type du retour avec :
// function sum(int $a, int $b): int {
//      ...
// }
// tous les types possibles
// et si la fonction retourne rien, le return type doit être void
// et si on est pas certain entre un type ou rien (null)
// function sum(int $a, int $b): ?int {
// ou
// function sum(int $a, int $b): int|null|... {
// ou
// function sum(int $a, int $b): mixed {



// un autre exemple avec mult
function mult(int|float $a, int|float $b = 1): float { // paramètres
    return $a * $b; // arguments
}
echo mult(3, 5.1) . " est la réponse du mult()!<br>";
echo mult(3) . " est la réponse du mult()!<br>";
echo mult(3.0) . " est la réponse du mult()!<br>";




// si on a un nombre variables d'arguments, on utilise :
function add(...$nombres): float { // et ça crée un tableau
    $reponse = 0.0;
    foreach ($nombres as $nombre) {
        $reponse += $nombre;
        // ne pas oublier que .= est pour des strings
    }
    return $reponse;
}
echo add() . " est la réponse du add()!<br>";
echo add(5) . " est la réponse du add()!<br>";
echo add(5, 6) . " est la réponse du add()!<br>";
echo add(5, 6, 7, 8, 9.5) . " est la réponse du add()!<br>";

// mais on peut quand même avoir comme paramètres :
// (int $1, int $2, ...$reste3etplus)

// on peut forcer le SPLAT operator à recevior seulement des nombres avec :
// (int|float ...$nombres)
// SPLAT AKA elipsis, spread, unpacking operator




// Ces 3 points peuvent aussi servir pour UNPACK un array :
$nombres = [1, 2, 3.0, 99];
echo add(4, 5, ...$nombres) . " est la réponse du add()!<br>";


// on peut avoir des "NAMED ARGUMENTS" au cas où
// l'ordre des arguments change ou si on se trompe
// ex :

$n1 = 3;
$n2 = 2;

function test_n1(int|float $n1, int|float $n2) {
    if ($n1 > $n2) { return "OUI<br>"; }
    else { return "NON<br>"; }
}

echo test_n1($n2, $n1); // inversé par erreur, donc affiche "NON"

echo test_n1(n2: $n2, n1: $n1); // valeurs spécifiées, donc affiche "OUI"
// MAIS maintenant si on change le nom des paramètres, 
// il faut changer le nom des NAMED arguments

// un bon exemple où les named arg sont pratiques est par exemple dans
setcookie(name: "foo", value: "bar", httponly: true);
// normalement il y a plein de valeurs entre value et httponly, mais
// on les a tous sautés car on les a spécifiés par leur nom




// il y a des arrow function pour squeezer plus d'info sur une courte ligne
// ex :

$arr1 = [1, 2, 3, 4];
$arr2 = array_map(fn($n) => $n * $n, $arr1); // doit se nommer fn()
echo "<pre>";
print_r($arr2);
echo "</pre>";

// Ceci est l'équivalent de :
$arr3 = array_map(function($n) {
    return $n ** 2;
}, $arr1);
echo "<pre>";
print_r($arr3);
echo "</pre>";



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
