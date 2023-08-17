
<?php

date_default_timezone_set('US/Eastern');
$maintenant = time();
echo $maintenant . '</br>'; // integer, nombres de secondes depuis jan 1970
echo $maintenant + 5*24*60*60 . '</br>'; // dans 5 jours
echo date('d/m/Y H:m:s') . '</br>';
echo date_default_timezone_get() . '</br>';


// changer ou intteroger le timezone
// date_default_timezone_...


// unix timestamp
// mktime()


echo strtotime('last day of february');

// date_parse('...')


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
