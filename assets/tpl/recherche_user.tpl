

<div class="flex-container">
<form action = '../recherche_user/' methode= 'GET' onkeydown="return event.key != 'Enter';">
    <div class="filtre">
    <input id="search" placeholder="🔎︎ search">
        
        {if ($_SESSION["role"] == "Administrateur")}
        <fieldset>
            <legend>Rôle:</legend>
          
            <div>
              <input type="checkbox" id="etudiant" name="etudiant" checked />
              <label for="etudiant">Etudiant</label>
          
            <div>
              <input type="checkbox" id="Pilote" name="Pilote" checked/>
              <label for="Pilote">Pilote</label>
            </div>
            <div>
              <input type="checkbox" id="Admin" name="Admin"  checked/>
              <label for="Admin">Administrateur</label>
            </div>
          </fieldset>
        {/if}

        <select name="Promotion">
            <option value=''>Tout</option>
            {foreach from=$allpromotion item=promo}
            <option value={$promo.promotion}>{$promo.promotion}</option>
            {/foreach}

        </select>

        <select name="Campus">
            <option value=''>Tout</option>
            {foreach from=$allcampus item=campus}
                <option value={$campus.ville}>{$campus.ville}</option>
            {/foreach}
        </select>
        <input type = 'submit' value = 'search'>
            
    </div>
</form>
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
                        <button id="sure" onclick="sure()">Supprimer</button>
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