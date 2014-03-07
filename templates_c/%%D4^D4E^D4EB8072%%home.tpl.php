<?php /* Smarty version 2.6.14, created on 2014-03-07 10:42:13
         compiled from exercici2/home.tpl */ ?>

<?php echo $this->_tpl_vars['modules']['head']; ?>


<!--$header = EXERCICI 2-->
        <div id = "success">
            <p>HOME EXERCICI 2</p>
        </div>


        <ul>
            <li><a class="menu" href=<?php echo $this->_tpl_vars['afegir']; ?>
>Afegeix Foto a la BBDD</a></li>
            <li><a class="menu" href=<?php echo $this->_tpl_vars['mostrar']; ?>
>Mostrar Fotos de la BBDD</a></li>
        </ul>

        <p id = "info"><?php echo $this->_tpl_vars['exp']; ?>
</p>

        <div class="container_buttons_micos">
            <a class="prev" href=<?php echo $this->_tpl_vars['enr']; ?>
>Enrere</a>
        </div>




        <div class="clear"></div>
    </div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>