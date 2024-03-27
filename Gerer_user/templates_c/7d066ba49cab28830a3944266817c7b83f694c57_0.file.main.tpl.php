<?php
/* Smarty version 4.5.1, created on 2024-03-27 00:35:28
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66035bc0479802_76061946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d066ba49cab28830a3944266817c7b83f694c57' => 
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
function content_66035bc0479802_76061946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../html/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("../html/".((string)$_smarty_tpl->tpl_vars['PHTML']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:../html/Upbutton.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:../html/Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
