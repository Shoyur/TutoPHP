<?php

// ouvrir ou créer un fichier :

$fichier = "extras/lignes.txt";

if (file_exists($fichier)) {
    // echo readfile($fichier);
    // fgetcsv()
    $fopen = fopen($fichier, 'r');
    $contenu = fread($fopen, filesize($fichier));
    fclose($fopen);
    echo $fichier." existe, alors voici son contenu :<br>";
    echo $contenu."<br><br><br>";

    // ou

    echo "ligne par ligne :<br>";
    $fopen = fopen($fichier, 'r');
    while (($ligne = fgets($fopen)) != false) {
        echo $ligne."<br>";
    }
    fclose($fopen);
}
else {
    $fopen = fopen($fichier, 'w');
    $contenu = 'Ligne #1' . PHP_EOL . 'Ligne #2';
    fwrite($fopen, $contenu);
    fclose($fopen);
    echo $fichier." n'existait pas, donc il a été créé!";
}


// file_put_contents()

// delete -> unlink()

// copy()

// rename()

// 



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
