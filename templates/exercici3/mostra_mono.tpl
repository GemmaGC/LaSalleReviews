

    <div id="fila_micos">

        <section>

            <td>
                <h1>MICOS</h1>
                {if $num < $numImg && $numImg != 0}
                    <img class="img_taula" src="{$img[$num].url_img }">
                {else}
                    <p>No queden més imatges de micos!</p>
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





