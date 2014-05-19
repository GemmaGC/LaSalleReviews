

{$modules.headPractica}

<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1>Search result</h1>

    {foreach from = $review item = w}
        <section class="section_review">

            <div class="section_review_title">

                <a href="{$w.id}" class="link_titol_review" style="cursor:pointer; color: orange;" onclick="submitirFormularioOculto()">{$w.title}</a></br>
                <form method="POST" action="/Review/.{$w.url_titol}" id="review">
                    <input type="hidden" name="id_oculta" value="{$w.id}">
                </form>
                <p class="titol_review  data_review ">{$w.date}</p>
                <p class="titol_review">{$w.score} / 10</p>
                <img class="section_last_img" src="{$w.image}">
            </div>

            <div class="section_review_body">
                {$w.description|truncate:50}
            </div>

        </section>

        <div class="separator"></div>

        {$modules.llistatBestReviewsPuntuacio}

        <div class="separator"></div>

    {/foreach}
</div>

{$modules.footerPractica}