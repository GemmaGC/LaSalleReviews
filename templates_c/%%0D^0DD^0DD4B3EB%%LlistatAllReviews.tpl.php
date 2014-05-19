<?php /* Smarty version 2.6.14, created on 2014-05-19 20:35:33
         compiled from practica/LlistatAllReviews.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'practica/LlistatAllReviews.tpl', 26, false),)), $this); ?>


<!-- Despres nom�s amb un section i amb bucle es fan la resta -->


<?php echo $this->_tpl_vars['modules']['headPractica']; ?>


<div class="my_reviews">

    <h1>ALL REVIEWS</h1>

    <?php $_from = $this->_tpl_vars['reviews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
        <section class="section_review margin_top_extra">

            <div class="all_review">
                <div class="">
                    <a class="link_titol_review"  style="cursor:pointer; color: orange;" onclick="submitirFormularioOculto()"><?php echo $this->_tpl_vars['r']['title']; ?>
  </a></br>
                    <form method="POST" action="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" id="review">
                        <input type="hidden" name="id_oculta" value="<?php echo $this->_tpl_vars['r']['id']; ?>
">
                    </form>
                    <p class="titol_review  data_review "><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                    <p class="titol_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                </div>

                <div class="section_review_body">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                </div>
            </div>


        </section>
    <?php endforeach; endif; unset($_from); ?>


    <div class="block_paginacio">

        <a class="boto_link separacio_links" href="<?php echo $this->_tpl_vars['url_ant']; ?>
"> <?php if ($this->_tpl_vars['num'] >= 1): ?><<<?php endif; ?> </a>
        <?php if ($this->_tpl_vars['num'] < $this->_tpl_vars['max']-1): ?> <a class="boto_link" href="<?php echo $this->_tpl_vars['url_seg']; ?>
"> >> </a> <?php endif; ?>
    </div>



</div>

<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>