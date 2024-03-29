<?php
/* Smarty version 4.5.1, created on 2024-03-29 10:50:32
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\postuler.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66068ee8168cf8_40404920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf9f7596953a6d6e90b532db0c75140c7b233a09' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\postuler.html',
      1 => 1711628116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66068ee8168cf8_40404920 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        
        <link rel="stylesheet" href="../assets/css/Postuler.css">
        <meta charset="utf-8" >
        <title>Postuler</title>
    </head>
    <body>
        <h5>Postuler</h5>
        <article id="RappelOffre">
            Rappel de l'offre
        </article>
        <p id="msg">Entrer ici un message : </p>
        <div class="flex-mere">
            <textarea rows="8" cols="50" class="flex-child" id="TextMail"></textarea>
            <div class="flex-child">
                <div class="CVLM">
                    <label for="myCV">Déposer un CV :</label><br>
                    <input type="file" id="CV" name="myCV">
                </div>
                <br><br>
                <div class="CVLM">
                    <label for="myLM">Déposer une lettre de motivation :</label><br>
                    <input type="file" id="LM" name="myLM">
                </div>
            </div>
        </div>
        <center><button type="button" id="Post">Je postule</button></center>


    </body>
</html>
<?php }
}
