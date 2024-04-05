

<div id="flex-mere">
    <div id="flex-filtres">
        <form action = '../recherche_entreprise/' methode= 'GET' onkeydown="return event.key != 'Enter';">
            <input type="text" id="search" name = 'search' placeholder="🔎︎ search">
            <h4>Filtre : </h4>

            <label for="Ville">Ville</label>
            <input type="text" id = "Ville" list="DLVille" class="MChoise"  oninput ="updateDL(event,'https://geo.api.gouv.fr/communes?nom=')" onchange ="addFiltre(event,'https://geo.api.gouv.fr/communes?nom=')">
            <datalist id = "DLVille">
            </datalist>
            <div id = "VilleList" class="tagcontent">
            </div>
            


           
            <label for="Dep">région</label>
            <input id = "Dep" list="DLDep" class="MChoise" oninput ="updateDL(event,'https://geo.api.gouv.fr/regions?nom=')" onchange ="addFiltre(event,'https://geo.api.gouv.fr/regions?nom=')">
            <datalist id = "DLDep">
            </datalist>
            <div id = "DepList" class="tagcontent">
            </div>


            <label for="SectAct">Secteur d'activité</label>
            <input id = "SectAct" list="DLSectAct" class="MChoise" oninput ="updateDL(event,'http://localhost/assets/phpscripts/secteurAct.php?secteur=')" onchange ="addFiltre(event,'http://localhost/assets/phpscripts/secteurAct.php?secteur=')">
            <datalist id = "DLSectAct">
            </datalist>
            <div id = "SectActList" class="tagcontent">
            </div>

            <button type = 'submit'>search</button>
            



        </form>
    </div>
    <div id="flex-recherche">
        <div class="liste-deroulante2">
            {foreach from=$allentreprise item=entreprise}
            <div class="compte">
                <div class="droit-compte">
                    <div class="haut-compte">
                        <div id="entre">
                            <label class="NomEntreprise">{$entreprise.NomE}</label>
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
                            <p class="mail">Adresse mail: {$entreprise.MailE}</p>
                            <a class="Info taille" href="">Site WEB : {$entreprise.Site}</a>
                            <p class="mail">Secteur d'activité : {$entreprise.Secteur_Act}</p>
                        </div>
                        <div class="droite">
                            <p class="mail" >Numéro de téléphone : {$entreprise.TelE}</p>
                            <a class="Info More" href="">Adresse : {$entreprise.AdresseA}</a>
                            {if ($_SESSION["role"] == "Administrateur")}
                            <form action="../assets/phpScripts/deleteEntreprise.php" method="get">
                            <input type="hidden" required="required" id="IDE" name="IDE" value="{$entreprise["IDE"]}">
                                <button id="sure" type="submit">Supprimer</button>
                            </form>
                                 <button class="modif" type="submit" onclick="window.location.href='../modifier_entreprise/index.php?IDE={$entreprise.IDE}'">✎</button>
                           
                            {/if}
                            <a class="Info More" href="">Plus d'information</a>
                        </div>
                    </div>
                </div>

            </div>
            {/foreach}

        </div>

    </div>

</div>
