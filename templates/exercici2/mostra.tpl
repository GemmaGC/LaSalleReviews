
{$modules.head}

    <div id="container_micos">

        <div class="go_back_container_micos">

            <a class="prev" href="{$enrere}">Enrere</a>

        </div>

            <h1 class="info_mic">{$titol}</h1>


            <section>

                    <div class="clr"></div>

                    <img class="img_monos" src="{$imgmonos[$nummono].url_img }">

                    <div class="container_buttons_micos">

                        {if $nummono > 0}
                            <a class="prev" href="/mostra/{$nummono}">Anterior</a>
                        {else}
                            <a href=""></a>
                        {/if}
                        {if $nummono < $max}
                            <a class="next" href="/mostra/{$siguiente}">Següent</a>
                        {/if}
                    </div>

            </section>

        </div>
        <div class="clear"></div>
    </div>
{$modules.footer}