<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:50:26
  from 'C:\Users\alexa\Desktop\Cours\Activitées\BLOC 4\PROJET\WEB\assets\tpl\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b1e122c02d9_60520084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be120ca404b533d9c4cb7dd968c376bc13c5023c' => 
    array (
      0 => 'C:\\Users\\alexa\\Desktop\\Cours\\Activitées\\BLOC 4\\PROJET\\WEB\\assets\\tpl\\Menu.tpl',
      1 => 1712004032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b1e122c02d9_60520084 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Nom"];?>
 | <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["Prenom"];?>
</h>
                <div class="navbar" id="nav">
                    <div class="more">
                        
                        <button class="btn_more" onclick=<?php if (($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Administrateur")) {?>
                        "btn_plus('admin')"
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Pilote")) {?>
                        "btn_plus('pilote')"
                    
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['_SESSION']->value["role"] == "Etudiant")) {?>
                        "btn_plus('etudiant')"
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