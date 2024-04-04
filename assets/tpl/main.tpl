<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <title>{$titre}</title>
        <meta charset="utf-8" >
        <meta name="keywords" content="{$keywords}">
        <meta name="description" content="{$description}">

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        <link href="{$dircss}" rel="stylesheet" type="text/css" />
        <script async src="{$dirjs}"></script>
        
        <link rel="manifest" href="../manifest.json">
        <script src="../assets/js/sw.js"></script>

        <!-- PWA -->

        <link rel="manifest" href="../BDD/manifest.json">
        <link rel="apple-touch-icon" href="../image/96x96.png">
        <meta name="apple-mobile-web-app-status-bar" content="white">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="white">

        <!-- PWA -->
    </head>
    <body>
        {include "../tpl/Menu.tpl"}
        {include "`$dirfile`" }

        {include "../html/Footer.html"}
        {include "../html/Upbutton.html"}
        
    </body>

</html>