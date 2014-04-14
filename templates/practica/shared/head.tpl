<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all" />
        <title>LA SALLE REVIEW</title>
        <link rel="stylesheet" href="{$url.global}/css/practica/styleBase.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    </head>

    <body>
        <div class="main_header">
            <header>

                <a href="{$url.global}/LaSalleReview" class="site-logo">LA SALLE REVIEW</a>

                <div id="container">
                    <form role="search" method="get" id="searchform" action="">
                        <label for="s" class="icon_search">
                            <i class="fa fa-search"></i>
                        </label>
                        <input type="text" value="" placeholder="SEARCH" class="searcher_label" id="s" />
                    </form>
                </div>

                <nav class="register_login_container">

                    {if $log == 0}
                        <!-- Si NO està loguejat l'usuari...-->
                        <a href="{$url.global}/addReview" class="register">ADD REVIEW</a>
                        <a href="{$url.global}/register" class="register">SIGN UP</a>
                        <a href="{$url.global}/logIn" class="register">LOG IN</a>

                    {elseif $log == 1}

                        <!-- Si JA està loguejat l'usuari...-->
                        <a href="{$url.global}/addReview" class="register">ADD REVIEW</a>
                        <div class="register">{$nom} - {$login}</div>
                        <a href="{$url.global}/logOut" class="register">LOG OUT</a>

                    {/if}
                </nav>



            </header>
        </div>

        <div id="wrapper">