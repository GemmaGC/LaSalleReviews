<?php /* Smarty version 2.6.14, created on 2014-03-31 15:45:59
         compiled from exercici4/home.tpl */ ?>

<?php echo $this->_tpl_vars['modules']['head']; ?>


<!--
Aqui falta llistar totes les fotos de les 3 galeries i posar enllaç d'editar i esborrar en cada una
-->
<!--<h1>BENVINGUT A L'EXERCICI 4!</h1>-->
<div class="go_back_container_micos">

    <a class="prev" href="<?php echo $this->_tpl_vars['enrere']; ?>
">Enrere</a>

</div>

<div class="scrollbar" id="styleScroll">

    <h1 class="titol">MICOS</h1>
    <?php $_from = $this->_tpl_vars['imgMicos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?>
        <div class="block_img">
            <img class="imatgeEditar" src="<?php echo $this->_tpl_vars['id']['url_img']; ?>
" alt="<?php echo $this->_tpl_vars['id']['nom_img']; ?>
">
            <p class="nom_imatgeEdit"><?php echo $this->_tpl_vars['id']['nom_img']; ?>
</p>
            <form method="post">
                <input type="hidden" name="id" value="monos-<?php echo $this->_tpl_vars['id']['id']; ?>
-<?php echo $this->_tpl_vars['id']['nom_img']; ?>
-<?php echo $this->_tpl_vars['id']['url_img']; ?>
" />
                <input type="submit" name="editar_mono" value="EDITAR" class="button_modify"/>
                <input type="submit" name="esborrar" value="ESBORRAR" class="button_modify"/>
            </form>
        </div>
    <?php endforeach; endif; unset($_from); ?>

    <br><br><h1 class="titol">MARMOTES</h1>
    <?php $_from = $this->_tpl_vars['imgMarm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?>
        <div class="block_img">
            <img class="imatgeEditar" src="<?php echo $this->_tpl_vars['id']['url_img']; ?>
" alt="<?php echo $this->_tpl_vars['id']['nom_img']; ?>
">
            <p class="nom_imatgeEdit"><?php echo $this->_tpl_vars['id']['nom_img']; ?>
</p>
            <form method="post">
                <input type="hidden" name="id" value="marmotas-<?php echo $this->_tpl_vars['id']['id']; ?>
-<?php echo $this->_tpl_vars['id']['nom_img']; ?>
-<?php echo $this->_tpl_vars['id']['url_img']; ?>
" />
                <input type="submit" name="editar_marmota" value="EDITAR" class="button_modify" />
                <input type="submit" name="esborrar" value="ESBORRAR" class="button_modify" />
            </form>
        </div>
    <?php endforeach; endif; unset($_from); ?>

    <br><br><h1 class="titol">ORNITORRINCS</h1>
    <?php $_from = $this->_tpl_vars['imgOrni']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?>
        <div class="block_img">
            <img class="imatgeEditar" src="<?php echo $this->_tpl_vars['id']['url_img']; ?>
" alt="<?php echo $this->_tpl_vars['id']['nom_img']; ?>
">
            <p class="nom_imatgeEdit"><?php echo $this->_tpl_vars['id']['nom_img']; ?>
</p>
            <form method="post">
                <input type="hidden" name="id" value="ornitorrincos-<?php echo $this->_tpl_vars['id']['id']; ?>
-<?php echo $this->_tpl_vars['id']['nom_img']; ?>
-<?php echo $this->_tpl_vars['id']['url_img']; ?>
" />
                <input type="submit" name="editar_ornitorrinco" value="EDITAR" class="button_modify" />
                <input type="submit" name="esborrar" value="ESBORRAR" class="button_modify" />
            </form>
        </div>
    <?php endforeach; endif; unset($_from); ?>

        </div>

    </div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>