<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:45:56
  from 'C:\Users\alexa\Desktop\Cours\Activitées\BLOC 4\PROJET\WEB\assets\html\modifier_entreprise.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b1d044323e2_22688919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc835cf21be8e089b9a69e871a958bae2c9a5b49' => 
    array (
      0 => 'C:\\Users\\alexa\\Desktop\\Cours\\Activitées\\BLOC 4\\PROJET\\WEB\\assets\\html\\modifier_entreprise.html',
      1 => 1711706139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b1d044323e2_22688919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="flex-container">
    <div class="flex-gauche">
        <label for="Nom_Entreprise">Nom  Entreprise :</label>
        <input type="text" required="required" id="Nom_Entreprise" name="Nom_Entreprise" placeholder="Nom de l'entreprise">
        <label for="Adresse">Adresse :</label>
        <div class="horizontale">
        <input type="text" required="required" id="Adresse" name="Adresse" placeholder="Adresse de l'entreprise">
        <button type="submit" class="button" value="Ajouter">Ajouter</button>
        </div>
        <label for="CP">Code Postal :</label>
        <div class="horizontale">
        <input type="text" required="required" id="CP" name="CP" placeholder="Code Postal de l'entreprise">
        <button type="submit" class="button" value="Ajouter">Ajouter</button> 
        </div>
        <label for="Ville">Ville :</label>
        <div class="horizontale">
        <input type="text" required="required" id="Ville" name="Ville" placeholder="Ville de l'entreprise">
        <button type="submit" class="button" value="Ajouter">Ajouter</button>
        </div>
        <label for="Mail">Mail</label>
        <input type="text" required="required" id="Mail" name="Mail" placeholder="Mail">
        <label for="Num_Tel">Numéro de Téléphone :</label>
        <input type="text" required="required" id="Num_Tel" name="Num_Tel" placeholder="Nom de l'entreprise">
        
        
    </div>
    <div class="flex-droit">
        <label for="Site_Internet">Site internet de l'entreprise :</label>
        <input type="text" required="required" id="Site_Internet" name="Site_Internet" placeholder="Nom de l'entreprise">
        <label for="Sect_Activite">Secteur d'activité :</label>
        <select name="Sect_Activite" id="Sect_Activite" required="required" multiple>
            <option value="Dev_Info">Dev Info</option>
            <option value="Reseau">Reseau</option>
            <option value="Industrie">Industrie</option>
            <option value="Management">Management</option>
            <option value="Autre">Autre</option>
        </select>
        <div class="Description">
            <label>Description :</label>
            <br>
            <textarea name="Description" rows="10" cols="50"></textarea>
        </div>
    </div>

</div>
<div class="flex-bas">
    <button type="submit" class="button" value="Valider">Valider</button> 
    <button type="submit" class="button" value="Annuler">Annuler</button> 
</div><?php }
}
