
{$modules.head}

    <div id="container_micos">

        <div class="go_back_container_micos">

            <a class="prev" href="{$enrere}">Enrere</a>

        </div>

        <h1 class="info_mic">{$titol}</h1>


        <section>

                <div class="clr"></div>

<<<<<<< HEAD
                <img class="img_monos" src="{$act_url}">
=======
                    <img class="img_monos" src="{$imgmonos[$nummono].url_img }">
>>>>>>> 57d153eedc2dd04f16f6e86e751280765cf35846

                <div class="container_buttons_micos">

<<<<<<< HEAD
                    {if $prev_img > $min+1}
                        <a class="prev" href="{$prev_url}">Anterior</a>
                    {else}
                        <a href=""></a>
                    {/if}
                    {if $next_img < $max}
                        <a class="next" href="{$next_url}">Següent</a>
                    {/if}
                </div>
=======
                        {if $nummono > 0}
                            <a class="prev" href="/mostra/{$nummono}">Anterior</a>
                        {else}
                            <a href=""></a>
                        {/if}
                        {if $nummono < $max}
                            <a class="next" href="/mostra/{$siguiente}">Següent</a>
                        {/if}
                    </div>
>>>>>>> 57d153eedc2dd04f16f6e86e751280765cf35846

        </section>

    </div>
    <div class="clear"></div>
{$modules.footer}