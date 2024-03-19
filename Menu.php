<link rel="stylesheet" href="assets/css/menu.css">
<link href="dist/hamburgers.css" rel="stylesheet">
<script src="assets/js/more_menu.js"></script>
<header>
    <nav>
        <div id="flex">
            <div id="block2">
                <div class="Barre">
                  <img class="NavImage" src="image/logo.png" href="...">
                  <ul>
                    <li><a href="#">Stage</a></li>&nbsp;&nbsp;
                    <li><a href="#">Entreprise</a></li>&nbsp;&nbsp;
                    <li><a href="#">Mentions</a></li>&nbsp;&nbsp;
                    <li><a href="#">F.A.Q</a></li>&nbsp;&nbsp;
                  </ul>
                </div>
            </div>
            <div id="block1">
                <h>Nom | Prénom</h>
                <div class="navbar" id="nav">
                    <div class="more">
                        <button class="btn_more" onclick="btn_plus()">▽</button>
                        <div class="more-menu">
                          <?php
                            
                            if($_SESSION[session_id()]["role"] == "Administrateur" )
                            {
                                echo "<script> btn_plus('admin')</script>";
                            }
                            if($_SESSION[session_id()]["role"] == "pilote")
                            {
                                
                                echo "<script> btn_plus('pilote')</script>";
                            }
                            if($_SESSION[session_id()]["role"] == "etudiant")
                            {
                                echo "<script> btn_plus('etudiant')</script>";  
                            }
                            
                          ?>
                        </div>
                    </div>
                </div>
            </div>                          
        </div>
    </nav>
</header>
