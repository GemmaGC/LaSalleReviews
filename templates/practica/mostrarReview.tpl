

{$modules.headPractica}
    {foreach from = $reviews item = r }
            <section class="section_review_show">



                <img class="section_review_img" src="{$r.image}">

                <div class="section_review_title section_review_title_show">
                    <a class="titol_review">{$r.title}  </a></br>
                    <p class="titol_review  data_review ">{$r.date}</p>
                    <p class="titol_review">{$r.score} / 10</p>
                    <p class="titol_review">{$r.subject} </p>
                </div>



                <div class="section_review_body">
                    {$r.description}
                </div>

                <div class="section_review_footer">
                    <p class="titol_review">AUTHOR: {$r.nom}</p>
                    <p class="titol_review separator_footer">|</p>
                    <p class="titol_review">LOGIN: {$r.login}</p>
                    <p class="titol_review separator_footer">|</p>
                    <p class="titol_review">{$r.date}</p>
                </div>

            </section>
    {/foreach}

{$modules.footerPractica}
}