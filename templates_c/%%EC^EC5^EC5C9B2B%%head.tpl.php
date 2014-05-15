<?php /* Smarty version 2.6.14, created on 2014-05-15 12:17:05
         compiled from practica/shared/head.tpl */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all" />
        <title>LA SALLE REVIEW</title>
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['global']; ?>
/css/practica/styleBase.css">
        <link rel="javascript" type="text/javascript" href="/js/practica/scripts.js">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/js/practica/jquery.js"></script>


    </head>

    <body>
        <div class="main_header">
            <header>

                <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/LaSalleReview" class="site-logo">LA SALLE REVIEW</a>

                <div id="container">
                    <form role="search" method="get" id="searchform" action="/searchResults" >
                        <label for="s" class="icon_search">
                            <i class="fa fa-search"></i>
                        </label>
                        <input type="text" value="" placeholder="SEARCH" class="searcher_label" id="s" name="palabra"/>
                    </form>
                </div>

                <nav class="register_login_container">

                    <?php if ($this->_tpl_vars['log'] == 0): ?>
                        <!-- Si NO està loguejat l'usuari...-->
                        <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/register" class="register">SIGN UP</a>

                        <!-- PROVA JQUERY LOG IN -->
                        <nav class="login_desplegable">
                            <ul>
                                <li id="login">
                                    <a id="login-trigger" href="#" class="login_trigger register">LOG IN <span>&darr;</span></a>
                                    <div id="login-content">
                                        <form method="post" action="<?php echo $this->_tpl_vars['url']['global']; ?>
/LaSalleReview">
                                            <fieldset class="fieldset_login" id="inputs">
                                                <input id="username" class="input_form" type="email" name="Email" placeholder="Your email address" required>
                                                <input id="password" class="input_form" type="password" name="Password" placeholder="Password" required>
                                            </fieldset>
                                            <fieldset class="fieldset_login" id="actions">
                                                <input type="submit" class="button_form boto_login_desp" id="submit" value="LOG IN" name="submitButton">
                                            </fieldset>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <!-- FI PROVA JQUERY LOG IN -->

                    <?php elseif ($this->_tpl_vars['log'] == 1): ?>

                        <!-- Si JA està loguejat l'usuari...-->
                        <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/addReview" class="register">ADD REVIEW</a>
                        <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/myReviews" class="register">MY REVIEWS</a>
                        <div class="register user_info"><?php echo $this->_tpl_vars['nom']; ?>
 - <?php echo $this->_tpl_vars['login']; ?>
</div>
                        <a href="<?php echo $this->_tpl_vars['url']['global']; ?>
/logOut" class="register">LOG OUT</a>

                    <?php endif; ?>




                </nav>



            </header>
        </div>

        <div id="wrapper">