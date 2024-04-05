<script src =  "../assets/js/recherche.js"></script>
<main>
    <div class = "flexContainer">              
        <ul class="liste" id ="Filtres">

            <li><label for="Filtres">Filtres:</label></li>

            {foreach from=$FiltresMC item=filtre}
            <li>
                <label for={"`$filtre["ID"]`"}>{$filtre["nom"]}</label>
            </li>
            <li>
                <input id = {"`$filtre["ID"]`"} type="text" list={"DL`$filtre["ID"]`"} class="MChoise">
                <datalist id = {"DL`$filtre["ID"]`"}>
                </datalist>
                <div id = {"`$filtre["ID"]`List"}  class="tagcontent">
                </div>
            </li>
            {/foreach}

            {foreach from=$FiltresUC item=filtre}
                <li>
                    <label for={"`$filtre["ID"]`"}>{$filtre["nom"]}</label>
                </li>
                <li>
                    <input type={"`$filtre["type"]`"} id={"`$filtre["ID"]`"} class="UChoise">
                </li>
            {/foreach}


            
        </ul>
        <div id = "RechercheOffre">
            <input list="DLsearch" id="KeyWord" class="UChoise" placeholder="🔎︎ search">

            <datalist id = "DLsearch">

            </datalist>

            <div id="Blocs">
                
                
            </div>
        </div>
        
    </div>
    
</main>

