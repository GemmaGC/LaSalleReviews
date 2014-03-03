<?php /* Smarty version 2.6.14, created on 2014-03-03 16:40:24
         compiled from exercici2/afegeix.tpl */ ?>
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
            <p>HOLA QUE TAL ndskbvakrdbfhjasbv dkacbf vd</p>
        </div>

        <form>
            <fieldset class="fieldset">
                <div>
                    <label>Nom Imatge</label>
                    <input type="text" name="name" required>
                </div>

                <div>
                    <label>Direcció Web Imatge</label>
                    <input type="url" name="url" placeholder="http://yourweb.dom" required>
                </div>


                <button type="submit">Enviar</button>

            </fieldset>

        </form>

        <div class="clear"></div>
    </div>

    <?php echo $this->_tpl_vars['modules']['footer']; ?>