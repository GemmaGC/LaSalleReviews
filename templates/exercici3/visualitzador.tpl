{$modules.head}

<div class="visualizador_container">

    <table>
        <tr>

            <td rowspan="3">
                {if $num > $min} <a href="{$url_ant}"><img class="img_boto" src="{$boto_ant}"></a> {/if}
            </td>

            {$modules.mostra_mono}

            <td rowspan="3">
                {if $num < $max} <a href="{$url_seg}"><img class="img_boto" src="{$boto_seg}"></a> {/if}
            </td>
        </tr>

        <tr>
            {$modules.mostra_marmota}
        </tr>

        <tr>
            {$modules.mostra_ornitorrinco}
        </tr>

    </table>


</div>

{$modules.footer}
