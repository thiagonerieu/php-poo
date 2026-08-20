<?php
//Déclaration de ma variable d'affichage
$listeUtilisateur = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class ViewHeader {
            public function render() {
            return "<header><h1>Mon Site Web</h1></header>";
            }
        }
    ?>

    <main>
        <h1>Liste des utilisateurs</h1>
        <ul>
            <?php 
                foreach($data as $row){
                    $listeUtilisateur .="<li>Pseudo :".$row['pseudo']." - Email : ".$row['email']." - Role :".$row['role']."</li>";
                };
                echo $listeUtilisateur;
            ?>
        </ul>
    </main>
    <?php
        class ViewFooter {
            public function render() {
            return "<footer><p>&copy; 2026 - Mon Site</p></footer>";
        }
    }
    ?>
</body>
</html>