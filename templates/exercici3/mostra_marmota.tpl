


<div id="fila_marmota">

    <section>

        <img class="img_marmota" src="{$img[$num].url_imatge }">
        {if $num+1 < $numImg}<img class="img_marmota" src="{$img[$segona].url_imatge }">{/if}
        {if $num+2 < $numImg}<img class="img_marmota" src="{$img[$tercera].url_imatge }">{/if}
        {$numImg}

    </section>

</div>
