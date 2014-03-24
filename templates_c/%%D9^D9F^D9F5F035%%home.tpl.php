<?php /* Smarty version 2.6.14, created on 2014-03-24 21:14:18
         compiled from exercici4/home.tpl */ ?>

<?php echo $this->_tpl_vars['modules']['head']; ?>


<!--
Aqui falta llistar totes les fotos de les 3 galeries i posar enllaç d'editar i esborrar en cada una
-->
<!--<h1>BENVINGUT A L'EXERCICI 4!</h1>-->
<div class="scrollbar" id="styleScroll" xmlns="http://www.w3.org/1999/html">

    <h1>MICOS</h1>
    <?php $_from = $this->_tpl_vars['imgMicos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?>
        <div class="block_img">
            <img class="imatgeEditar" src="<?php echo $this->_tpl_vars['id']['url_img']; ?>
" alt="ImatgeX">
            <p class="nom_imatgeEdit"><?php echo $this->_tpl_vars['id']['nom_img']; ?>
</p>
            <form method="post">
                <input type="hidden" name="id_mono" value="<?php echo $this->_tpl_vars['id']['id']; ?>
" />
                <input type="submit" name="editar_mono" value="EDITAR" class="btn  btn--icon  btn--add" />
                <input type="submit" name="esborrar_mono" value="ESBORRAR" class="btn  btn--icon  btn--add" />
            </form>
           <!-- <a class="btn  btn--icon  btn--add" href="../modificarMico" name="editar"><i>+</i><span>EDITAR</span></a>
            <a class="btn  btn--icon  btn--delete" href="../esborrar" name="esborrar"><i>×</i><span>ESBORRAR</span></a>-->

        </div>
    <?php endforeach; endif; unset($_from); ?>

    <br><br><h1>MARMOTES</h1>
    <?php $_from = $this->_tpl_vars['imgMarm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?>
        <div class="block_img">
            <img class="imatgeEditar" src="<?php echo $this->_tpl_vars['id']['url_img']; ?>
" alt="ImatgeX">
            <p class="nom_imatgeEdit"><?php echo $this->_tpl_vars['id']['nom_img']; ?>
</p>
            <form method="post">
                <input type="hidden" name="id_marmorta" value="<?php echo $this->_tpl_vars['id']['id']; ?>
" />
                <input type="submit" name="editar_marmota" value="EDITAR" class="btn  btn--icon  btn--add" />
                <input type="submit" name="esborrar_marmota" value="ESBORRAR" class="btn  btn--icon  btn--add" />
            </form>
           <!--<a class="btn  btn--icon  btn--add" href="../modificarMarmota" name="editar"><i>+</i><span>EDITAR</span></a>
            <a class="btn  btn--icon  btn--delete" href="../esborrar" name="esborrar"><i>×</i><span>ESBORRAR</span></a>-->
                    </div>
    <?php endforeach; endif; unset($_from); ?>

    <br><br><h1>ORNITORRINCS</h1>
    <?php $_from = $this->_tpl_vars['imgOrni']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?>
        <div class="block_img">
            <img class="imatgeEditar" src="<?php echo $this->_tpl_vars['id']['url_img']; ?>
" alt="ImatgeX">
            <p class="nom_imatgeEdit"><?php echo $this->_tpl_vars['id']['nom_img']; ?>
</p>
            <form method="post">
                <input type="hidden" name="id_ornitorrinco" value="<?php echo $this->_tpl_vars['id']['id']; ?>
" />
                <input type="submit" name="editar_ornitorrinco" value="EDITAR" class="btn  btn--icon  btn--add" />
                <input type="submit" name="esborrar_ornitorrinco" value="ESBORRAR" class="btn  btn--icon  btn--add" />
            </form>
           <!-- <a class="btn  btn--icon  btn--add" href="../modificarOrnitorrinc" name="editar"><i>+</i><span>EDITAR</span></a>
            <a class="btn  btn--icon  btn--delete" href="../esborrar" name="esborrar"><i>×</i><span>ESBORRAR</span></a>-->
                    </div>
    <?php endforeach; endif; unset($_from); ?>

        </div>

    </div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>