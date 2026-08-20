<?php
//connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=articles', 'root','',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)];
?>
