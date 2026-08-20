<?php
 function addArticle($bdd, $name, $content){
 try
 {
 //Exécution de la requête SQL insert
 $req = $bdd->prepare('INSERT INTO article(nom_article,
contenu_article)
 VALUES(?,?)');
 $req->bindParam(1, $name, PDO::PARAM_STR);
 $req->bindParam(2, $content, PDO::PARAM_STR);
 return "ajout de l'article : $name qui a comme contenu :
$content";
 }
 catch(Exception $e)
 {
 //affichage d'une exception en cas d’erreur
 die('Erreur : '.$e->getMessage());
 }
 }
addArticle($bdd, $name, $content) ;
?>