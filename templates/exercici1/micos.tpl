
    <!-- Això és un comentari HTML -->
    {* Això és un comentari en Smarty *}
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


            <section>
                <div class="clr"></div>
                <figure class="container_buttons">
                    <img class="img" src="{$url.global}/imag/exercici1/{$act_img}.jpg">
                </figure>
                <div class="container_buttons">

                    <a class="prev" href="{$url.global}/micos/{$prev_img}">Anterior</a>


                    <a class="next" href="{$url.global}/micos/{$next_img}">Següent</a>

                </div>
            </section>

        </div>
        <footer>
            <p>La Salle - Universitat Ramon Llull - curs 2013 / 2014</p>
        </footer>

        </body>

    </html>