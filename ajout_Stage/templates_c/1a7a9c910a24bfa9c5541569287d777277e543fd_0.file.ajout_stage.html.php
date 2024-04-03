<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:22:32
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\ajout_stage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b178829d3f5_73157509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7a9c910a24bfa9c5541569287d777277e543fd' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\ajout_stage.html',
      1 => 1711909499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b178829d3f5_73157509 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="fr">
  <head>
    
    <meta charset="utf-8" >
    <link href="../css/stage.css" rel="stylesheet" type="text/css" />
   
    <meta name="viewport" content="width=device-width" >
    <title>Ajout Stage </title>
  </head>
  <body>
    

<form action="../assets/phpScripts/AjourStage.php" method="post">
    <div class="flex-container">
        <div class="flex-gauche">
            <label for="Nom_Poste">Nom  Poste :</label>
            <input type="text" required="required" id="Poste" name="Poste" placeholder="Nom du Poste">
            <label for="Nom_Entreprise">Nom Entreprise :</label>
            <input type="text" required="required" id="Nom_Entreprise" name="Nom_Entreprise" placeholder="Nom de l'entreprise">
            <label for="Renumeration">Rénumération :</label>
            <input type="text" required="required" id="Renumeration" name="Renumeration" placeholder="Renumeration en €">
            <label for="NB_Places">Nombre de places :</label>
            <input type="number" id="NB_Places" name="NB_Places" min="1" max="20" placeholder="Nombre de place disponible">
        </div>
        <div class="flex-droit">
            <label for="Promotion">Promotions concernés :</label>
            <select name="Promotion" id="Promotion" required="required" multiple>
                <option value="A1">A1</option>
                <option value="A2-Info">A2 Info</option>
                <option value="A2-Géné">A2-Géné</option>
                <option value="A3-Info">A3-Info</option>
                <option value="A3-Géné">A2 Info</option>
                <option value="A4-Info">A4-Info</option>
                <option value="A4-Géné">A4-Géné</option>  
            </select>
            <label for="Competences">Compétences necessaire :</label>
            <select name="Competences" id="Competences" required="required" multiple>
                <option value="C++">C++</option>
                <option value="Mecanique">Mécanique</option>
                <option value="Industrie">Industrie</option>
                <option value="HTML">HTML</option>
                <option value="Python">Python</option>
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
<?php }
}
