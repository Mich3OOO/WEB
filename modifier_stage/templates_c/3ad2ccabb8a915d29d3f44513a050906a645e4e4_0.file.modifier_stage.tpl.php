<?php
/* Smarty version 4.5.1, created on 2024-04-04 18:32:28
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\modifier_stage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660ed61c377579_39798068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ad2ccabb8a915d29d3f44513a050906a645e4e4' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\modifier_stage.tpl',
      1 => 1712248346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ed61c377579_39798068 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

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
            <input type="text" required="required" id="Poste" name="Poste" value="<?php echo $_smarty_tpl->tpl_vars['offre']->value["Poste"];?>
">
            <label for="Nom_Entreprise">Nom Entreprise :</label>
            <input type="text" required="required" id="Nom_Entreprise" name="Nom_Entreprise" value="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0];?>
">
            <label for="Renumeration">Rénumération :</label>
            <input type="text" required="required" id="Renumeration" name="Renumeration" value=<?php echo $_smarty_tpl->tpl_vars['offre']->value["Remune"];?>
>
            <label for="NB_Places">Nombre de places :</label>
            <input type="number" id="NB_Places" name="NB_Places" min="1" max="20" value=<?php echo $_smarty_tpl->tpl_vars['offre']->value["Nb_Place"];?>
>
            <label for="date">Date de début prévu :</label>
            <input type="date" id="date" name="date" min="1" max="20" value=<?php echo $_smarty_tpl->tpl_vars['offre']->value["Date_Stage"];?>
>
        </div>
        <div class="flex-droit">
            <label for="TypePromo">Type de promotions concernés :</label>
            <select name="TypePromo" id="TypePromo" required="required" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alltypepromo']->value, 'typepromo');
$_smarty_tpl->tpl_vars['typepromo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['typepromo']->value) {
$_smarty_tpl->tpl_vars['typepromo']->do_else = false;
?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['typepromo']->value["Nom_du_Type"];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['offre']->value["Nom_du_Type"];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 == $_prefixVariable2)) {?>
                        <option selected><?php echo $_smarty_tpl->tpl_vars['typepromo']->value["Nom_du_Type"];?>
</option>
                    
                    <?php } else { ?>
                        <option ><?php echo $_smarty_tpl->tpl_vars['typepromo']->value["Nom_du_Type"];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label for="Comp">Compétences necessaire :</label>
            <select name="Competences" id="Comp" required="required" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcomp']->value, 'Comp');
$_smarty_tpl->tpl_vars['Comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Comp']->value) {
$_smarty_tpl->tpl_vars['Comp']->do_else = false;
?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['Comp']->value["Comp"];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['offre']->value["Comp"];
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable3 == $_prefixVariable4)) {?>
                    <option selected><?php echo $_smarty_tpl->tpl_vars['Comp']->value["Comp"];?>
</option>
                    
                    <?php } else { ?>
                        <option ><?php echo $_smarty_tpl->tpl_vars['Comp']->value["Comp"];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="text" required="required" id="ID" name="ID" value=<?php echo $_smarty_tpl->tpl_vars['offre']->value["ID"];?>
>
    </div>
    <div class="flex-bas">
    <div class="Description">
        <label>Description :</label>
        <br>
        <textarea name="Description" rows="10" cols="50"><?php echo $_smarty_tpl->tpl_vars['offre']->value["Descr"];?>
</textarea>
    </div>
        <button type="submit" class="button" value="Valider">Valider</button> 
        <button type="submit" class="button" value="Annuler">Annuler</button> 
    </div>
</form>
<?php }
}
