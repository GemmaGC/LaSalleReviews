<?php /* Smarty version 2.6.14, created on 2014-05-21 10:45:06
         compiled from practica/mostrarReview.tpl */ ?>


<?php echo $this->_tpl_vars['modules']['headPractica']; ?>

            <section class="section_review_show">

                <img class="section_review_img" src='/imag/img_usuaris/704_<?php echo $this->_tpl_vars['r']['image']; ?>
'>

                <div class="section_review_title section_review_title_show">
                    <?php if ($this->_tpl_vars['nova']): ?><h1><?php echo $this->_tpl_vars['r']['new_title']; ?>
</h1><?php else: ?><h1><?php echo $this->_tpl_vars['r']['title']; ?>
</h1><?php endif; ?>
                    <p class="titol_review  data_review"><?php echo $this->_tpl_vars['date_esp']; ?>
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
                    <p class="titol_review"><?php echo $this->_tpl_vars['date_creacio_esp']; ?>
</p>
                </div>



                <div class="section_review_puntuacio">


                    <h3>RATE THE REVIEW</h3>

                    <?php if ($this->_tpl_vars['valorada'] == 1): ?>
                        <!-- Això si ha estat valorada algun cop-->
                        <p class="titol_review">Average rate: <?php echo $this->_tpl_vars['avg']; ?>
</p></br>
                        <p class="titol_review">Nº rates: <?php echo $this->_tpl_vars['num']; ?>
</p></br>


                    <?php elseif ($this->_tpl_vars['valorada'] == 0): ?>
                        <!-- Si no s'ha valorat mai-->
                        <p class="titol_review">Sorry, but this review hasn't been rated yet.</p>
                    <?php endif; ?>


                    <!-- Si estem loggejats-->
                    <?php if ($this->_tpl_vars['log']): ?>
                        <form method="post">
                            <?php if ($this->_tpl_vars['fet'] == 1): ?>
                                <?php if ($this->_tpl_vars['edita'] == 1): ?>
                                    <label for="score">NEW SCORE</label>
                                    <select name="score" id="score"  required>

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
                                        <input type="submit" name="submit_save" value="SAVE RATE" class="button_review" />
                                    </div>
                                <?php else: ?>
                                    <p class="titol_review">My rate: <?php echo $this->_tpl_vars['score']; ?>
</p></br>

                                    <div class="footer_form">
                                        <input type="submit" name="submit_edit" value="EDIT RATE" class="button_review" />
                                        <input type="submit" name="submit_delete" value="DELETE RATE" class="button_review" />
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
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

                            <?php endif; ?>

                        </form>
                    <?php else: ?>
                        <br>
                        <p class="titol_review">You have to log in to rate reviews.</p>
                        <div class="welcome_buttons_container">
                            <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/logIn" class="welcome_button">LOG IN</a>
                            <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/register" class="welcome_button">SIGN UP</a>
                        </div>
                    <?php endif; ?>
                    <!-- Si no estem loggejats al fer RATE (botó) ens porta a la pag 2 opcions i posem valor als botons Register i Log in-->

                </div>

            </section>

<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>
