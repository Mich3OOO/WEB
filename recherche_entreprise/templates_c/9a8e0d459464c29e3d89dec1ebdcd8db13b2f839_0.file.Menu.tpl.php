<?php
/* Smarty version 4.5.1, created on 2024-03-29 13:28:09
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6606b3d9004bc6_54813068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8e0d459464c29e3d89dec1ebdcd8db13b2f839' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\tpl\\Menu.tpl',
      1 => 1711709663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606b3d9004bc6_54813068 (Smarty_Internal_Template $_smarty_tpl) {
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
