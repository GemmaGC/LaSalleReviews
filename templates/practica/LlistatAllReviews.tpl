

<!-- Despres nom�s amb un section i amb bucle es fan la resta -->


{$modules.headPractica}

<div class="my_reviews">

    <h1>ALL REVIEWS</h1>

    {foreach from = $reviews item = r}
        <section class="section_review margin_top_extra">

            <div class="all_review">
                <div class="section_review_title">
                    <a href="/r/{$r.url_titol}" class="link_titol_review"  style="cursor:pointer; color: orange;" onclick="submitirFormularioOculto()">
                        {if $r.old_title == null}
                            {$r.title}
                        {else}
                            {$r.old_title}
                        {/if}

                    </a></br>
                    <p class="titol_review  data_review ">{$r.date}</p>
                    <p class="titol_review">{$r.score} / 10</p>
                </div>

                <div class="section_review_body">
                    {$r.description|truncate:50}
                </div>
            </div>


        </section>
    {/foreach}


    <div class="block_paginacio">

        <a class="boto_link separacio_links" href="{$url_ant}"> {if $num >= 1}<<{/if} </a>
        {if $num < $max-1} <a class="boto_link" href="{$url_seg}"> >> </a> {/if}
    </div>



</div>

{$modules.footerPractica}