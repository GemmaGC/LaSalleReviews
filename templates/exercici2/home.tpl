<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>PROJECTES WEB</title>

        <link rel="stylesheet" type="text/css" href={$css} />

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


        <ul>
            <li><a class="menu" href={$afegir}>Afegeix Foto a la BBDD</a></li>
            <li><a class="menu" href={$mostrar}>Mostrar Fotos de la BBDD</a></li>
        </ul>

        <p id = "info">{$exp}</p>

        <div class="container_buttons">
            <a class="prev" href={$enr}>Enrere</a>
        </div>




        <div class="clear"></div>
    </div>
{$modules.footer}