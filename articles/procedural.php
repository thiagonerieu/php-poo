<?php
// Déclaration et initialisation des variables pour l'Article 1
$titreArticle1 = "Introduction à PHP";
$contenuArticle1 = "PHP est un langage de script open-source idéal pour le développement web.";
$dateArticle1 = "19/08/2026";
$auteurArticle1 = "Alice";

// Déclaration et initialisation des variables pour l'Article 2
$titreArticle2 = "Les bases du HTML";
$contenuArticle2 = "Le HTML structure le contenu des pages web de manière sémantique.";
$dateArticle2 = "18/08/2026";
$auteurArticle2 = "Bob";

function cardArticle($titre, $contenu, $auteur, $date){
    echo "<article>
        <h1>$titre</h1>
        <p>$contenu</p>
        <p>By $auteur</p>
        <p>$date</p>
        </article>";
}      
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 02</title>
</head>
<body>
    <header></header>
    <main>
        <?php
            cardArticle($titreArticle1, $contenuArticle1, $auteurArticle1, $dateArticle1);

            cardArticle($titreArticle2, $contenuArticle2, $auteurArticle2, $dateArticle2);
        ?>
    </main>
    <footer></footer>
</body>
</html>