
{$modules.head}

    <div id="container_micos">

        <div class="go_back_container_micos">

            <a class="prev" href="{$enrere}">Enrere</a>

        </div>

            <h1 class="info_mic">{$titol}</h1>


            <section>

                    <div class="clr"></div>
                    {assign var = 'urlm' value= 'url_img'}
                    <img class="img_monos" src="{$imgmonos[$nummono].url_img }">

                    <div class="container_buttons_micos">

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