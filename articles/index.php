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
        <!-- Affichage de l'Article 1 -->
        <article>
            <h1><?php echo $titreArticle1; ?></h1>
            <p><?php echo $contenuArticle1; ?></p>
            <p>By <?php echo $auteurArticle1; ?></p>
            <p><?php echo $dateArticle1; ?></p>
        </article>

        <!-- Affichage de l'Article 2 -->
        <article>
            <h1><?php echo $titreArticle2; ?></h1>
            <p><?php echo $contenuArticle2; ?></p>
            <p>By <?php echo $auteurArticle2; ?></p>
            <p><?php echo $dateArticle2; ?></p>
        </article>
    </main>
    <footer></footer>
</body>
</html>