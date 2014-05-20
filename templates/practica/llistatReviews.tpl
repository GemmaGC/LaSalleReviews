

<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1>{$titulo}</h1>

    {foreach from = $reviews item = r}
        <section class="section_review">

            <div class="section_review_title">
                <a href="/r/{$r.url_titol}" class="link_titol_review"  style="cursor:pointer; color: orange;">{$r.title}</a></br>
                <p class="titol_review  data_review">{$r.date}</p>
                <p class="titol_review puntuacio_review">{$r.score} / 10</p>
            </div>

            <div class="section_review_body">
                {$r.description|truncate:50}
            </div>

        </section>

    {/foreach}
</div>