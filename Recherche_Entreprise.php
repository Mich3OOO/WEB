<!DOCTYPE html>
<html lang="fr">
    <head>
        <?=include "./assets/phpScripts/redirect.php" ?>
        <link rel="stylesheet" href="./assets/css/Recherche_Entreprise.css">
        <meta charset="utf-8" >
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        
        <title>Recherche d'entreprise</title>
    </head>
    <body>
        <?= include "./Menu.php"?>
        <h2 class="FormeH">Recherche d'entreprise</h2>
        <input list="Satages" id="search" placeholder="🔎︎ search">
        <div id="flex-mere">
            <div id="flex-filtres">
                <h4>Filtre : </h4>
                <label for="Ville">Ville</label><br>
                <select name="Ville" id="Ville" class="selection">
                    <option value="Ville1">Ville 1</option>
                    <option value="Ville2">Ville 2</option>
                    <option value="Ville3">Ville 3</option>
                </select><br><br>
                <label for="Dep">Département</label><br>
                <select name="Dep" id="Dep" class="selection">
                    <option value="Departement1">Département 1</option>
                    <option value="Departement2">Département 2</option>
                    <option value="Departement3">Département 3</option>
                </select><br><br>
                <label for="SectAct">Secteur d'activité</label><br>
                <select name="SectAct" id="SectAct" class="selection">
                    <option value="SectAct1">Secteur d'activité 1</option>
                    <option value="SectAct2">Secteur d'activité 2</option>
                    <option value="SectAct3">Secteur d'activité 3</option>
                </select><br><br>
            </div>
            <div id="flex-recherche">
                <div class="liste-deroulante2">
                    <div class="compte">
                        <div class="droit-compte">
                            <div class="haut-compte">
                                <div id="entre">
                                    <label class="NomPoste">Entreprise</label>
                                </div>
                                <div class="stars">
                                    <i class="star stargrey fas fa-star" data-index="0"></i>
                                    <i class="star stargrey fas fa-star" data-index="1"></i>
                                    <i class="star stargrey fas fa-star" data-index="2"></i>
                                    <i class="star stargrey fas fa-star" data-index="3"></i>
                                    <i class="star stargrey fas fa-star" data-index="4"></i>
                                </div>
                            </div>
                            <div class="bas-compte">
                                <div class="gauche">
                                    <p class="mail">Adresse mail</p>
                                    <a class="Info More" href="">Site WEB</a>
                                    <p class="mail">Secteur d'activité</p>
                                </div>
                                <div class="droite">
                                    <p class="mail" >Numéro de téléphone</p>
                                    <a class="Info More" href="">Adresse</a>
                                    <a class="Info More" href="">Plus d'information</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="compte">
                        <div class="droit-compte">
                            <div class="haut-compte">
                                <div id="entre">
                                    <label class="NomPoste">Entreprise</label>
                                </div>
                                <div class="stars">
                                    <i class="star stargrey fas fa-star" data-index="0"></i>
                                    <i class="star stargrey fas fa-star" data-index="1"></i>
                                    <i class="star stargrey fas fa-star" data-index="2"></i>
                                    <i class="star stargrey fas fa-star" data-index="3"></i>
                                    <i class="star stargrey fas fa-star" data-index="4"></i>
                                </div>
                            </div>
                            <div class="bas-compte">
                                <div class="gauche">
                                    <p class="mail">Adresse mail</p>
                                    <a class="Info More" href="">Site WEB</a>
                                    <p class="mail">Secteur d'activité</p>
                                </div>
                                <div class="droite">
                                    <p class="mail" >Numéro de téléphone</p>
                                    <a class="Info More" href="">Adresse</a>
                                    <a class="Info More" href="">Plus d'information</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="compte">
                        <div class="droit-compte">
                            <div class="haut-compte">
                                <div id="entre">
                                    <label class="NomPoste">Entreprise</label>
                                </div>
                                <div class="stars">
                                    <i class="star stargrey fas fa-star" data-index="0"></i>
                                    <i class="star stargrey fas fa-star" data-index="1"></i>
                                    <i class="star stargrey fas fa-star" data-index="2"></i>
                                    <i class="star stargrey fas fa-star" data-index="3"></i>
                                    <i class="star stargrey fas fa-star" data-index="4"></i>
                                </div>
                            </div>
                            <div class="bas-compte">
                                <div class="gauche">
                                    <p class="mail">Adresse mail</p>
                                    <a class="Info More" href="">Site WEB</a>
                                    <p class="mail">Secteur d'activité</p>
                                </div>
                                <div class="droite">
                                    <p class="mail" >Numéro de téléphone</p>
                                    <a class="Info More" href="">Adresse</a>
                                    <a class="Info More" href="">Plus d'information</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <?= include "./Footer.html"?>
    </body>
</html>
