<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:45:04
  from 'C:\Users\alexa\Desktop\Cours\Activitées\BLOC 4\PROJET\WEB\assets\html\Connexion.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b1cd0623607_17674058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c66f15ab583aa512f73501e1b5603f8e36e11ac4' => 
    array (
      0 => 'C:\\Users\\alexa\\Desktop\\Cours\\Activitées\\BLOC 4\\PROJET\\WEB\\assets\\html\\Connexion.html',
      1 => 1712004032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b1cd0623607_17674058 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
    <div class = "flexContainer">              
        <ul class="liste" id ="Filtres">
            <li><label for="Filtres">Filtres:</label></li>
            <li>
                <label for="Ville">Ville</label>
            </li>
            <li>
                <input id = "Ville" type="text" list="DLVille" class="MChoise">
                <datalist id = "DLVille">
                </datalist>
                <div id = "VilleList" class="tagcontent">
                </div>
            </li>
            <li>
                <label for="Département">Département</label>
            </li>
            <li>
                <input id = "Département" list="DLDépartement" class="MChoise">
                <datalist id = "DLDépartement">
                    
                </datalist>
                <div id = "DépartementList" class="tagcontent">
                </div>
            </li>
            <li>
                <label for="SécteurA">Sécteur d'activité</label>
            </li>
            <li>
                <input id = "SécteurA" list="DLSécteurA" class="MChoise">
                <datalist id = "DLSécteurA">
                    
                </datalist>
                <div id = "SécteurAList" class="tagcontent">
                </div>
            </li>
            <li>
                <label for="Prom">Promotion visé</label>
            </li>
            <li>
                <input id = "Prom" list="DLProm" class="MChoise">
                <datalist id = "DLProm">
                    
                </datalist>
                <div id = "PromList" class="tagcontent">
                </div>
            </li>

            <li>
                <label for="Date_début">Offres à partir du :</label>
            </li>
            <li>
                <input type="date" id="Date_début">
            </li>

            <li>
                <label for="durée">durée (en mois)</label>
            </li>
            <li>
                <input type = "number" id="durée">
            </li>
            
        </ul>
        <div id = "RechercheOffre">
            <input list="DLsearch" id="search" placeholder="🔎︎ search">

            <datalist id = "DLsearch">

            </datalist>

            <div id="offres">
                
                
            </div>
        </div>
        
    </div>
    
</main>

<?php }
}