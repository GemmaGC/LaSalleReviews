<?php /* Smarty version 2.6.14, created on 2014-05-18 19:48:50
         compiled from practica/mostrarReview.tpl */ ?>


<?php echo $this->_tpl_vars['modules']['headPractica']; ?>

    <?php $_from = $this->_tpl_vars['reviews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
            <section class="section_review_show">

                <img class="section_review_img" src='/imag/img_usuaris/<?php echo $this->_tpl_vars['r']['image']; ?>
'>

                <div class="section_review_title section_review_title_show">
                    <h1><?php echo $this->_tpl_vars['r']['title']; ?>
</h1>
                    <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                    <p class="titol_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p></br>
                    <p class="titol_review"><?php echo $this->_tpl_vars['r']['subject']; ?>
 </p>
                </div>



                <div class="section_review_body section_review_body_show">
                    <?php echo $this->_tpl_vars['r']['description']; ?>

                </div>

                <div class="section_review_footer">
                    <p class="titol_review">AUTHOR: <?php echo $this->_tpl_vars['r']['nom']; ?>
</p>
                    <p class="titol_review separator_footer">|</p>
                    <p class="titol_review">LOGIN: <?php echo $this->_tpl_vars['r']['login']; ?>
</p>
                    <p class="titol_review separator_footer">|</p>
                    <p class="titol_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                </div>

            </section>
    <?php endforeach; endif; unset($_from); ?>

<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>
