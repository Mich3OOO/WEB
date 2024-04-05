
<h2 class="FormeH" id="testtest">Ma Wishlist</h2>


<div class="liste-deroulante2">


{foreach $Data as $ln}
<div class="compte" >
    <div class="droit-compte">
        <div class="haut-compte">
            <label class="NomPoste">{$ln["Poste"]}</label>
        </div>
        <div class="bas-compte">
            <div class="gauche">
                <a class="Info" href={"`$ln["Site"]`"}>{$ln["NomE"]}</a>
                <p class="mail">{$ln["adresseA"]},{$ln["ville"]}</p>
            </div>
            <div class="droite">
            </div>
        </div>
        <div class="plusText" >
            <p class="mail">Compétences :{$ln["Competence"]} </p>
            <p class="mail">Promotions concernées : {$ln["Nom_du_Type"]} </p>
            <p class="mail">Rémunération : {$ln["remune"]} </p>
        </div>
    </div>
</div>
{/foreach}


    
</div>

<h2 id ='Pages'>
    {if $p-1>=0}
        <a href = {"./?Page=`$p-1`"}><</a> 
    {/if}
    
    {$p}/{$MaxP} 
    {if $p+1<=$MaxP}
        <a href = {"./?Page=`$p+1`"}>></a>
    {/if}
</h2>