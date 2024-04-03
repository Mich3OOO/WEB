<?php
/* Smarty version 4.5.1, created on 2024-04-03 15:43:20
  from 'C:\Users\Utilisateur\Desktop\CPI A2\Cours\WEB\Projet\WEB\assets\html\Authentification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d5cf8240ad2_75164023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07fbbbb393709a20a8daf90cb3deccabec22250b' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\Desktop\\CPI A2\\Cours\\WEB\\Projet\\WEB\\assets\\html\\Authentification.html',
      1 => 1711906505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d5cf8240ad2_75164023 (Smarty_Internal_Template $_smarty_tpl) {
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
