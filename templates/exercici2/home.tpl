<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>PROJECTES WEB</title>

        <link rel="stylesheet" type="text/css" href="{$url.global}/css/style.css" />

    </head>

    <body>

    <div class="main_header">
        <header>
            <div class="site-logo">EXERCICI 2</div>
        </header>
    </div>

    <div id="wrapper">


        <div id = "success">
            <p>HOME EXERCICI 2</p>
        </div>

        <br/>
        <p id = "info">{$exp}</p>

        <div class="container_buttons">
            <a class="next" href={$micos}>Afegir_Imatge</a>
            <a class="prev" href={$enr}>Enrere</a>
        </div>



        <div class="clear"></div>
    </div>
{$modules.footer}