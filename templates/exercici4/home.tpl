
{$modules.head}

<!--
Aqui falta llistar totes les fotos de les 3 galeries i posar enllaç d'editar i esborrar en cada una
-->
<!--<h1>BENVINGUT A L'EXERCICI 4!</h1>-->
<div class="scrollbar" id="styleScroll">

    <h1 class="titol">MICOS</h1>
    {foreach from=$imgMicos item=id}
        <div class="block_img">
            <img class="imatgeEditar" src="{$id.url_img}" alt="ImatgeX">
            <p class="nom_imatgeEdit">{$id.nom_img}</p>
            <form method="post">
                <input type="hidden" name="id_mono" value="{$id.id}" />
                <input type="submit" name="editar_mono" value="EDITAR" class="button_modify"/>
                <input type="submit" name="esborrar_mono" value="ESBORRAR" class="button_modify"/>
            </form>
           <!-- <a class="btn  btn--icon  btn--add" href="../modificarMico" name="editar"><i>+</i><span>EDITAR</span></a>
            <a class="btn  btn--icon  btn--delete" href="../esborrar" name="esborrar"><i>×</i><span>ESBORRAR</span></a>-->

        </div>
    {/foreach}

    <br><br><h1 class="titol">MARMOTES</h1>
    {foreach from=$imgMarm item=id}
        <div class="block_img">
            <img class="imatgeEditar" src="{$id.url_img}" alt="ImatgeX">
            <p class="nom_imatgeEdit">{$id.nom_img}</p>
            <form method="post">
                <input type="hidden" name="id_marmorta" value="{$id.id}" />
                <input type="submit" name="editar_marmota" value="EDITAR" class="button_modify" />
                <input type="submit" name="esborrar_marmota" value="ESBORRAR" class="button_modify" />
            </form>
           <!--<a class="btn  btn--icon  btn--add" href="../modificarMarmota" name="editar"><i>+</i><span>EDITAR</span></a>
            <a class="btn  btn--icon  btn--delete" href="../esborrar" name="esborrar"><i>×</i><span>ESBORRAR</span></a>-->
            {*Session::getInstance()->set('marmotas', $id)*}
        </div>
    {/foreach}

    <br><br><h1 class="titol">ORNITORRINCS</h1>
    {foreach from=$imgOrni item=id}
        <div class="block_img">
            <img class="imatgeEditar" src="{$id.url_img}" alt="ImatgeX">
            <p class="nom_imatgeEdit">{$id.nom_img}</p>
            <form method="post">
                <input type="hidden" name="id_ornitorrinco" value="{$id.id}" />
                <input type="submit" name="editar_ornitorrinco" value="EDITAR" class="button_modify" />
                <input type="submit" name="esborrar_ornitorrinco" value="ESBORRAR" class="button_modify" />
            </form>
           <!-- <a class="btn  btn--icon  btn--add" href="../modificarOrnitorrinc" name="editar"><i>+</i><span>EDITAR</span></a>
            <a class="btn  btn--icon  btn--delete" href="../esborrar" name="esborrar"><i>×</i><span>ESBORRAR</span></a>-->
            {*Session::getInstance()->set('ornitorrincos', $id)*}
        </div>
    {/foreach}

        </div>

    </div>
{$modules.footer}