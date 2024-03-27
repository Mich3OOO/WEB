<?php
/* Smarty version 4.5.1, created on 2024-03-27 08:28:59
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\tpl\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6603cabb4e8280_53932436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2dd90aa24d012a4dc1b52e50fc4a8b6e5e3ee6' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\tpl\\main.tpl',
      1 => 1711524490,
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
function content_6603cabb4e8280_53932436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../html/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("../html/".((string)$_smarty_tpl->tpl_vars['PHTML']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:../html/Upbutton.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:../html/Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
