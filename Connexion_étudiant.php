<!DOCTYPE html>
<html lang="fr">
    <head>
        <?=include "./assets/phpScripts/redirect.php" ?>
        <title>Accueille étudiant</title>
        <meta charset="utf-8" >
        <meta charset="UTF-8">
        <meta name="keywords" content="étudiant,Stage,accueille">
        <meta name="description" content="site d'annonce de stage">
        <link rel = "StyleSheet" href = "assets/css/Connexion_étudiant.css">
        <script src="assets/js/Connexion_étudiant.js"></script>

    </head>
    <body>
        <?= include "./Menu.php"?>
        

        <main>
            <div class = "flexContainer">              
                <ul class="liste" id ="Filtres">
                    <li><label for="Filtres">Filtres:</label></li>
                    <li>
                        <label for="Ville">Ville</label>
                    </li>
                    <li>
                        <input id = "Ville" type="text" list="DLVille" class="MChoise">
                        <datalist id = "DLVille">
                        </datalist>
                        <div id = "VilleList" class="tagcontent">
                        </div>
                    </li>
                    <li>
                        <label for="Département">Département</label>
                    </li>
                    <li>
                        <input id = "Département" list="DLDépartement" class="MChoise">
                        <datalist id = "DLDépartement">
                            
                        </datalist>
                        <div id = "DépartementList" class="tagcontent">
                        </div>
                    </li>
                    <li>
                        <label for="SécteurA">Sécteur d'activité</label>
                    </li>
                    <li>
                        <input id = "SécteurA" list="DLSécteurA" class="MChoise">
                        <datalist id = "DLSécteurA">
                            <!--PHp-->
                        </datalist>
                        <div id = "SécteurAList" class="tagcontent">
                        </div>
                    </li>

                    <li>
                        <label for="Date_début">Date début</label>
                    </li>
                    <li>
                        <input type="date" id="Date_début">
                    </li>

                    <li>
                        <label for="durée">durée (en mois)</label>
                    </li>
                    <li>
                        <input type = "number" id="durée">
                    </li>

                    
                    <li>
                        <label for="TypeContrat">Type de contrat</label>
                    </li>
                    <li>
                        <input id = "TypeContrat" list="DLTypeContrat" class="MChoise">
                        <datalist id = "DLTypeContrat">
                            <option value="CDD"></option>
                            <option value="CDI"></option>
                            <option value="Stage"></option>
                            <option value="Alternance"></option>
                        </datalist>
                        <div id = "TypeContratList" class="tagcontent">
                        </div>
                    </li>
                    
                </ul>
                <div id = "RechercheOffre">
                    <input list="Stages" id="search" placeholder="🔎︎ search">

                    <datalist id = "Stages">

                    </datalist>

                    <div id="offres">
                        
                        
                    </div>
                </div>
                
            </div>
            
        </main>

        
        <?= include "./Footer.html"?>
        
    </body>

    

</html>
