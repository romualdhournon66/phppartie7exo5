<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 7 exercice 5</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 7 exercice 5</h1>
                    <h3 align="center">Exercice 5</h3>
                    <p align="center">Créer un formulaire sur la page index.php avec :</p>
                    <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
                    <li>Un champ texte pour le nom</li>
                    <li>Un champ texte pour le prénom</li>
                    <p align="center">Ce formulaire doit rediriger vers la page index.php.
                        Vous avez le choix de la méthode.</p>
                </div>
            </div>
            <p align="center"><a href="index.php">Retour sur la page index.php</a></p>
            <?php
            echo $_POST['prenom'];
            if (isset($_POST['Nom']) AND isset($_POST['Prenom'])) { // On teste si les paramètres nom et prénom sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">Ton nom est: "<b>' . $_POST['Nom'] . '</b>"  et ton prénom est: "<b>' . $_POST['Prenom'] . '</b>".</p>';
            } else { // s'il nous manque un paramètre, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>