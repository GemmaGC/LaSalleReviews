

<!-- Despres només amb un section i amb bucle es fan la resta -->




<div class="Last10reviews">

    <h1>LAST 10 REVIEWS</h1>

    {foreach from = $reviews item = r}
        <section class="section_review">

            <div class="section_review_title">
                <a href="{$r.id}" class="link_titol_review">{$r.title}</a>
                <p class="titol_review  data_review ">{$r.date}</p>
                <p class="titol_review">{$r.score} / 10</p>
            </div>

            <div class="section_review_body">
                {$r.description|truncate:50}
            </div>

        </section>

    {/foreach}
</div>