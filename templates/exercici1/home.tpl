
<!-- Això és un comentari HTML -->
{* Això és un comentari en Smarty *}
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Benvingut a l'exercici 1</title>

        <link rel="stylesheet" type="text/css" href="{$url.global}/css/style.css" />

    </head>

    <body>

    <div class="main_header">
        <header>
            <div class="site-logo">{$titol}</div>
        </header>
    </div>

    <div id="wrapper">


        <div id = "success">
            <p>{$benv}</p>
        </div>

        <br/>
        <p id = "info">{$exp}</p>

            <div class="container_buttons">
               <a class="next" href="{$url.global}/micos/1">Començar</a>
               <a class="prev" href="{$url.global}/home">Enrere</a>
            </div>


        <div class="clear"></div>

{$modules.footer}