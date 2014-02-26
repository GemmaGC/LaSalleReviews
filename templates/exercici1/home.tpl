
<!-- Això és un comentari HTML -->
{* Això és un comentari en Smarty *}
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Benvingut a l'exercici 1</title>

        <link rel="stylesheet" type="text/css" href="{$url.global}/css/stylemicos.css" />

    </head>

    <body>

    <div class="main_header">
        <header>
            <div class="site-logo">EXERCICI 1</div>
        </header>
    </div>

    <div id="wrapper">


        <div id = "success">
            <p>BENVINGUT A L'EXERCICI 1!</p>
        </div>

        <br/>
        <p id = "info">En aquesta pàgina podràs veure imatges dels 10 micos més macos del món mundial. T'ho perdràs? No perdis ni un segon!</p>

        <nav>
            <ul>
                <li><a href="{$url.global}/micos/1">Començar presentació</a></li>
            </ul>
        </nav>


        <div class="clear"></div>

{$modules.footer}