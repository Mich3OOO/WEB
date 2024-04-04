<?php
/* Smarty version 4.5.1, created on 2024-04-04 15:45:42
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\Connexion.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660eaf06c0d537_16502385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f75e03dff06eb4f71dec01350b9f5b7e00d2f34' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\Connexion.html',
      1 => 1712157681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660eaf06c0d537_16502385 (Smarty_Internal_Template $_smarty_tpl) {
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
                <label for="Département">Région</label>
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
