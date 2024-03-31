<?php
/* Smarty version 4.5.1, created on 2024-03-31 15:18:56
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\modifier_compte.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660962c05f9490_94129640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d1a22252f50b26cf56a93ce87915c32f437b75c' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\modifier_compte.html',
      1 => 1711707240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660962c05f9490_94129640 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Modifier un compte </h1>
<form>
<div class="flex-container">
<div class="flex-gauche">
    <img class="image-profil" src="image/persov5.jpg" alt="image profil">
    <button type="submit" class="Importation" >Importer un image</button>
    <label for="Role">Choisir le role:</label>
    <select name="Role" id="Role" required="required" multiple>
        <option value="Pilote">Pilote</option>
        <option value="Admin">Admin</option>
        <option value="Etudiant">Etudiant</option>
        
    </select>
    <label for="Promotion">Choisir les promotions:</label>

    <select name="Promotion" id="Promotion" required="required" multiple>
        <option value="A1">A1</option>
        <option value="A2-Info">A2 Info</option>
        <option value="A2-Géné">A2-Géné</option>
        <option value="A3-Info">A3-Info</option>
        <option value="A3-Géné">A2 Info</option>
        <option value="A4-Info">A4-Info</option>
        <option value="A4-Géné">A4-Géné</option>
        
    </select>
    <label for="Campus">Campus</label>
    <input type="text" required="required" id="Campus" name="Campus" placeholder="Campus">
    
</div>
<div class="flex-droit">
    
    <label for="Nom">Nom</label>
    <input type="text" required="required" id="Nom" name="Nom" placeholder="Nom">
    <label for="Prenom">Prenom</label>
    <input type="text" required="required" id="Prenom" name="Prenom" placeholder="Prenom">
    <label for="Mot-de-passe">Mot de passe</label>
    <input type="text" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
    <label for="Confirmation-MDP">Confirmation Mot de passe</label>
    <input type="text" required="required" id="Confirmation-MDP" name="Confirmation-MDP" placeholder="Confirmation mot de passe">
    <label for="Mail">Mail</label>
    <input type="text" required="required" id="Mail" name="Mail" placeholder="Mail">
    <label for="Date-naissance">Date de naissance</label>
    <input type="text" required="required" id="Date-naissance" name="Date-naissance" placeholder="Date-naissance">
    <label for="Adresse">Adresse</label>
    <input type="text" required="required" id="Adresse" name="Adresse" placeholder="Adresse">
    
</div>
    
</div>
<div class="flex-bas">
    <button type="submit" class="Valider">Valider</button>
    <button type="submit" class="Reinitialiser">Réinitialiser</button> 
</div>
</form>
<?php }
}
