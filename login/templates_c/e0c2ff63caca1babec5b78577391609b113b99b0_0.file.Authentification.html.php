<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:25:15
  from 'C:\Users\alexa\Desktop\Cours\Activitées\BLOC 4\PROJET\WEB\assets\html\Authentification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b182b034a81_38862281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c2ff63caca1babec5b78577391609b113b99b0' => 
    array (
      0 => 'C:\\Users\\alexa\\Desktop\\Cours\\Activitées\\BLOC 4\\PROJET\\WEB\\assets\\html\\Authentification.html',
      1 => 1712002536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b182b034a81_38862281 (Smarty_Internal_Template $_smarty_tpl) {
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