<?php
/* Smarty version 4.5.1, created on 2024-04-03 10:26:04
  from 'C:\Users\Utilisateur\Desktop\CPI A2\Cours\WEB\Projet\WEB\assets\html\Connexion.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d129c0a8e19_19156128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58ea47ca653904cc92f75bdc27b5aa683ce19616' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\Desktop\\CPI A2\\Cours\\WEB\\Projet\\WEB\\assets\\html\\Connexion.html',
      1 => 1711971532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d129c0a8e19_19156128 (Smarty_Internal_Template $_smarty_tpl) {
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
