<?php /* Smarty version 2.6.14, created on 2014-05-21 13:17:28
         compiled from practica/LlistatBestReviews.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'practica/LlistatBestReviews.tpl', 29, false),)), $this); ?>


<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1><?php echo $this->_tpl_vars['titulo']; ?>
</h1>
    <?php if (( $this->_tpl_vars['numreviews'] == 0 )): ?>
        <h1>Sorry, there's no rated reviews yet!</h1>
    <?php else: ?>
           <?php if (( $this->_tpl_vars['numreviews'] > 0 )): ?>
                <?php $_from = $this->_tpl_vars['reviews0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;">

                                <?php if ($this->_tpl_vars['r']['old_title'] == null): ?>
                                    <?php echo $this->_tpl_vars['r']['title']; ?>

                                <?php else: ?>
                                    <?php echo $this->_tpl_vars['r']['old_title']; ?>

                                <?php endif; ?>

                            </a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
           <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 1 )): ?>
                <?php $_from = $this->_tpl_vars['reviews1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 2 )): ?>
                <?php $_from = $this->_tpl_vars['reviews2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 3 )): ?>
                    <?php $_from = $this->_tpl_vars['reviews3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <section class="section_review">

                            <div class="section_review_title">
                                <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                                <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                                <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                            </div>

                            <div class="section_review_body">
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                            </div>

                        </section>

                    <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 4 )): ?>
                    <?php $_from = $this->_tpl_vars['reviews4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <section class="section_review">

                            <div class="section_review_title">
                                <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                                <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                                <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                            </div>

                            <div class="section_review_body">
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                            </div>

                        </section>

                    <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 5 )): ?>
                <?php $_from = $this->_tpl_vars['reviews5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 6 )): ?>
                <?php $_from = $this->_tpl_vars['reviews6']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 7 )): ?>
                <?php $_from = $this->_tpl_vars['reviews7']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>


                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 8 )): ?>
                <?php $_from = $this->_tpl_vars['reviews8']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['numreviews'] > 9 )): ?>
                <?php $_from = $this->_tpl_vars['reviews9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                    <section class="section_review">

                        <div class="section_review_title">
                            <a href="/r/<?php echo $this->_tpl_vars['r']['url_titol']; ?>
" class="link_titol_review"  style="cursor:pointer; color: orange;"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></br>
                            <p class="titol_review  data_review"><?php echo $this->_tpl_vars['r']['date']; ?>
</p>
                            <p class="titol_review puntuacio_review"><?php echo $this->_tpl_vars['r']['score']; ?>
 / 10</p>
                        </div>

                        <div class="section_review_body">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>

                        </div>

                    </section>

                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
    <?php endif; ?>

</div>