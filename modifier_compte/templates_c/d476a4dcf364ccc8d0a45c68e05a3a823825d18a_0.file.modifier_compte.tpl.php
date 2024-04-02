<?php
/* Smarty version 4.5.1, created on 2024-04-01 23:08:36
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\modifier_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b22540c2c09_39971113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd476a4dcf364ccc8d0a45c68e05a3a823825d18a' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\modifier_compte.tpl',
      1 => 1712005664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b22540c2c09_39971113 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Modifier un compte </h1>
<form action="../assets/phpScripts/updateUser.php" methode="get">
<div class="flex-container">
<div class="flex-gauche">
    <img class="image-profil" src="image/persov5.jpg" alt="image profil">
    <button type="submit" class="Importation" >Importer un image</button>
    <label for="Role">Role:</label>
    <input type="text" id="Role" name="Role" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["role"];?>
>
    <label for="Promotion">Promotions:</label>
    <input type="text" id="Promotions" name="Promotions" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["promotion"];?>
>
    <label for="Campus">Campus</label>
    <input type="text" required="required" id="Campus" name="Campus" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["campus"];?>
>
    
</div>
<div class="flex-droit">
    
    <label for="Nom">Nom</label>
    <input type="text" required="required" id="Nom" name="Nom" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Nom"];?>
>
    <label for="Prenom">Prenom</label>
    <input type="text" required="required" id="Prenom" name="Prenom" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Prenom"];?>
>
    <label for="Mot-de-passe">Changer le mot de passe</label>
    <input type="text"  id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
    <label for="Mail">Mail</label>
    <input type="email" required="required" id="Mail" name="Mail" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Mail"];?>
>
    <label for="Date-naissance">Date de naissance</label>
    <input type="text" required="required" id="Date-naissance" name="Date-naissance" value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Date_Nais"];?>
>
    <label for="Adresse">Adresse</label>
    <input type="text" required="required" id="Adresse" name="Adresse" value="<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Adresse"];?>
">
    
</div>
    
</div>
<div class="flex-bas">
    <button type="submit" class="Valider">Valider</button>
    <form action="../assets/phpScripts/deleteUser.php" methode="get">
        <button type="submit" class="Reinitialiser">Supprimer</button> 
    </form>

</div>
</form>
<?php }
}
