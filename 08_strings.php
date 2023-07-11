<?php

// beaucoup de fonctions pour générer, chercher et manipuler des chaine de caractères

$s = 'abc';
echo $s[0]; // a
echo "<br>";
$s .= 'defghij';
echo $s[-1]; // j
echo "<br>";
$s[3] = 'D';
echo $s; // abcDefghij
echo "<br>";


// il y 2 syntaxes pour gérer des long strings ou multi-lines
// ainsi que des agencements de single et double quotes sans devoir release \ 
// mais dans Heredoc on peut avoir des variables.

// Heredoc
$text = <<<UN_TAG
Ligne 1 $s
Ligne 2
Ligne 3 ' "
UN_TAG;
echo $text; // mais comme ca, tout va etre sur une seule ligne, donc utiliser :
echo "<br>";
echo nl2br($text);
echo "<br>";

// Nowdoc // parce que le 1er 'UN_TAG' est entre single quotes
$text = <<<'UN_TAG'
Ligne 1 $s
Ligne 2
Ligne 3
UN_TAG;
echo $text; // mais comme ca, tout va etre sur une seule ligne, donc utiliser :
echo "<br>";
echo nl2br($text);
echo "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tuto #?</title>
</head>
<body>
    <h1> <?php echo "TESTx"; ?> </h1>
</body>
</html>
