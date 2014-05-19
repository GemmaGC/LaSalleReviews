<?php /* Smarty version 2.6.14, created on 2014-05-19 16:53:08
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
                    <p class="titol_review"><?php echo $this->_tpl_vars['r']['data_creacio']; ?>
</p>
                </div>

                <div class="section_review_puntuacio">
                    <h3>RATE THE REVIEW</h3>

                    <!-- Això si ha estat valorada algun cop-->
                    <p class="titol_review">Average rate: </p></br>
                    <p class="titol_review">Nº rates: </p></br>

                    <!-- Si no s'ha valorat mai-->
                    <p class="titol_review">Sorry, but this review hasn't been rated yet.</p>

                    <!-- Si estem loggejats-->
                    <form>
                        <label for="score">SCORE</label>
                        <select name="newScore" id="score"  required>

                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                        </select>

                        <div class="footer_form">
                            <input type="submit" name="submit_button" value="RATE" class="button_review" />
                        </div>

                    </form>


                    <!-- Si no estem loggejats al fer RATE (botó) ens porta a la pag 2 opcions i posem valor als botons Register i Log in-->

                </div>

            </section>
    <?php endforeach; endif; unset($_from); ?>

<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>
