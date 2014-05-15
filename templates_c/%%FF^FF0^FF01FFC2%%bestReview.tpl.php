<?php /* Smarty version 2.6.14, created on 2014-05-15 18:52:25
         compiled from practica/bestReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'practica/bestReview.tpl', 20, false),)), $this); ?>



            <?php $_from = $this->_tpl_vars['mostrarReview']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>

                    <div class="BestReview" id="bestRev">

                        <h1>BEST REVIEW</h1>

                        <section class="section_bestreview">


                            <div class="section_review_title">
                                <a href="<?php echo $this->_tpl_vars['m']; ?>
" class="link_titol_review"><?php echo $this->_tpl_vars['m']['title']; ?>
</a></br>
                                <p class="titol_review  data_review "><?php echo $this->_tpl_vars['m']['date']; ?>
</p>
                                <p class="titol_review"><?php echo $this->_tpl_vars['m']['score']; ?>
 / 10</p>
                            </div>

                            <div class="section_review_body">
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['m']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                            </div>

                        </section>
            <?php endforeach; endif; unset($_from); ?>
            </div>

            <section class="link_all_reviews_section">
                <a href="#" class="link_all_reviews">SHOW ALL THE REVIEWS >> </a>
            </section>

            <div class="separator"></div>