<form action="../assets/phpScripts/updateEntreprise.php" methode="get">
<div class="flex-container">
    <div class="flex-gauche">
    
        <label for="Nom">Nom  Entreprise :</label>
        <input type="text" required="required" id="Nom" name="Nom" value="{$entreprise["Nom"]}">
        <label for="Adresse">Adresse :</label>
        <input type="text" required="required" id="Adresse" name="Adresse" value="{$entreprise["Adresse"]}">
        <label for="CP">Code Postal :</label>
        <input type="text" required="required" id="CP" name="CP" value={$entreprise["CP"]}>
        <label for="Ville">Ville</label>
        <input type="text" required="required" id="Ville" name="Ville" value="{$entreprise["ville"]}">
        <label for="Region">Région</label>
        <input type="text" required="required" id="Region" name="Region" value="{$entreprise["reg"]}">
        <label for="Mail">Mail</label>
        <input type="text" required="required" id="Mail" name="Mail" value={$entreprise["Mail"]}>
        <label for="Tel">Numéro de Téléphone :</label>
        <input type="text" required="required" id="Tel" name="Tel" value={$entreprise["Tel"]}>
        
        
    </div>
    <div class="flex-droit">
        <label for="SIRET">SIRET :</label>
        <input type="text" required="required" id="SIRET" name="SIRET" value={$entreprise["SIRET"]}>
        <label for="site">Site internet de l'entreprise :</label>
        <input type="text" required="required" id="site" name="site" value={$entreprise["site"]}>
        <label for="Secteur_Act">Secteur d'activité :</label>
        <select name="Secteur_Act" id="Secteur_Act" required="required">
            {foreach from=$allsect item=sect}
            {if ({$sect["Secteur_Act"]}=={$entreprise["Sect_Act"]})}
            <option selected>{$sect["Secteur_Act"]}</option>
            
            {else}
                <option >{$sect["Secteur_Act"]}</option>
            {/if}
            {/foreach}
        </select>
        <div class="Description">
            <label>Description :</label>
            <br>
            <textarea name="descr" rows="10" cols="50" >{$entreprise.descr}</textarea>
        </div>
        <input type="hidden" required="required" id="ID" name="ID" value={$entreprise["ID"]}>
    </div>

</div>
<div class="flex-bas">
    <button type="submit" class="button" value="Valider">Valider</button>
     </form>
    <form action="../assets/phpScripts/deleteEntreprise.php" method="get">
        <button type="submit" class="Reinitialiser">Supprimer</button> 
    
</div>
</form>