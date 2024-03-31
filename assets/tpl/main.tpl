<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <title>{$titre}</title>
        <meta charset="utf-8" >
        <meta name="keywords" content="{$keywords}">
        <meta name="description" content="{$description}">

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <link href="{$dircss}" rel="stylesheet" type="text/css" />
        <script src="{$dirjs}"></script>
        
        <link rel="manifest" href="../manifest.json">
        <script src="../assets/js/sw.js"></script>
    </head>
    <body>
        {include "../tpl/Menu.tpl"}
        {include "`$dirfile`" }

        {include "../html/Footer.html"}
        {include "../html/Upbutton.html"}
        
    </body>

</html>