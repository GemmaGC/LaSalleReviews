<?php /* Smarty version 2.6.14, created on 2014-03-06 18:07:22
         compiled from exercici2/mostra.tpl */ ?>

<?php echo $this->_tpl_vars['modules']['head']; ?>


    <div id="container">

        <div class="go_back_container">

            <a class="prev" href="<?php echo $this->_tpl_vars['enrere']; ?>
">Enrere</a>

        </div>

            <h1><?php echo $this->_tpl_vars['titol']; ?>
</h1>


            <section>

                    <div class="clr"></div>

                    <img class="img" src="<?php echo $this->_tpl_vars['act_url']; ?>
">

                    <div class="container_buttons">

                        <?php if ($this->_tpl_vars['prev_img'] > $this->_tpl_vars['min']): ?>
                            <a class="prev" href="<?php echo $this->_tpl_vars['prev_url']; ?>
">Anterior</a>
                        <?php else: ?>
                            <a href=""></a>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['next_img'] < $this->_tpl_vars['max']): ?>
                            <a class="next" href="<?php echo $this->_tpl_vars['next_url']; ?>
">Següent</a>
                        <?php endif; ?>
                    </div>

            </section>

        </div>
        <div class="clear"></div>
    </div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>