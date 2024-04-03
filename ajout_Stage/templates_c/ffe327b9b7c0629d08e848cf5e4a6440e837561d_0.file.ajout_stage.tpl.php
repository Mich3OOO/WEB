<?php
/* Smarty version 4.5.1, created on 2024-04-03 15:13:45
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\ajout_stage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d5609ba5fc3_16391868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffe327b9b7c0629d08e848cf5e4a6440e837561d' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\ajout_stage.tpl',
      1 => 1712150023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d5609ba5fc3_16391868 (Smarty_Internal_Template $_smarty_tpl) {
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
            <label for="date">Date de début prévu :</label>
            <input type="number" id="date" name="date" min="1" max="20" placeholder="Date de début prévu">
        </div>
        <div class="flex-droit">
            <label for="Promotion">Promotions concernés :</label>
            <select name="Promotion" id="Promotion" required="required" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allpromotion']->value, 'promotion');
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['promotion']->value['promotion'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label for="TypePromo">Type de promotions concernés :</label>
            <select name="TypePromo" id="TypePromo" required="required" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alltypepromo']->value, 'promo');
$_smarty_tpl->tpl_vars['promo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo']->value) {
$_smarty_tpl->tpl_vars['promo']->do_else = false;
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['promo']->value['Nom_du_Type'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label for="Competences">Compétences necessaire :</label>
            <select name="Competences" id="Competences" required="required" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcomp']->value, 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['comp']->value['comp'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
