
    <!-- Això és un comentari HTML -->
    {* Això és un comentari en Smarty *}
    <!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Fotografies dels micos</title>



            <link rel="stylesheet" type="text/css" href="css/stylemicos.css" />

        </head>

        <body>
        <div class="main_header">
            <header>
                <div class="site-logo">EXERCICI 1</div>
            </header>
        </div>
        <div id="container">



            <section>
                <div class="clr"></div>
                <figure class="container_buttons">
                    <img class="img" src="imag/exercici1/{$img_anterior}.jpg">
                </figure>
                <div class="container_buttons">

                    {if $img_anterior > 0}
                        <a class="prev" href="{$url.global}/micos/{$img_anterior}">Anterior</a>
                    {/if}

                    {if $img_posterior < 11}
                        <a class="next" href="{$url.global}/micos/{$img_posterior}">Següent</a>
                    {/if}

                </div>
            </section>

        </div>
        <footer>
            <p>La Salle - Universitat Ramon Llull - curs 2013 / 2014</p>
        </footer>

        </body>

    </html>