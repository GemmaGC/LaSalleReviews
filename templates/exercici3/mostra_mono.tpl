

    <section>

        <h1 class="nom_visualitzador">MICOS</h1>
        {if $num < $numImg && $numImg != 0}
            <img class="img_taula" src="{$img[$num].url_img }">
        {else}
            <br><p class="noMesFotos">No queden més imatges de micos!</p>
        {/if}

        {if $segona < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$segona].url_img }">{/if}

        {if $tercera < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$tercera].url_img }">{/if}

     </section>





