<?php
/* Smarty version 4.5.1, created on 2024-04-01 21:23:23
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\Authentification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b09abbaee37_74027828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052ae690589b9909c97a0bcf3330b3e145250558' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\Authentification.html',
      1 => 1711883608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b09abbaee37_74027828 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input type="email" required="required" id="Email" name="Email" placeholder="Email">
                <label for="Mot-de-passe">Mot de passe</label>
                <input type="password" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
                <a href="" > Mot de passe oublié ?</a>
                <button type="submit" class="Connexion">Connexion</button> 
            </div>
        </form>
    </section>
    
    

  </body>
  
</html>
<?php }
}
