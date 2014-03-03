<?php /* Smarty version 2.6.14, created on 2014-03-03 15:57:44
         compiled from exercici1/home.tpl */ ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $this->_tpl_vars['benv']; ?>
</title>

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
               <a class="next" href=<?php echo $this->_tpl_vars['micos']; ?>
>Començar</a>
               <a class="prev" href=<?php echo $this->_tpl_vars['enr']; ?>
>Enrere</a>
            </div>


        <div class="clear"></div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>