
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
            {if ({$role.role}=={$usermodif["role"]})}
                <option selected>{$role.role}</option>
            
            {else}
                <option >{$role.role}</option>
            {/if}
               
            {/foreach}
    </select>

    <label for="Promotion">Promotion</label>
    <select multiple name="Promotion">
            {foreach from=$allpromotion item=promo}
            {if ({$promo.promotion}=={$usermodif["promotion"]})}
            <option selected>{$promo.promotion}</option>
            
            {else}
                <option >{$promo.promotion}</option>
            {/if}
            {/foreach}
    </select>

    <label for="Campus">Campus</label>
    <select name="Campus">
            {foreach from=$allcampus item=campus}
            {if ({$campus.ville}=={$usermodif["ville"]})}
            <option selected>{$campus.ville}</option>
            
            {else}
                <option >{$campus.ville}</option>
            {/if}
           
            {/foreach}
    </select>
   
    </div>
    </div>
    <label for="CP">Code Postale</label>
    <select name="CP">
            {foreach from=$allCP item=CP}
            {if ({$CP.Code_Post}=={$usermodif["CP"]})}
            <option selected>{$CP.Code_Post}</option>
            
            {else}
                <option >{$CP.Code_Post}</option>
            {/if}
            
            {/foreach}
    </select>

    <label for="Ville">Ville</label>
    <select name="Ville">
            {foreach from=$allVille item=Ville}
            {if ({$Ville.ville}=={$usermodif["Ville"]})}
            <option selected>{$Ville.ville}</option>
            
            {else}
                <option >{$Ville.ville}</option>
            {/if}
        
            {/foreach}
    </select>

    <label for="Region">Région</label>
    <select name="Region">
            {foreach from=$allRegion item=region}
            
            {if ({$region.reg}=={$usermodif["Region"]})}
            <option selected>{$region.reg}</option>
            
            {else}
                <option >{$region.reg}</option>
            {/if}
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
    <button type="submit" class="Reinitialiser">Supprimer</button> 
   
    

</div>
</form>

