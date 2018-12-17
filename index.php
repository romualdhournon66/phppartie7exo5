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
                    <div align="center"><li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
                        <li>Un champ texte pour le nom</li>
                        <li>Un champ texte pour le prénom</li></div>
                    <p align="center">Ce formulaire doit rediriger vers la page index.php.
                        Vous avez le choix de la méthode.</p>
                </div>
            </div>
            <form method="POST">
                <div align="center">
                    <select name="choix">
                        <option value="Homme">Mr</option>
                        <option value="Femme">Mme</option>
                    </select>
                </div>
                <div align="center"><input type="text" placeholder="Votre nom" name="Nom" value="Votre nom"/></div>
                <div align="center"><input type="text" placeholder="Votre prénom" name="Prenom" value="Votre prénom"/></div>
                <div align="center"><input type="submit" value="Valider" /></div>
            </form>
            <?php
            if (isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['choix'])) { // On teste si les paramètres nom et prénom sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">Ton nom est: <b>' . $_POST['Nom'] . '</b> ,ton prénom est: <b>' . $_POST['Prenom'] . ' </b> et tu es un(e) <b>' . $_POST['choix'] . '</b>.</p>';
            } else { // s'il nous manque un paramètre, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>

