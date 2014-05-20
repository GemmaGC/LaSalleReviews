<?php /* Smarty version 2.6.14, created on 2014-05-20 21:17:07
         compiled from practica/facebook.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['headPractica']; ?>

    <div class="header_form">
        <h1>FINISH TO SIGN UP</h1>
        <p>Please complete the next fields to finish the sign up.</p>
    </div>

    <form name="signup-form" class="form" method="post">

        <section>
            <label for="login">LOGIN <strong>*</strong>
            <?php if ($this->_tpl_vars['vLogin']): ?><div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="<?php echo $this->_tpl_vars['url_creu']; ?>
"><p class="notValid">&nbsp;This login is already used!</p></div><?php endif; ?></label>
            <input name="login" id="login" type="text" class="input_form" <?php if (! $this->_tpl_vars['vLogin'] && ! $this->_tpl_vars['vPas']): ?> placeholder="LOGIN" <?php else: ?> value = "<?php echo $this->_tpl_vars['login']; ?>
" <?php endif; ?> required/>

            <label for="Password">PASSWORD (6-20 characters) <strong>*</strong>
                <?php if ($this->_tpl_vars['vPas']): ?><div align="top" class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="<?php echo $this->_tpl_vars['url_creu']; ?>
"><p class="notValid">&nbsp;Password must be between 6 and 20 characters long!</p></div><?php endif; ?></label>
            <input name="password" id="Password" type="password" class="input_form" <?php if (! $this->_tpl_vars['vLogin'] && ! $this->_tpl_vars['vPas']): ?> placeholder="PASSWORD" <?php else: ?> value = "<?php echo $this->_tpl_vars['password']; ?>
" <?php endif; ?> required/>

            <div class="footer_form">
                <input type="submit" name="submit_button" value="SIGN UP" class="button_form" />
            </div>

        </section>

    </form>
<?php echo $this->_tpl_vars['modules']['footerPractica']; ?>