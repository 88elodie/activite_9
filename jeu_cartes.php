<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de cartes</title>
</head>
<body>
<?php

$nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suites = ["carreau", "trefle", "coeur", "pique"];

foreach ($nombres as $nombre) {
    foreach ($suites as $suite) {
        $paquet[] = $nombre . "-" . $suite;
    }
}

$paquet_1 = array_slice($paquet, 25, 26);
$paquet_2 = array_slice($paquet, 0, 26);
shuffle($paquet_1);
shuffle($paquet_2);
$paquet = array_merge($paquet_1, $paquet_2);

$i = 0;
foreach ($paquet as $carte) {
    $i++;
    echo $carte . " ";
    if ($i === 13) {
        echo nl2br("\n");
        $i = 0;
    }

}
?>
</body>
</html>