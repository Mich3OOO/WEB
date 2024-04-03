
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
                            <button id="sure" onclick="sure()">Supprimer</button>
                            <button class="modif" onclick="window.location.href='../modifier_entreprise/index.php?IDE={$entreprise.IDE}'">✎</button>
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
