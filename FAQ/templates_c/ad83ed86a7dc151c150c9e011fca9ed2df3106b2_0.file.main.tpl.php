<?php
/* Smarty version 4.5.1, created on 2024-03-27 00:40:46
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66035cfe053223_89903114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad83ed86a7dc151c150c9e011fca9ed2df3106b2' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\tpl\\main.tpl',
      1 => 1711496100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/Menu.html' => 1,
    'file:../html/Upbutton.html' => 1,
    'file:../html/Footer.html' => 1,
  ),
),false)) {
function content_66035cfe053223_89903114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../html/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("../html/".((string)$_smarty_tpl->tpl_vars['PHTML']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:../html/Upbutton.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:../html/Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
