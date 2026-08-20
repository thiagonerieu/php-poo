<?php
 //démarrage de la session (à utiliser sur toutes les pages)
 session_start();

 //destruction de la session
 session_destroy();
 
 //redirection index.php
 header('Location: ./index.php?deco');
?>