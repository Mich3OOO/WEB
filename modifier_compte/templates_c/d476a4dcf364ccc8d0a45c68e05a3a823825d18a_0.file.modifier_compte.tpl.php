<?php
/* Smarty version 4.5.1, created on 2024-04-02 12:09:34
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\modifier_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660bd95e16bdc7_16822126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd476a4dcf364ccc8d0a45c68e05a3a823825d18a' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\modifier_compte.tpl',
      1 => 1712052528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660bd95e16bdc7_16822126 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allrole']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["role"];?>
><?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="Promotion">Promotion</label>
    <select multiple name="Promotion">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allpromotion']->value, 'promo');
$_smarty_tpl->tpl_vars['promo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo']->value) {
$_smarty_tpl->tpl_vars['promo']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["promotion"];?>
><?php echo $_smarty_tpl->tpl_vars['promo']->value['promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="Campus">Campus</label>
    <select name="Campus">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcampus']->value, 'campus');
$_smarty_tpl->tpl_vars['campus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campus']->value) {
$_smarty_tpl->tpl_vars['campus']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["campus"];?>
><?php echo $_smarty_tpl->tpl_vars['campus']->value['NomC'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
   
    </div>
    </div>
    <label for="CP">Code Postale</label>
    <select name="CP">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCP']->value, 'CP');
$_smarty_tpl->tpl_vars['CP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CP']->value) {
$_smarty_tpl->tpl_vars['CP']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["CP"];?>
><?php echo $_smarty_tpl->tpl_vars['CP']->value['Code_Post'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="Ville">Ville</label>
    <select name="Ville">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allVille']->value, 'Ville');
$_smarty_tpl->tpl_vars['Ville']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Ville']->value) {
$_smarty_tpl->tpl_vars['Ville']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Ville"];?>
><?php echo $_smarty_tpl->tpl_vars['Ville']->value['ville'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="Region">Région</label>
    <select name="Region">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRegion']->value, 'region');
$_smarty_tpl->tpl_vars['region']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["Region"];?>
><?php echo $_smarty_tpl->tpl_vars['region']->value['reg'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    
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
    <input type="text" required="required" id="IDu" name="IDu" value="<?php echo $_smarty_tpl->tpl_vars['usermodif']->value["IDu"];?>
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
