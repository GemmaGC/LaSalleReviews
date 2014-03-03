<?php /* Smarty version 2.6.14, created on 2014-03-03 16:26:05
         compiled from exercici2/home.tpl */ ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>PROJECTES WEB</title>

        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/css/style.css" />

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
        <p id = "info"><?php echo $this->_tpl_vars['exp']; ?>
</p>

        <div class="container_buttons">
            <a class="next" href=<?php echo $this->_tpl_vars['micos']; ?>
>Afegir_Imatge</a>
            <a class="prev" href=<?php echo $this->_tpl_vars['enr']; ?>
>Enrere</a>
        </div>



        <div class="clear"></div>
    </div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>