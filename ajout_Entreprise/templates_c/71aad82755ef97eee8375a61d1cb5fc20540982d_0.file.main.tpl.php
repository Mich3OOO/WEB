<?php
/* Smarty version 4.5.1, created on 2024-04-05 09:29:50
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660fa86e586a39_56725996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71aad82755ef97eee8375a61d1cb5fc20540982d' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\tpl\\main.tpl',
      1 => 1712297679,
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
function content_660fa86e586a39_56725996 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="icon" type="image/x-icon" href="http://presquauchaud.ddns.net/image/icon.ico">

    

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

        <!-- PWA -->

        <link rel="manifest" href="../BDD/manifest.json">
        <link rel="apple-touch-icon" href="../image/96x96.png">
        <meta name="apple-mobile-web-app-status-bar" content="white">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="white">

        <!-- PWA -->
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
