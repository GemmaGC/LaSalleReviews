<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all" />
        <meta http-equiv="content-language" content="en" />

        <meta property=”og:title” content=”La Salle Reviews” />
        <meta property=”og:url” content=”http://g1.local/LaSalleReview” />
        <meta name=”description” content=”La Salle Reviews is a website where you can write class's reviews and rate the other's.”>

        <title>LA SALLE REVIEWS</title>

        <link rel="stylesheet" href="{$url.global}/css/practica/styleBase.css">
        <link rel="javascript" type="text/javascript" href="/js/practica/scripts.js">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/js/practica/jquery.js"></script>
        <script src="/js/practica/scripts.js"></script>


    </head>

    <body>
        <div class="main_header">
            <header>

                <a href="{$url.global}/LaSalleReview" class="site-logo">LA SALLE REVIEWS</a>

                <div id="container">
                    <form role="search" method="post" id="searchform" action="/searchResults/0" >
                        <label for="s" class="icon_search">
                            <i class="fa fa-search"></i>
                        </label>
                        <input type="text" value="" placeholder="SEARCH" class="searcher_label" id="s" name="palabra"/>
                    </form>
                </div>

                <nav class="register_login_container">

                    {if $log == 0}
                        <!-- Si NO està loguejat l'usuari...-->
                        <a href="{$url.global}/allReviews/0" class="register">ALL REVIEWS</a>
                        <a href="{$url.global}/register" class="register">SIGN UP</a>


                        <!-- PROVA JQUERY LOG IN -->
                        <nav class="login_desplegable">
                            <ul>
                                <li id="login">
                                    <a id="login-trigger" href="#" class="login_trigger register">LOG IN <span>&darr;</span></a>
                                    <div id="login-content">
                                        <form method="post" action="{$url.global}/LaSalleReview">
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

                    {elseif $log == 1}

                        <!-- Si JA està loguejat l'usuari...-->
                        <a href="{$url.global}/addReview" class="register">ADD REVIEW</a>
                        <a href="{$url.global}/allReviews/0" class="register">ALL REVIEWS</a>
                        <a href="{$url.global}/myReviews/0" class="register">MY REVIEWS</a>
                        <a href="{$url.global}/myRatedReviews" class="register">RATED REVIEWS</a>
                        <div class="register user_info">{$nom} - {$login}</div>
                        <a href="{$url.global}/logOut" class="register">LOG OUT</a>

                    {/if}




                </nav>



            </header>
        </div>

        <div id="wrapper">