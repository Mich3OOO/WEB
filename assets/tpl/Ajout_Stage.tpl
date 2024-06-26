<!DOCTYPE html>

<html lang="fr">
  <head>
    
    <meta charset="utf-8" >
    <link href="../css/stage.css" rel="stylesheet" type="text/css" />
   
    <meta name="viewport" content="width=device-width" >
    <title>Ajout Stage </title>
  </head>
  <body>
    

<form action="../assets/phpScripts/SQL/AjoutStage.php" method="get">
    <div class="flex-container">
        <div class="flex-gauche">
            <label for="Poste">Nom  Poste :</label>
            <input type="text" required="required" id="Poste" name="Poste" placeholder="Nom du Poste" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit contenir que des lettres ')>
            <label for="Nom_Entreprise">Nom Entreprise :</label>
            <input type="text" required="required" id="Nom_Entreprise" name="Nom_Entreprise" placeholder="Nom de l'entreprise" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit contenir que des lettres ')>
            <label for="Renumeration">Rénumération :</label>
            <input type="number" required="required" id="Renumeration" name="Renumeration" placeholder="Renumeration en €">
            <label for="NB_Places">Nombre de places :</label>
            <input type="number" id="NB_Places" name="NB_Places" min="1" max="20" placeholder="Nombre de place disponible">
            <label for="date">Date de début prévu :</label>
            <input type="date" id="date" name="date" min="1" max="20" placeholder="Date de début prévu">
            <label for="Duree">Durée du stage (en mois):</label>
            <input type="number" id="Duree" name="Duree" placeholder="Durée du stage">
        </div>
        <div class="flex-droit">
            <label for="TypePromo">Type de promotions concernés :</label>
            <select name="TypePromo[]" id="TypePromo" required="required" multiple="multiple">
                {foreach from=$alltypepromo item=promo}
                    <option>{$promo.Nom_du_Type}</option>
                {/foreach}
            </select>
            <label for="Competences">Compétences necessaire :</label>
            <select name="Competences[]" id="Competences" required="required" multiple="multiple">
                {foreach from=$allcomp item=comp}
                    <option>{$comp.comp}</option>
                {/foreach}
            </select>
    </div>
    <div class="flex-bas">
    <div class="Description">
        <label>Description :</label>
        <br>
        <textarea name="Description" rows="10" cols="50"></textarea>
    </div>
        <button type="submit" class="button" value="Valider">Valider</button> 
        <button type="submit" class="button" value="Annuler">Annuler</button> 
    </div>
</form>
