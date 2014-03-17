
    <section>

        <h1>MARMOTES</h1>

        {if $num < $numImg && $numImg != 0}
            <img class="img_taula" src="{$img[$num].url_img }">
        {else}
            <br><p>No queden més imatges de marmotes!</p>
        {/if}

        {if $segona < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$segona].url_img }"> {/if}

        {if $tercera < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$tercera].url_img }">{/if}

    </section>


