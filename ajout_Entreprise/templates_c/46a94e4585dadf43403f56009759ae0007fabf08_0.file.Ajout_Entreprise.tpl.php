<?php
/* Smarty version 4.5.1, created on 2024-04-04 23:34:59
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\tpl\Ajout_Entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660f1d03134eb9_33516208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a94e4585dadf43403f56009759ae0007fabf08' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\tpl\\Ajout_Entreprise.tpl',
      1 => 1712264715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f1d03134eb9_33516208 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="../assets/phpScripts/SQL/AjoutEntreprise.php" method="get post">
    <div class="flex-container">
        <div class="flex-gauche">
            <label for="Nom">Nom  Entreprise :</label>
            <input type="text" required="required" id="Nom" name="Nom" placeholder="Nom de l'entreprise" onblur="data(/^[A-Z]+[A-Za-z'-]/,0,value,id,'Ce champs ne doit que contenir des lettres et commence par une majuscule')">
            <label for="Adresse">Adresse :</label>
            <input type="text" required="required" id="Adresse" name="Adresse" placeholder="Adresse de l'entreprise" onblur="data(/^[A-Za-z' - 0-9]+$/,0,value,id,'Mauvaise Adresse ?')">
            <label for="CP">Code Postal :</label>
            <input type="text" required="required" id="CP" name="CP" placeholder="Code Postal de l'entreprise" onblur="data(/^[A-Za-z' - 0-9]+$/,5,value,id,'Ce champs ne doit que contenir des lettres')">
            <label for="Ville">Ville :</label>
            <input type="text" required="required" id="Ville" name="Ville" placeholder="Ville de l'entreprise" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Code Postal mal renseigné')">
            <label for="Region">Région :</label>
            <input type="text" required="required" id="Region" name="Region" placeholder="Region de l'entreprise" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
            <div class="Description">
                <label>Description :</label>
                <br>
                <textarea name="Description" rows="10" cols="50"></textarea>
            </div>

        </div>
        <div class="flex-droit">
            <label for="Site_Internet">Site internet de l'entreprise :</label>
            <input type="text" required="required" id="Site_Internet" name="Site_Internet" placeholder="Nom de l'entreprise" onblur="data(/www.+[a-z0-9_\-\.]+[a-z0-9_\-\.]+\.[a-z]+/i,0,value,id,'Email mal renseigné ')">
            <label for="Mail">Mail</label>
            <input type="email" required="required" id="Mail" name="Mail" placeholder="Mail" onblur="data(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i,0,value,id,'Email mal renseigné ')">
            <label for="Num_Tel">Numéro de Téléphone :</label>
            <input type="text" required="required" id="Num_Tel" name="Num_Tel" placeholder="Nom de l'entreprise" onblur="data(/^[0-9]+$/,10,value,id,' Numéro de Téléphone mal renseigné')">
            <label for="Siret">Siret :</label>
            <input type="text" required="required" id="Siret" name="Siret" placeholder="Siret de l'entreprise" onblur="data(/^[0-9]+$/,15,value,id,' Numéro de SIRET mal renseigné')">

            <label for="Secteur_Act">Secteur d'activité :</label>
            <select name="Secteur_Act" id="Secteur_Act" required="required">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alltypesect']->value, 'typesect');
$_smarty_tpl->tpl_vars['typesect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['typesect']->value) {
$_smarty_tpl->tpl_vars['typesect']->do_else = false;
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['typesect']->value['Secteur_Act'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
           
        </div>

    </div>
    <div class="flex-bas">
        <button type="submit" class="button" value="Valider">Valider</button> 
        <button type="submit" class="button" value="Annuler">Annuler</button> 
    </div>
</form>
<?php }
}
