
{$modules.head}

    <div id="container">

        <div class="go_back_container">

            <a class="prev" href="{$enrere}">Enrere</a>

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
        <div class="clear"></div>
    </div>
{$modules.footer}