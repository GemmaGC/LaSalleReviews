
{$modules.head}

<!--
Aqui falta llistar totes les fotos de les 3 galeries i posar enllaç d'editar i esborrar en cada una
-->
<!--<h1>BENVINGUT A L'EXERCICI 4!</h1>-->
<div class="go_back_container_micos">

    <a class="prev" href="{$enrere}">Enrere</a>

</div>

<div class="scrollbar" id="styleScroll">

    <h1 class="titol">MICOS</h1>
    {foreach from=$imgMicos item=id}
        <div class="block_img">
            <img class="imatgeEditar" src="{$id.url_img}" alt="{$id.nom_img}">
            <p class="nom_imatgeEdit">{$id.nom_img}</p>
            <form method="post">
                <input type="hidden" name="id" value="monos-{$id.id}-{$id.nom_img}-{$id.url_img}" />
                <input type="submit" name="editar_mono" value="EDITAR" class="button_modify"/>
                <input type="submit" name="esborrar" value="ESBORRAR" class="button_modify"/>
            </form>
        </div>
    {/foreach}

    <br><br><h1 class="titol">MARMOTES</h1>
    {foreach from=$imgMarm item=id}
        <div class="block_img">
            <img class="imatgeEditar" src="{$id.url_img}" alt="{$id.nom_img}">
            <p class="nom_imatgeEdit">{$id.nom_img}</p>
            <form method="post">
                <input type="hidden" name="id" value="marmotas-{$id.id}-{$id.nom_img}-{$id.url_img}" />
                <input type="submit" name="editar_marmota" value="EDITAR" class="button_modify" />
                <input type="submit" name="esborrar" value="ESBORRAR" class="button_modify" />
            </form>
        </div>
    {/foreach}

    <br><br><h1 class="titol">ORNITORRINCS</h1>
    {foreach from=$imgOrni item=id}
        <div class="block_img">
            <img class="imatgeEditar" src="{$id.url_img}" alt="{$id.nom_img}">
            <p class="nom_imatgeEdit">{$id.nom_img}</p>
            <form method="post">
                <input type="hidden" name="id" value="ornitorrincos-{$id.id}-{$id.nom_img}-{$id.url_img}" />
                <input type="submit" name="editar_ornitorrinco" value="EDITAR" class="button_modify" />
                <input type="submit" name="esborrar" value="ESBORRAR" class="button_modify" />
            </form>
        </div>
    {/foreach}

        </div>

    </div>
{$modules.footer}