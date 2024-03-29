<?php
/* Smarty version 4.5.1, created on 2024-03-29 10:48:49
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66068e81bdb1c0_04228445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b206934bf888aa660ec06edf36116aec66127bd' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\main.tpl',
      1 => 1711703638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/Menu.tpl' => 1,
    'file:../html/".((string)$_smarty_tpl->tpl_vars[\'name\']->value).".html' => 1,
    'file:../html/Upbutton.html' => 1,
    'file:../html/Footer.html' => 1,
  ),
),false)) {
function content_66068e81bdb1c0_04228445 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
        <meta charset="utf-8" >
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
        <link href="../assets/css/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.css" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 src="../assets/js/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.js"><?php echo '</script'; ?>
>
        
        <link rel="manifest" href="../manifest.json">
        <?php echo '<script'; ?>
 src="../assets/js/sw.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:../html/".((string)$_smarty_tpl->tpl_vars['name']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <?php $_smarty_tpl->_subTemplateRender("file:../html/Upbutton.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:../html/Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>

</html><?php }
}
