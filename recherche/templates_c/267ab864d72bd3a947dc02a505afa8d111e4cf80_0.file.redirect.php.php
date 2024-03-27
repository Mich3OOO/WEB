<?php
/* Smarty version 4.5.1, created on 2024-03-27 00:13:05
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\phpScripts\redirect.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660356819b9fd2_61931093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267ab864d72bd3a947dc02a505afa8d111e4cf80' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\phpScripts\\redirect.php',
      1 => 1710842080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660356819b9fd2_61931093 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

    session_start();
    if (!isset($_SESSION[session_id()])) {
        header('Location: ./Authentification.php');
    }
<?php echo '?>';
}
}
