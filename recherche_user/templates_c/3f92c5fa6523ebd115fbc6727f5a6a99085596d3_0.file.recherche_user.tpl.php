<?php
/* Smarty version 4.5.1, created on 2024-03-31 20:40:27
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\recherche_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6609ae1bac9116_25063669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f92c5fa6523ebd115fbc6727f5a6a99085596d3' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\recherche_user.tpl',
      1 => 1711910424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6609ae1bac9116_25063669 (Smarty_Internal_Template $_smarty_tpl) {
?><input list="Satages" id="search" placeholder="🔎︎ search">
    <div class="filtre-element">
    <div class="filtre">
        <?php if (($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Administrateur")) {?>
        <fieldset>
            <legend>Rôle:</legend>
          
            <div>
              <input type="checkbox" id="etudiant" name="etudiant" checked />
              <label for="etudiant">Etudiant</label>
          
            <div>
              <input type="checkbox" id="Pilote" name="Pilote" />
              <label for="Pilote">Pilote</label>
            </div>
          </fieldset>
        <?php }?>


        <select name="Promotion">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allpromotion']->value, 'promo');
$_smarty_tpl->tpl_vars['promo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo']->value) {
$_smarty_tpl->tpl_vars['promo']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['promo']->value['promotion'];?>
><?php echo $_smarty_tpl->tpl_vars['promo']->value['promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <select name="Campus">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcampus']->value, 'campus');
$_smarty_tpl->tpl_vars['campus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campus']->value) {
$_smarty_tpl->tpl_vars['campus']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['campus']->value['NomC'];?>
><?php echo $_smarty_tpl->tpl_vars['campus']->value['NomC'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
            
    </div>
    <div class="liste-deroulante2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allutilisateur']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <div class="compte">
            <div class="droit-compte">
                <div class="haut-compte">
                        <label class="NomPoste"><?php echo $_smarty_tpl->tpl_vars['user']->value['NomU'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['PrenomU'];?>
</label>
                </div>
                <div class="bas-compte">
                    <div class="gauche">
                        <img  class="image-compte" src="image/persov5.jpg" >
                        <p class="mail"><?php echo $_smarty_tpl->tpl_vars['user']->value['promotion'];?>
</p>
                        <p class="mail"><?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
</p>
                        <p class="mail"><?php echo $_smarty_tpl->tpl_vars['user']->value['NomC'];?>
</p>
                    </div>
                    <div class="droite">
                        <p class="mail"><?php echo $_smarty_tpl->tpl_vars['user']->value['Date_NaisU'];?>
</p>
                        <p class="mail"><?php echo $_smarty_tpl->tpl_vars['user']->value['MailU'];?>
</p>
                        <p class="mail"><?php echo $_smarty_tpl->tpl_vars['user']->value['AdresseA'];?>
</p>
                        <?php if (($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Administrateur")) {?>
                        <a class="Info suppr" href="#">Supprimer</a>
                        <button  class="modif">✎</button>
                        <?php }?>
                        <a class="Info" href="">Plus d'information</a>
                    </div>
                </div>
            </div>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
