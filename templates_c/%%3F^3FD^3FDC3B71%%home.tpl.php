<?php /* Smarty version 2.6.14, created on 2014-02-26 19:22:28
         compiled from exercici1/home.tpl */ ?>

<!-- Això és un comentari HTML -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Benvingut a l'exercici 1</title>

        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/css/stylemicos.css" />

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
                <li><a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/1">Començar presentació</a></li>
            </ul>
        </nav>


        <div class="clear"></div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>