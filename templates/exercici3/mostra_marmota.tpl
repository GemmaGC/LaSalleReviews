


<div id="fila_marmota">

    <section>


        <td class="imatges"><h1>MARMOTES</h1>

            {if $num < $numImg && $numImg != 0}
                <img class="img_taula" src="{$img[$num].url_img }">
            {else}
                <br><p>No queden més imatges de marmotes!</p>
            {/if}
        </td>

        <td class="imatges">
            {if $segona < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$segona].url_img }"> {/if}
        </td>

        <td class="imatges">
            {if $tercera < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$tercera].url_img }">{/if}
        </td>

    </section>

</div>
