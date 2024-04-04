<input list="Satages" id="search" placeholder="🔎︎ search">

<div class="flex-container">
    <div class="filtre">
        {if ($_SESSION["role"] == "Administrateur")}
        <fieldset>
            <legend>Rôle:</legend>
          
            <div>
              <input type="checkbox" id="etudiant" name="etudiant" checked />
              <label for="etudiant">Etudiant</label>
          
            <div>
              <input type="checkbox" id="Pilote" name="Pilote" />
              <label for="Pilote">Pilote</label>
            </div>
          </fieldset>
        {/if}


        <select name="Promotion">
            {foreach from=$allpromotion item=promo}
            <option value={$promo.promotion}>{$promo.promotion}</option>
            {/foreach}
        </select>

        <select name="Campus">
            {foreach from=$allcampus item=campus}
                <option value={$campus.ville}>{$campus.ville}</option>
            {/foreach}
        </select>
            
    </div>
    <div class="liste-deroulante2">
    {foreach from=$allutilisateur item=user}
        <div class="compte">
            <div class="droit-compte">
                <div class="haut-compte">
                        <label class="NomPoste">{$user.NomU} {$user.PrenomU}</label>
                </div>
                <div class="bas-compte">
                    <div class="gauche">
                        <img  class="image-compte" src="image/persov5.jpg" >
                        <p class="mail">{$user.promotion}</p>
                        <p class="mail">{$user.role}</p>
                        <p class="mail">{if ({$user.idv}=={$allcampus.idv})}{$allcampus.ville}{/if}</p>
                    </div>
                    <div class="droite">
                        <p class="mail">{$user.Date_NaisU}</p>
                        <p class="mail">{$user.MailU}</p>
                        <p class="mail">{$user.AdresseA}</p>
                        {if ($_SESSION["role"] == "Administrateur")}
                        <form action='../assets/phpScripts/deleteUser.php?IDu={$user.IDu}' method="get">
                            <input type="text" required="required" id="IDu" name="IDu" value="{$user["IDu"]}">
                            <button type="submit">Supprimer</button>
                        </form>
                            <button class="modif" onclick="window.location.href='../modifier_compte/index.php?email={$user.MailU}'">✎</button>
                        
                        {/if}
                        <a class="Info" href="">Plus d'information</a>
                    </div>
                </div>
            </div>

        </div>
    {/foreach}
    </div>
</div>