<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/Postuler.css">
        <meta charset="utf-8" >
        <title>Postuler</title>
    </head>
    <body>
        <?= include "./Menu.php"?>
        <h5>Postuler</h5>
        <article id="RappelOffre">
            Rappel de l'offre
        </article>
        <p id="msg">Entrer ici un message : </p>
        <div class="flex-mere">
            <textarea rows="8" cols="50" class="flex-child" id="TextMail"></textarea>
            <div class="flex-child">
                <div class="CVLM">
                    <label for="myCV">Déposer un CV :</label><br>
                    <input type="file" id="CV" name="myCV">
                </div>
                <br><br>
                <div class="CVLM">
                    <label for="myLM">Déposer une lettre de motivation :</label><br>
                    <input type="file" id="LM" name="myLM">
                </div>
            </div>
        </div>
        <center><button type="button" id="Post">Je postule</button></center>

        <?= include "./Footer.html"?>

    </body>
</html>
