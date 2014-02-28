
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


<<<<<<< HEAD
                <div>
=======
                <div class="go_back_container">

                    <a class="prev" href="{$url.global}/exercici1">Enrere</a>
>>>>>>> 740523df4262d6b2829926de3a94f026f4ea0d2b

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