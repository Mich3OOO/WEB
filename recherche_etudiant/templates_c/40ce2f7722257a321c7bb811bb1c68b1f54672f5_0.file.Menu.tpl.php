<?php
/* Smarty version 4.5.1, created on 2024-03-29 10:51:07
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66068f0bd5ff53_51728605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ce2f7722257a321c7bb811bb1c68b1f54672f5' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\Menu.tpl',
      1 => 1711704372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66068f0bd5ff53_51728605 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../assets/css/menu.css">
<?php echo '<script'; ?>
 src="../assets/js/more_menu.js"><?php echo '</script'; ?>
>
<header>
    <nav>
        <div id="flex">
            <div id="block2">
                <div class="Barre">
                  <img class="NavImage" src="../image/logo.png" href="...">
                  <ul>
                    <li><a href="../recherche/">Stage</a></li>
                    <li><a href="../recherche_entreprise/">Entreprise</a></li>
                    <li><a href="../Mentions_legales/">Mentions</a></li>
                    <li><a href="../FAQ/">F.A.Q</a></li>
                  </ul>
                </div>
            </div>
            <div id="block1">
                <h>Nom | Prénom</h>
                <div class="navbar" id="nav">
                    <div class="more">
                        
                        <button class="btn_more" onclick=<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Administrateur") {?>
                        btn_plus('admin');
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Pilote") {?>
                        btn_plus('pilote');
                    
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Etudiant") {?>
                        btn_plus('etudiant');  
                    <?php }?>>  ▽</button>
                        
                            
                        
                            
                            
                          
                        <div class="more-menu">
                          
                        </div>
                    </div>
                </div>
            </div>                          
        </div>
    </nav>
</header>

<?php }
}
