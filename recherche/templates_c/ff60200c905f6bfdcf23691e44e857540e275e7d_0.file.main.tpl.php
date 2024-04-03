<?php
/* Smarty version 4.5.1, created on 2024-04-03 15:43:25
  from 'C:\Users\Utilisateur\Desktop\CPI A2\Cours\WEB\Projet\WEB\assets\tpl\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d5cfdd1e046_59426143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff60200c905f6bfdcf23691e44e857540e275e7d' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\Desktop\\CPI A2\\Cours\\WEB\\Projet\\WEB\\assets\\tpl\\main.tpl',
      1 => 1712148497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/Menu.tpl' => 1,
    'file:../html/Footer.html' => 1,
    'file:../html/Upbutton.html' => 1,
  ),
),false)) {
function content_660d5cfdd1e046_59426143 (Smarty_Internal_Template $_smarty_tpl) {
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

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <link href="<?php echo $_smarty_tpl->tpl_vars['dircss']->value;?>
" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 async src="<?php echo $_smarty_tpl->tpl_vars['dirjs']->value;?>
"><?php echo '</script'; ?>
>
        
        <link rel="manifest" href="../manifest.json">
        <?php echo '<script'; ?>
 src="../assets/js/sw.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['dirfile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:../html/Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:../html/Upbutton.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
    </body>

</html><?php }
}
