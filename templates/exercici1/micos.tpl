
    <!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Fotografies dels micos</title>

            <link rel="stylesheet" type="text/css" href="{$url.global}/css/stylemicos.css" />

        </head>

        <body>

            <div class="main_header">
                <header>
                    <div class="site-logo">EXERCICI 1</div>
                </header>
            </div>

            <div id="container">


                <div class="button_retorn_container">

                    <a class="prev" href="{$url.global}/exercici1">Tornar al menú</a>
                </div>

                    <h1>Mico #{$act_img}</h1>




                    <section>

                        <div class="clr"></div>

                        <img class="img" src="{$url.global}/imag/exercici1/{$act_img}.jpg">

                        <div class="container_buttons">

                            {if $prev_img > 0}
                                <a class="prev" href="{$url.global}/micos/{$prev_img}">Anterior</a>
                            {else}
                                <a href=""></a>
                            {/if}
                            {if $next_img < 11}
                                <a class="next" href="{$url.global}/micos/{$next_img}">Següent</a>
                            {/if}
                        </div>

                    </section>

                </div>


                <footer>
                    <p>La Salle - Universitat Ramon Llull - curs 2013 / 2014</p>
                </footer>

            </body>

    </html>