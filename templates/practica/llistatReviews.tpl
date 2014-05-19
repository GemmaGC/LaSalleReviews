

<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1>{$titulo}</h1>

    {foreach from = $reviews item = r}
        <section class="section_review">

            <div class="section_review_title">
                <a class="link_titol_review"  style="cursor:pointer; color: orange;" onclick="submitirFormularioOculto()">{$r.title}</a></br>
                <form method="POST" action="/Review/.{$r.url_titol}" id="review">
                    <input type="hidden" name="id_oculta" value="{$r.id}">
                </form>
                <p class="titol_review  data_review">{$r.date}</p>
                <p class="titol_review puntuacio_review">{$r.score} / 10</p>
            </div>

            <div class="section_review_body">
                {$r.description|truncate:50}
            </div>

        </section>

    {/foreach}
</div>