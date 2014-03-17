{$modules.head}

<div class="visualizador_container">

    <div class="go_back_container_micos">

        <a class="prev" href="{$enrere}">Enrere</a>

    </div>


    <section class="visualitzador">

        <div class="imatges_visualitzador">
            {$modules.mostra_mono}
            {$modules.mostra_marmota}
            {$modules.mostra_ornitorrinco}
        </div>

    </section>

    <div>
        {if $num > $min} <a href="{$url_ant}"><img class="img_botoAnt" src="../imag/arrowOn2.png"></a> {/if}
    </div>

    <div>
        {if $num < $max} <a href="{$url_seg}"><img class="img_botoSeg" src="../imag/arrowOn.png"></a> {/if}
    </div>


</div>

{$modules.footer}
