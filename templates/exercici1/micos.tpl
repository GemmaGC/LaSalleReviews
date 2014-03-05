
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

                <div class="go_back_container">

                    <a class="prev" href="{$exercici}">Enrere</a>

                </div>

                    <h1>{$titol}</h1>


                    <section>

                        <div class="clr"></div>

                        <img class="img" src="{$act_url}">

                        <div class="container_buttons">

                            {if $prev_img > $min}
                                <a class="prev" href="{$prev_url}">Anterior</a>
                            {else}
                                <a href=""></a>
                            {/if}
                            {if $next_img < $max}
                                <a class="next" href="{$next_url}">Següent</a>
                            {/if}
                        </div>

                    </section>

                </div>


                <footer>
                    <p>La Salle - Universitat Ramon Llull - curs 2013 / 2014</p>
                </footer>

            </body>

    </html>