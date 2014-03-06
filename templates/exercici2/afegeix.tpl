<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>PROJECTES WEB</title>

    <link rel="stylesheet" type="text/css" href="/css/stylebbdd.css" />

</head>

<body>

    <div class="main_header">
        <header>
            <div class="site-logo">EXERCICI 2</div>
        </header>
    </div>

    <div id="wrapper">

        <form name="insert-form" class="insert-form" action="" method="post">

            <div class="header">
                <h1>AFEGIR IMATGE A LA BASE DE DADES</h1>
                <span>Introdueix el nom i l'URL de la imatge.</span>
            </div>

            <div class="content">
                <input name="imgName" type="text" class="input imgName" placeholder="Nom de la imatge.." />
                <input name="imgURL" type="text" class="input imgURL" placeholder="URL de la imatge.." />
            </div>

            <div class="footer-form">
                <input type="submit" name="submit" value="Enviar" class="button" />

            </div>

        </form>

    </div>

    <div class="gradient"></div>
{$modules.footer}