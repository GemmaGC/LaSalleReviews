

    <div id="fila_ornitorrinco">

        <section>

            <td>
                <h1>ORNITORRINCS</h1>
                {if $num < $numImg && $numImg != 0}
                    <img class="img_taula" src="{$img[$num].url_img }">
                {else}
                    <p>No queden més imatges d'ornitorrincs!</p>
                {/if}
            </td>

            <td>
                {if $segona < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$segona].url_img }">{/if}
            </td>

            <td>
                {if $tercera < $numImg && $numImg != 0} <img class="img_taula" src="{$img[$tercera].url_img }">{/if}
            </td>

        </section>

    </div>
