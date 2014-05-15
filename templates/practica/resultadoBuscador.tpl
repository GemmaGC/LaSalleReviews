

{$modules.headPractica}

<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1>Search result</h1>

    {foreach from = $review item = w}
        <section class="section_review">

            <div class="section_review_title">
                <a href="{$w.id}" class="link_titol_review">{$w.title}</a></br>
                <p class="titol_review  data_review ">{$w.date}</p>
                <p class="titol_review">{$w.score} / 10</p>
            </div>

            <div class="section_review_body">
                {$w.description|truncate:50}
            </div>

        </section>

    {/foreach}
</div>

{$modules.footerPractica}