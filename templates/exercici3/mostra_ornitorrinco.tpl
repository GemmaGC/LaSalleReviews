

    <div id="fila_ornitorrinco">

        <section>

            <td class="imatges">
                <h1>ORNITORRINCS</h1>
                {if $num < $numImg && $numImg != 0}
                    <img class="img_taula" src="{$img[$num].url_img }">
                {else}
                    <br><p>No queden més imatges d'ornitorrincs!</p>
                {/if}
            </td>

            <td class="imatges">
                {if $segona < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$segona].url_img }">{/if}
            </td>

            <td class="imatges">
                {if $tercera < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$tercera].url_img }">{/if}
            </td>

        </section>

    </div>
