<?php
/* Smarty version 4.5.1, created on 2024-04-03 15:49:38
  from 'C:\Users\Utilisateur\Desktop\CPI A2\Cours\WEB\Projet\WEB\assets\tpl\modifier_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d5e72a64867_18304645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873bf6e168e809efdc0b3c78fdba65a7039a3a1e' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\Desktop\\CPI A2\\Cours\\WEB\\Projet\\WEB\\assets\\tpl\\modifier_compte.tpl',
      1 => 1712152174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d5e72a64867_18304645 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['role']->value['role'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['usermodif']->value["role"];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 == $_prefixVariable2)) {?>
                <option selected><?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</option>
            <?php }?>
               
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
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['promo']->value['promotion'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['usermodif']->value["promotion"];
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable3 == $_prefixVariable4)) {?>
            <option selected><?php echo $_smarty_tpl->tpl_vars['promo']->value['promotion'];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['promo']->value['promotion'];?>
</option>
            <?php }?>
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
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['campus']->value['ville'];
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['usermodif']->value["ville"];
$_prefixVariable6 = ob_get_clean();
if (($_prefixVariable5 == $_prefixVariable6)) {?>
            <option selected><?php echo $_smarty_tpl->tpl_vars['campus']->value['ville'];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['campus']->value['ville'];?>
</option>
            <?php }?>
           
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
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['CP']->value['Code_Post'];
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['usermodif']->value["CP"];
$_prefixVariable8 = ob_get_clean();
if (($_prefixVariable7 == $_prefixVariable8)) {?>
            <option selected><?php echo $_smarty_tpl->tpl_vars['CP']->value['Code_Post'];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['CP']->value['Code_Post'];?>
</option>
            <?php }?>
            
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
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['Ville']->value['ville'];
$_prefixVariable9 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['usermodif']->value["Ville"];
$_prefixVariable10 = ob_get_clean();
if (($_prefixVariable9 == $_prefixVariable10)) {?>
            <option selected><?php echo $_smarty_tpl->tpl_vars['Ville']->value['ville'];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['Ville']->value['ville'];?>
</option>
            <?php }?>
        
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
            
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['region']->value['reg'];
$_prefixVariable11 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['usermodif']->value["Region"];
$_prefixVariable12 = ob_get_clean();
if (($_prefixVariable11 == $_prefixVariable12)) {?>
            <option selected><?php echo $_smarty_tpl->tpl_vars['region']->value['reg'];?>
</option>
            
            <?php } else { ?>
                <option ><?php echo $_smarty_tpl->tpl_vars['region']->value['reg'];?>
</option>
            <?php }?>
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
    <button type="submit" class="Reinitialiser">Supprimer</button> 
   
    

</div>
</form>

<?php }
}
