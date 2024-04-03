<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:28:53
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b19058bcc98_91603952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49db9a9848c121506cb07a43f2b297352640f8d4' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\profil.tpl',
      1 => 1711883608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b19058bcc98_91603952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Profil </h1>
<form>
  <div class="flex-container" >
    <div class="flex-gauche">
      <center><img class="image-profil" src="image/persov5.jpg" alt="image profil"></center>
      
      <label for="Role">Statut : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["role"];?>
</label>
      
      <label for="Promotion">Promotion :</label>

      <label for="Campus">Campus :</label>
    </div>
    <div class="flex-droit">
        
      <label for="Nom">Nom : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Nom"];?>
</label>
      <label for="Prenom">Prenom : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Prenom"];?>
</label>
      <label for="Mail">Mail : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Mail"];?>
</label>
      <label for="Date-naissance">Date de naissance : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Date_Nais"];?>
</label>
      <label for="Adresse">Adresse :<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Adresse"];?>
</label>
        
    </div>
      
  </div>  
</form>

<?php }
}
