<?php /* Smarty version 2.6.14, created on 2014-02-26 12:30:06
         compiled from exercici1/home.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>


    <div id = "success">
        <p>BENVINGUT A L'EXERCICI 1!</p>
    </div>

    <br/>
    <p id = "info">Selecciona el tipus de monos que vols visualitzar:</p>

    <nav>
        <ul>
            <li><a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micosPetits">MONOS PETITS</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/micosGrans/imatge1">MONOS GRANS</a></li>
        </ul>
    </nav>


    <div class="clear"></div>

<?php echo $this->_tpl_vars['modules']['footer']; ?>