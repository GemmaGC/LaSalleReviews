<?php /* Smarty version 2.6.14, created on 2014-05-15 11:36:56
         compiled from practica/llistatReviews.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'practica/llistatReviews.tpl', 18, false),)), $this); ?>


<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1>LAST 10 REVIEWS</h1>

    <?php $_from = $this->_tpl_vars['reviews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
        <section class="section_review">

            <div class="section_review_title">
                <a href="<?php echo $this->_tpl_vars['r']['id']; ?>
" class="link_titol_review"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                <p class="titol_review  data_review "><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                <p class="titol_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
            </div>

            <div class="section_review_body">
                <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

            </div>

        </section>

    <?php endforeach; endif; unset($_from); ?>
</div>