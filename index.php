<?php 
    //definition du timestamp qui sera utilisé pour le mardi 2 août
    $tsp = mktime(15, 0, 0, 2, 8, 2015);
?>


<!DOCTYPE html> 
<html>
    <head>
        <title>ex4</title>
    </head>
    <body>
        <p> <?= 'Timestamp actuel :'. time(); ?> </p>
        <p> <?= 'Timestamp du mardi 2 août :'. $tsp; ?> </p>
    </body>
</html>
