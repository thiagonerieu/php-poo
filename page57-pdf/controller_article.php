<?php
//ajout de la vue
include('vue_article.php');
//connexion à la BDD
include('connect.php');
//test existence des champs nom_article et contenu article
if(isset($_POST['nom_article']) and isset($_POST['contenu_article']))
{
//création des 2 variables qui vont récupérer le contenu des
super globales POST
$name = $_POST['nom_article'];
$content = $_POST['contenu_article'];
//ajout du model
include('model_article.php.');
}
else{
//affichage dans la page html de ce que l'on a enregistré en
bdd
echo '<p>veuillez remplir les champs de formulaire</p>';
}
?>