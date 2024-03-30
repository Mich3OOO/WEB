<?php
/* Smarty version 4.5.1, created on 2024-03-30 22:44:57
  from 'C:\Users\User\Desktop\CESI\A2\B4\porjet\WEB\assets\html\postuler.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660887d99eca67_60630706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ddaabc76025993aa71545322e085ca3bb1a33e' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\CESI\\A2\\B4\\porjet\\WEB\\assets\\html\\postuler.html',
      1 => 1711703505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660887d99eca67_60630706 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
