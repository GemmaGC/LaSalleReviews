<?php /* Smarty version 2.6.14, created on 2014-03-31 15:50:05
         compiled from exercici4/modificar.tpl */ ?>


<?php echo $this->_tpl_vars['modules']['head']; ?>


    <div class="go_back_container_micos">

        <a class="prev" href="<?php echo $this->_tpl_vars['enrere']; ?>
">Enrere</a>

    </div>
    <form name="edit-form" class="modify_form" action="" method="post">

        <div class="header_modifica">
            <h1 class=""><?php echo $this->_tpl_vars['head']; ?>
</h1>
        </div>

        <div class="content_modify">
            <input name="newImgName" type="text" class="input_modifica imgName" placeholder="<?php echo $this->_tpl_vars['nomImg']; ?>
"/>
            <input name="newImgURL" type="text" class="input_modifica imgURL" placeholder="<?php echo $this->_tpl_vars['urlImg']; ?>
"/>
        </div>

        <div class="footer_form">
            <input type="submit" name="submit_canvis" value="Enviar" class="button_modify" />
        </div>

    </form>


<?php echo $this->_tpl_vars['modules']['footer']; ?>