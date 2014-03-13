<?php /* Smarty version 2.6.14, created on 2014-03-13 11:25:24
         compiled from exercici3/formulari_ornitorrinco.tpl */ ?>



    <form name="insert-form" class="insert-form" action="" method="post">

        <div class="header_afegeix">
            <h1 class="bbdd">AFEGIR ORNITORRINC A LA BASE DE DADES</h1>
            <span>Introdueix el nom i l'URL de la imatge.</span>
        </div>

        <div class="content_afegeix">
            <input name="imgName" type="text" class="input imgName" placeholder="Nom de la imatge.." required/>
            <input name="imgURL" type="text" class="input imgURL" placeholder="URL de la imatge.." required/>
        </div>

        <div class="footer-form">
            <input type="submit" name="submit_ornitorrinco" value="Enviar" class="button" />

        </div>

    </form>