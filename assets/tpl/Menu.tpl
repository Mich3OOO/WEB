<link rel="stylesheet" href="../assets/css/menu.css">
<script src="../assets/js/more_menu.js"></script>
<header>
    <nav>
        <div id="flex">
            <div id="block2">
                <div class="Barre">
                  <img class="NavImage" src="../image/logo.png" href="...">
                  <ul>
                    <li><a href="../recherche/">Stage</a></li>
                    <li><a href="../recherche_entreprise/">Entreprise</a></li>
                    <li><a href="../Mentions_legales/">Mentions</a></li>
                    <li><a href="../FAQ/">F.A.Q</a></li>
                  </ul>
                </div>
            </div>
            <div id="block1">
                <h>$_SESSION["Nom"] | $_SESSION["Prenom"]</h>
                <div class="navbar" id="nav">
                    <div class="more">
                        
                        <button class="btn_more" onclick={if $_SESSION["role"] == "Administrateur" }
                        btn_plus('admin');
                    {/if}
                    {if $_SESSION["role"] == "Pilote" }
                        btn_plus('pilote');
                    
                    {/if}
                    {if $_SESSION["role"] == "Etudiant" }
                        btn_plus('etudiant');  
                    {/if}>  ▽</button>
                        
                            
                        <div class="more-menu">
                          
                        </div>
                    </div>
                </div>
            </div>                          
        </div>
    </nav>
</header>

