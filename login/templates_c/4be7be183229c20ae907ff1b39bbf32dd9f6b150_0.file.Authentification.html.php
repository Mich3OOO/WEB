<?php
/* Smarty version 4.5.1, created on 2024-04-05 09:33:05
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\html\Authentification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660fa93166b7d7_19491002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be7be183229c20ae907ff1b39bbf32dd9f6b150' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\html\\Authentification.html',
      1 => 1712297702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fa93166b7d7_19491002 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" >
    <link href="../assets/css/login.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width" >
    <link rel="icon" type="image/x-icon" href="http://presquauchaud.ddns.net/image/icon.ico">
    <title>Authentification Presqu'auChaud Mage</title>
  </head>
  
  <body>
    <section>
        <form method="get" action="../assets/phpScripts/Auth.php">
            <div class="login">
                <label for="Email">Email</label>
                <input type="email" required="required" id="Email" name="Email" placeholder="Email">
                <label for="Mot-de-passe">Mot de passe</label>
                <input type="password" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
                <a href="http://presquauchaud.ddns.net/FAQ/" > Mot de passe oublié ?</a>
                <button type="submit" class="Connexion">Connexion</button> 
            </div>
        </form>
    </section>
    
    

  </body>
  
</html>
<?php }
}
