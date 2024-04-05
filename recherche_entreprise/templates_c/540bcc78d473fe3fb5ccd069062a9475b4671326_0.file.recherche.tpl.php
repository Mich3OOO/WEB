<?php
/* Smarty version 4.5.1, created on 2024-04-05 09:29:52
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660fa870e104e5_31664485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '540bcc78d473fe3fb5ccd069062a9475b4671326' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\tpl\\recherche.tpl',
      1 => 1712287662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fa870e104e5_31664485 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src =  "../assets/js/recherche.js"><?php echo '</script'; ?>
>
<main>
    <div class = "flexContainer">              
        <ul class="liste" id ="Filtres">

            <li><label for="Filtres">Filtres:</label></li>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FiltresMC']->value, 'filtre');
$_smarty_tpl->tpl_vars['filtre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filtre']->value) {
$_smarty_tpl->tpl_vars['filtre']->do_else = false;
?>
            <li>
                <label for=<?php echo ((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"]);?>
><?php echo $_smarty_tpl->tpl_vars['filtre']->value["nom"];?>
</label>
            </li>
            <li>
                <input id = <?php echo ((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"]);?>
 type="text" list=<?php echo "DL".((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"]);?>
 class="MChoise">
                <datalist id = <?php echo "DL".((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"]);?>
>
                </datalist>
                <div id = <?php echo ((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"])."List";?>
  class="tagcontent">
                </div>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FiltresUC']->value, 'filtre');
$_smarty_tpl->tpl_vars['filtre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filtre']->value) {
$_smarty_tpl->tpl_vars['filtre']->do_else = false;
?>
                <li>
                    <label for=<?php echo ((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"]);?>
><?php echo $_smarty_tpl->tpl_vars['filtre']->value["nom"];?>
</label>
                </li>
                <li>
                    <input type=<?php echo ((string)$_smarty_tpl->tpl_vars['filtre']->value["type"]);?>
 id=<?php echo ((string)$_smarty_tpl->tpl_vars['filtre']->value["ID"]);?>
 class="UChoise">
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            
        </ul>
        <div id = "RechercheOffre">
            <input list="DLsearch" id="KeyWord" class="UChoise" placeholder="🔎︎ search">

            <datalist id = "DLsearch">

            </datalist>

            <div id="Blocs">
                
                
            </div>
        </div>
        
    </div>
    
</main>

<?php }
}
