

{$modules.headPractica}
    {foreach from = $reviews item = r }
            <section class="section_review_show">

                <img class="section_review_img" src='/imag/img_usuaris/{$r.image}'>

                <div class="section_review_title section_review_title_show">
                    <h1>{$r.title}</h1>
                    <p class="titol_review  data_review">{$r.date}</p>
                    <p class="titol_review">{$r.score} / 10</p></br>
                    <p class="titol_review">{$r.subject} </p>
                </div>



                <div class="section_review_body section_review_body_show">
                    {$r.description}
                </div>

                <div class="section_review_footer">
                    <p class="titol_review">AUTHOR: {$r.nom}</p>
                    <p class="titol_review separator_footer">|</p>
                    <p class="titol_review">LOGIN: {$r.login}</p>
                    <p class="titol_review separator_footer">|</p>
                    <p class="titol_review">{$r.data_creacio}</p>
                </div>

            </section>
    {/foreach}

{$modules.footerPractica}
