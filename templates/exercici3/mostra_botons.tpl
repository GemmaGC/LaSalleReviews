    <div class="go_back_container_micos">

        <a class="prev" href="{$enrere}">Enrere</a>

    </div>

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