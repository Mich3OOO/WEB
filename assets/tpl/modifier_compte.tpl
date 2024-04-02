
<h1>Modifier un compte </h1>
<form action="../assets/phpScripts/updateUser.php" methode="get">
<div class="flex-container">
<div class="flex-gauche">
    <div class="flex-container">
    <div class="flex-gauche">
        <img class="image-profil" src="image/persov5.jpg" alt="image profil">
        <button type="submit" class="Importation" >Importer un image</button>
    </div>
    <div class="flex-droit">
    <label for="Role">Role</label>
    <select name="Role">
            {foreach from=$allrole item=role}
                <option value={$usermodif["role"]}>{$role.role}</option>
            {/foreach}
    </select>

    <label for="Promotion">Promotions</label>
    <select multiple name="Promotion">
            {foreach from=$allpromotion item=promo}
            <option value={$usermodif["promotion"]}>{$promo.promotion}</option>
            {/foreach}
    </select>

    <label for="Campus">Campus</label>
    <select name="Campus">
            {foreach from=$allcampus item=campus}
            <option value={$usermodif["campus"]}>{$campus.NomC}</option>
            {/foreach}
    </select>
   
    </div>
    </div>
    <label for="CP">Code Postale</label>
    <select name="CP">
            {foreach from=$allCP item=CP}
            <option value={$usermodif["CP"]}>{$CP.Code_Post}</option>
            {/foreach}
    </select>

    <label for="Ville">Ville</label>
    <select name="Ville">
            {foreach from=$allVille item=Ville}
            <option value={$usermodif["Ville"]}>{$Ville.ville}</option>
            {/foreach}
    </select>

    <label for="Region">Région</label>
    <select name="Region">
            {foreach from=$allRegion item=region}
            <option value={$usermodif["Region"]}>{$region.reg}</option>
            {/foreach}
    </select>
    
</div>
<div class="flex-droit">
    
    <label for="Nom">Nom</label>
    <input type="text" required="required" id="Nom" name="Nom" value={$usermodif["Nom"]}>
    <label for="Prenom">Prenom</label>
    <input type="text" required="required" id="Prenom" name="Prenom" value={$usermodif["Prenom"]}>
    <label for="Mot-de-passe">Changer le mot de passe</label>
    <input type="text"  id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
    <label for="Mail">Mail</label>
    <input type="email" required="required" id="Mail" name="Mail" value={$usermodif["Mail"]}>
    <label for="Date-naissance">Date de naissance</label>
    <input type="text" required="required" id="Date-naissance" name="Date-naissance" value={$usermodif["Date_Nais"]}>
    <label for="Adresse">Adresse</label>
    <input type="text" required="required" id="Adresse" name="Adresse" value="{$usermodif["Adresse"]}">
    <input type="text" required="required" id="IDu" name="IDu" value="{$usermodif["IDu"]}">
</div>
    
</div>
<div class="flex-bas">
    <button type="submit" class="Valider">Valider</button>
    <form action="../assets/phpScripts/deleteUser.php" methode="get">
        <button type="submit" class="Reinitialiser">Supprimer</button> 
    </form>

</div>
</form>
