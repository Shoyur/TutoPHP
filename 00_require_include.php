
<?php

// require
// include

// require_once va ignorer un autre require du même fichier
// include_once va ignorer un autre include du même fichier


// include va continuer si le fichier n'est pas trouvé
// mais require va stopper le reste plus bas EN PLUS d'afficher une erreur


// on pourrait avoir :
// reponse = include 'file.php';
// et que file.php soit :
// <?php
//      return qqchose;
// ? >


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
