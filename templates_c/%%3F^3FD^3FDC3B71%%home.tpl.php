<?php /* Smarty version 2.6.14, created on 2014-02-28 10:08:33
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
            <div class="site-logo"><?php echo $this->_tpl_vars['titol']; ?>
</div>
        </header>
    </div>

    <div id="wrapper">


        <div id = "success">
            <p><?php echo $this->_tpl_vars['benv']; ?>
</p>
        </div>

        <br/>
        <p id = "info"><?php echo $this->_tpl_vars['exp']; ?>
</p>

            <div class="container_buttons">
               <a class="next" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micos/1">Començar</a>
               <a class="prev" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/home">Enrere</a>
            </div>


        <div class="clear"></div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>