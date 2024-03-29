<?php
/* Smarty version 4.5.1, created on 2024-03-28 13:16:23
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\Authentification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66055f97a83af3_94640273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '213a167673a336ba5ac1550f31e26152d6a5d3f0' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\Authentification.html',
      1 => 1711628116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66055f97a83af3_94640273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" >
    <link href="../assets/css/login.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width" >
    <title>Authentification Presqu'auChaud Mage</title>
  </head>
  
  <body>
    <section>
        <form method="get" action="../assets/phpScripts/Auth.php">
            <div class="login">
                <label for="Email">Email</label>
                <input type="text" required="required" id="Email" name="Email" placeholder="Email">
                <label for="Mot-de-passe">Mot de passe</label>
                <input type="text" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
                <a href="" > Mot de passe oublié ?</a>
                <button type="submit" class="Connexion">Connexion</button> 
            </div>
        </form>
    </section>
    
    

  </body>
  
</html>
<?php }
}
