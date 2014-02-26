<?php /* Smarty version 2.6.14, created on 2014-02-26 23:40:55
         compiled from exercici1/home.tpl */ ?>

<!-- Això és un comentari HTML -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Benvingut a l'exercici 1</title>

        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/css/style.css" />

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

            <div class="container_buttons">
               <a class="next" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/1">Començar</a>
               <a class="prev" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/home">Enrere</a>
            </div>


        <div class="clear"></div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>