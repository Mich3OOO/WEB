<?php
/* Smarty version 4.5.1, created on 2024-03-29 09:48:42
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\html\Menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6606806ad23e14_30434311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02c7ed7962718f78e039395b050aabb8968ee5c' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\html\\Menu.html',
      1 => 1711629373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606806ad23e14_30434311 (Smarty_Internal_Template $_smarty_tpl) {
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
                        
                        <button class="btn_more" onclick="">▽</button><!--<?php echo '<?php'; ?>

                            
                        
                            if($_SESSION[session_id()]["role"] == "Administrateur" )
                            {
                                echo "btn_plus('admin')";
                            }
                            if($_SESSION[session_id()]["role"] == "Pilote")
                            {
                                
                                echo "btn_plus('pilote')";
                            }
                            if($_SESSION[session_id()]["role"] == "Etudiant")
                            {
                                echo "btn_plus('etudiant')";  
                            }
                            
                          <?php echo '?>'; ?>
 -->
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