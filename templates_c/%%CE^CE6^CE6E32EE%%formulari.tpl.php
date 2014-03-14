<?php /* Smarty version 2.6.14, created on 2014-03-10 16:47:02
         compiled from exercici3/formulari.tpl */ ?>



    <form name="insert-form" class="insert-form" action="" method="post">

        <div class="header_afegeix">
            <h1 class="bbdd">AFEGIR <?php echo $this->_tpl_vars['animal']; ?>
 A LA BASE DE DADES</h1>
            <span>Introdueix el nom i l'URL de la imatge.</span>
        </div>

        <div class="content_afegeix">
            <input name="imgName" type="text" class="input imgName" placeholder="Nom de la imatge.." required/>
            <input name="imgURL" type="text" class="input imgURL" placeholder="URL de la imatge.." required/>
        </div>

        <div class="footer-form">
            <input type="submit" name="submit_<?php echo $this->_tpl_vars['animal']; ?>
" value="Enviar" class="button" />

        </div>

    </form>