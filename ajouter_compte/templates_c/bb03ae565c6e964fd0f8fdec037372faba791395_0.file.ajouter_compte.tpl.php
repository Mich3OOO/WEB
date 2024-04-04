<?php
/* Smarty version 4.5.1, created on 2024-04-03 21:19:15
  from 'C:\Users\Utilisateur\Desktop\CPI A2\Cours\WEB\Projet\WEB\assets\tpl\ajouter_compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660dabb3497225_76412098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb03ae565c6e964fd0f8fdec037372faba791395' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\Desktop\\CPI A2\\Cours\\WEB\\Projet\\WEB\\assets\\tpl\\ajouter_compte.tpl',
      1 => 1712148497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660dabb3497225_76412098 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Creer un compte</h1>
<form action="../assets/phpScripts/AjoutCompte.php" method="get">
    <div class="test">
    <div class="flex-container">
    <div class="flex-gauche">
        <img class="image-profil" src="../../image/persov5.jpg" alt="image profil">
        <button type="submit" class="Importation" >Importer une image</button>
        <input class="custom-file-label" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"/>
        
        <label for="Promotion">Promotion</label>
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
        <label for="Typepromo">Type promotion</label>
        <select name="Typepromo" id="Typepromo" required="required">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alltypepromo']->value, 'typepromo');
$_smarty_tpl->tpl_vars['typepromo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['typepromo']->value) {
$_smarty_tpl->tpl_vars['typepromo']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['typepromo']->value['Nom_du_Type'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <label for="Campus">Campus</label>
        <select name="Campus" id="Campus" required="required">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcampus']->value, 'campus');
$_smarty_tpl->tpl_vars['campus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campus']->value) {
$_smarty_tpl->tpl_vars['campus']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['campus']->value['ville'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <label for="Role">Role</label>
        <select name="Role" id="Role" required="required">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRole']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label for="Adresse">Adresse</label>
        <input type="text" required="required" id="Adresse" name="Adresse" placeholder="Adresse" onblur="data(/^[A-Za-z' - 0-9]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        

    </div>
    <div class="flex-droit">
        
        <label for="Nom">Nom</label>
        <input type="text" required="required" id="Nom" name="Nom" placeholder="Nom" onblur="data(/^[A-Z]+[A-Za-z'-]/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Prenom">Prénom</label>
        <input type="text" required="required" id="Prenom" name="Prenom" placeholder="Prenom" onblur="data(/^[A-Z]+[A-Za-z'-]/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Mot-de-passe">Mot de passe</label>
        <input type="text" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
        <label for="Confirmation-MDP">Confirmation mot de passe</label>
        <input type="text" required="required" id="Confirmation-MDP" name="Confirmation-MDP" placeholder="Confirmation mot de passe">
        <label for="Mail">Mail</label>
        <input type="email" required="required" id="Mail" name="Mail" placeholder="Mail" onblur="data(/^[A-Za-z' - 0-9]+@+[A-Za-z' - 0-9]/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Date-naissance">Date de naissance</label>
        <input type="text" required="required" id="Date-naissance" name="Date-naissance" placeholder="Date-naissance">
        <label for="CP">Code Postal</label>
        <input type="text" required="required" id="CP" name="CP" placeholder="CP" onblur="data(/^[A-Za-z' - 0-9]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Ville">Ville</label>
        <input type="text" required="required" id="Ville" name="Ville" placeholder="Ville" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Region">Region</label>
        <input type="text" required="required" id="Region" name="Region" placeholder="Region" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        
    </div>
        
    </div>
    </div>
    <div class="flex-bas">
        <button type="submit" class="button" value="Envoyer">Envoyer</button>
        <button type="reset" class="button" value="Reset">Reset</button>
    </div>

</form>
<?php }
}
