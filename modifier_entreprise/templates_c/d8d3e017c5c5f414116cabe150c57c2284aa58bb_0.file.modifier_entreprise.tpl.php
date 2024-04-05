<?php
/* Smarty version 4.5.1, created on 2024-04-05 09:29:59
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\modifier_entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660fa8772855d6_56728860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d3e017c5c5f414116cabe150c57c2284aa58bb' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\tpl\\modifier_entreprise.tpl',
      1 => 1712287644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fa8772855d6_56728860 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="../assets/phpScripts/updateEntreprise.php" methode="get">
<div class="flex-container">
    <div class="flex-gauche">
    
        <label for="Nom">Nom  Entreprise :</label>
        <input type="text" required="required" id="Nom" name="Nom" value="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["Nom"];?>
">
        <label for="Adresse">Adresse :</label>
        <input type="text" required="required" id="Adresse" name="Adresse" value="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["Adresse"];?>
">
        <label for="CP">Code Postal :</label>
        <input type="text" required="required" id="CP" name="CP" value=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["CP"];?>
>
        <label for="Ville">Ville</label>
        <input type="text" required="required" id="Ville" name="Ville" value="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["ville"];?>
">
        <label for="Region">Région</label>
        <input type="text" required="required" id="Region" name="Region" value="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["reg"];?>
">
        <label for="Mail">Mail</label>
        <input type="text" required="required" id="Mail" name="Mail" value=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["Mail"];?>
>
        <label for="Tel">Numéro de Téléphone :</label>
        <input type="text" required="required" id="Tel" name="Tel" value=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["Tel"];?>
>
        
        
    </div>
    <div class="flex-droit">
        <label for="SIRET">SIRET :</label>
        <input type="text" required="required" id="SIRET" name="SIRET" value=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["SIRET"];?>
>
        <label for="site">Site internet de l'entreprise :</label>
        <input type="text" required="required" id="site" name="site" value=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["site"];?>
>
        <label for="Secteur_Act">Secteur d'activité :</label>
        <select name="Secteur_Act" id="Secteur_Act" required="required">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allsect']->value, 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['sect']->value["Secteur_Act"];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['entreprise']->value["Sect_Act"];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 == $_prefixVariable2)) {?>
            <option selected><?php echo $_smarty_tpl->tpl_vars['sect']->value["Secteur_Act"];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['sect']->value["Secteur_Act"];?>
</option>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <div class="Description">
            <label>Description :</label>
            <br>
            <textarea name="descr" rows="10" cols="50" ><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['descr'];?>
</textarea>
        </div>
        <input type="hidden" required="required" id="ID" name="ID" value=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value["ID"];?>
>
    </div>

</div>
<div class="flex-bas">
    <button type="submit" class="button" value="Valider">Valider</button>
     </form>
    <form action="../assets/phpScripts/deleteEntreprise.php" method="get">
        <button type="submit" class="Reinitialiser">Supprimer</button> 
    
</div>
</form><?php }
}
