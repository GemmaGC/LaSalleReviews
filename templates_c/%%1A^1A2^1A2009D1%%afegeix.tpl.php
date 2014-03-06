<?php /* Smarty version 2.6.14, created on 2014-03-06 17:13:35
         compiled from exercici2/afegeix.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>


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
<?php echo $this->_tpl_vars['modules']['footer']; ?>