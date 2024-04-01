<?php
/* Smarty version 4.5.1, created on 2024-04-01 22:42:45
  from 'C:\Users\alexa\Desktop\Cours\Activitées\BLOC 4\PROJET\WEB\assets\tpl\recherche_Entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660b1c45401d48_10945671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c4d5d7f86f3e65afad023713fba153d334feaa1' => 
    array (
      0 => 'C:\\Users\\alexa\\Desktop\\Cours\\Activitées\\BLOC 4\\PROJET\\WEB\\assets\\tpl\\recherche_Entreprise.tpl',
      1 => 1712004032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b1c45401d48_10945671 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 class="FormeH">Recherche d'entreprise</h2>
<input list="Satages" id="search" placeholder="🔎︎ search">
<div id="flex-mere">
    <div id="flex-filtres">
        <h4>Filtre : </h4>
        <label for="Ville">Ville</label><br>
        <select name="Ville" id="Ville" class="selection">
            <option value="Ville1">Ville 1</option>
            <option value="Ville2">Ville 2</option>
            <option value="Ville3">Ville 3</option>
        </select><br><br>
        <label for="Dep">Département</label><br>
        <select name="Dep" id="Dep" class="selection">
            <option value="Departement1">Département 1</option>
            <option value="Departement2">Département 2</option>
            <option value="Departement3">Département 3</option>
        </select><br><br>
        <label for="SectAct">Secteur d'activité</label><br>
        <select name="SectAct" id="SectAct" class="selection">
            <option value="SectAct1">Secteur d'activité 1</option>
            <option value="SectAct2">Secteur d'activité 2</option>
            <option value="SectAct3">Secteur d'activité 3</option>
        </select><br><br>
    </div>
    <div id="flex-recherche">
        <div class="liste-deroulante2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allentreprise']->value, 'entreprise');
$_smarty_tpl->tpl_vars['entreprise']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
$_smarty_tpl->tpl_vars['entreprise']->do_else = false;
?>
            <div class="compte">
                <div class="droit-compte">
                    <div class="haut-compte">
                        <div id="entre">
                            <label class="NomEntreprise"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value['NomE'];?>
</label>
                        </div>
                        <div class="stars">
                            <i class="star stargrey fas fa-star" data-index="0"></i>
                            <i class="star stargrey fas fa-star" data-index="1"></i>
                            <i class="star stargrey fas fa-star" data-index="2"></i>
                            <i class="star stargrey fas fa-star" data-index="3"></i>
                            <i class="star stargrey fas fa-star" data-index="4"></i>
                        </div>
                    </div>
                    <div class="bas-compte">
                        <div class="gauche">
                            <p class="mail">Adresse mail: <?php echo $_smarty_tpl->tpl_vars['entreprise']->value['MailE'];?>
</p>
                            <a class="Info More" href="">Site WEB : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value['Site'];?>
</a>
                            <p class="mail">Secteur d'activité : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value['Secteur_Act'];?>
</p>
                        </div>
                        <div class="droite">
                            <p class="mail" >Numéro de téléphone : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value['TelE'];?>
</p>
                            <a class="Info More" href="">Adresse : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value['AdresseA'];?>
</a>
                            <a class="Info More" href="">Plus d'information</a>
                        </div>
                    </div>
                </div>

            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>

    </div>

</div>
<?php }
}
