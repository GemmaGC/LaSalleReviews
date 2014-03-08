<?php /* Smarty version 2.6.14, created on 2014-03-08 22:45:05
         compiled from exercici2/mostra.tpl */ ?>

<?php echo $this->_tpl_vars['modules']['head']; ?>


    <div id="container_micos">

        <div class="go_back_container_micos">

            <a class="prev" href="<?php echo $this->_tpl_vars['enrere']; ?>
">Enrere</a>

        </div>

            <h1 class="info_mic"><?php echo $this->_tpl_vars['titol']; ?>
</h1>


            <section>

                    <div class="clr"></div>

                    <img class="img_monos" src="<?php echo $this->_tpl_vars['imgmonos'][$this->_tpl_vars['nummono']]['url_img']; ?>
">

                    <div class="container_buttons_micos">

                        <?php if ($this->_tpl_vars['nummono'] > 0): ?>
                            <a class="prev" href="/mostra/<?php echo $this->_tpl_vars['nummono']; ?>
">Anterior</a>
                        <?php else: ?>
                            <a href=""></a>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nummono'] < $this->_tpl_vars['max']): ?>
                            <a class="next" href="/mostra/<?php echo $this->_tpl_vars['siguiente']; ?>
">Següent</a>
                        <?php endif; ?>
                    </div>

            </section>

        </div>
        <div class="clear"></div>
    </div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>