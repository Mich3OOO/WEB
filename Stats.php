<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="./assets/css/stats.css">
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script async src="assets/js/stats.js"></script>
        <title>Statisques</title>
        <meta charset="utf-8">
        
    </head>
    <body>
    <?= include "./Menu.php"?>
        <h1>Satistiques</h1>
        <h2>Statisques des étudiant</h2>
        <div class="floatContainer">
            <div id = "CentresEtudiant" class="Graph">

            </div>
            <div id = "PromotionsEtudiant" class="Graph">

            </div>
        </div>
        <h2>Statisques des offres</h2>
        <div class="floatContainer">
            <div id = "Competences" class="Graph">

            </div>

            <div id = "Localitee" class="Graph">

            </div>

            <div id = "TopWhishList" class="Graph">

            </div>
            <div id = "PromotionsConcernees" class="Graph">

            </div>
            <div id = "DureeStage" class="Graph">

            </div>
        </div>

        <h2>Statisques de entreprises</h2>
        <div class="floatContainer">
            <div id = "LocaliteeEnt" class="Graph">

            </div>
            <div id = "SecteurAct" class="Graph">

            </div>
            <div id = "TopAnnonces" class="Graph">

            </div>
        </div>
        <?php include "./Upbutton.html" ?>
        <link rel="stylesheet" href="./assets/css/upbutton.css">
        <script async src="assets/js/upbutton.js"></script>
        
        <?php include "./Footer.html" ?>
        
    </body>
</html>
