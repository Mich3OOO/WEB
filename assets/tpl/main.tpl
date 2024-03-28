<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <title>{$titre}</title>
        <meta charset="utf-8" >
        <meta name="keywords" content="{$keywords}">
        <meta name="description" content="{$description}">
        <link href="../assets/css/{$name}.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/{$name}.js"></script>
        
        <link rel="manifest" href="../manifest.json">
        <script src="../assets/js/sw.js"></script>
    </head>
    <body>
        {include "../html/Menu.html"}
        {include "../html/`$name`.html" }


        {include "../html/Upbutton.html"}
        {include "../html/Footer.html"}
    </body>

</html>