<!DOCTYPE html>

<html lang="fr">
  <head>
    
    <meta charset="utf-8" >
    <link href="../css/stage.css" rel="stylesheet" type="text/css" />
   
    <meta name="viewport" content="width=device-width" >
    <title>Modifier un Stage </title>
  </head>
  <body>
    

<form action="../assets/phpScripts/Updatetage.php" method="post">
    <div class="flex-container">
        <div class="flex-gauche">
            <label for="Nom_Poste">Nom  Poste :</label>
            <input type="text" required="required" id="Poste" name="Poste" value="{$offre["Poste"]}">
            <label for="Nom_Entreprise">Nom Entreprise :</label>
            <input type="text" required="required" id="Nom_Entreprise" name="Nom_Entreprise" value="{$entreprise[0]}">
            <label for="Renumeration">Rénumération :</label>
            <input type="text" required="required" id="Renumeration" name="Renumeration" value={$offre["Remune"]}>
            <label for="NB_Places">Nombre de places :</label>
            <input type="number" id="NB_Places" name="NB_Places" min="1" max="20" value={$offre["Nb_Place"]}>
            <label for="date">Date de début prévu :</label>
            <input type="date" id="date" name="date" min="1" max="20" value={$offre["Date_Stage"]}>
        </div>
        <div class="flex-droit">
            <label for="TypePromo">Type de promotions concernés :</label>
            <select name="TypePromo" id="TypePromo" required="required" multiple>
                {foreach from=$alltypepromo item=typepromo}
                    {if ({$typepromo["Nom_du_Type"]}=={$offre["Nom_du_Type"]})}
                        <option selected>{$typepromo["Nom_du_Type"]}</option>
                    
                    {else}
                        <option >{$typepromo["Nom_du_Type"]}</option>
                    {/if}
                {/foreach}
            </select>
            <label for="Comp">Compétences necessaire :</label>
            <select name="Competences" id="Comp" required="required" multiple>
                {foreach from=$allcomp item=Comp}
                    {if ({$Comp["Comp"]}=={$offre["Comp"]})}
                    <option selected>{$Comp["Comp"]}</option>
                    
                    {else}
                        <option >{$Comp["Comp"]}</option>
                    {/if}
                {/foreach}
            </select>
            <input type="text" required="required" id="ID" name="ID" value={$offre["ID"]}>
    </div>
    <div class="flex-bas">
    <div class="Description">
        <label>Description :</label>
        <br>
        <textarea name="Description" rows="10" cols="50">{$offre["Descr"]}</textarea>
    </div>
        <button type="submit" class="button" value="Valider">Valider</button> 
        <button type="submit" class="button" value="Annuler">Annuler</button> 
    </div>
</form>
