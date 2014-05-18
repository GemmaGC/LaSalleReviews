<?php /* Smarty version 2.6.14, created on 2014-05-18 20:40:39
         compiled from practica/llistatReviewsUsuari.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'practica/llistatReviewsUsuari.tpl', 26, false),)), $this); ?>


<!-- Despres només amb un section i amb bucle es fan la resta -->


<?php echo $this->_tpl_vars['modules']['headPractica']; ?>


<div class="my_reviews">

    <h1>MY REVIEWS</h1>

    <?php $_from = $this->_tpl_vars['reviews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
        <section class="section_review margin_top_extra">

            <div class="all_review">
                <div class="">
                    <a class="link_titol_review"  style="cursor:pointer; color: orange;" onclick="submitirFormularioOculto()"><?php echo $this->_tpl_vars['r']['title']; ?>
  </a></br>
                    <form method="POST" action="/Review" id="review">
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

            <div class="section_review_buttons">
                <a href="#" class="welcome_button button_Option" onclick="submitirFormularioEditar()">EDIT</a>
                <a href="#" class="welcome_button button_Option">DELETE</a>  <!-- D'aqui que vagi a duesOpcions i digui si vols eliminar o no -->

                <!-- PROBLEMA!!! SI ENS DESACTIVA EL JS AIXO NO ANIRA! -->
                <form method="POST" action="/editReview" id="edit">
                    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['r']['id']; ?>
">
                </form>
            </div>

        </section>
    <?php endforeach; endif; unset($_from); ?>



    <div class="block_paginacio">

         <a class="boto_link separacio_links" href="#"> << </a>
         <a class="boto_link" href="#"> >> </a>
    </div>



</div>

<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>