


            {foreach from = $mostrarReview item = m}

                    <div class="BestReview" id="bestRev">

                        <h1>BEST REVIEW</h1>

                        <section class="section_bestreview">


                            <div class="section_review_title">

                                <a class="link_titol_review"  style="cursor:pointer; color: orange;" onclick="submitirFormularioOculto()">{$m.title}  </a></br>
                                <form method="POST" action="/Review" id="review">
                                    <input type="hidden" name="id_oculta" value="{$m.id}">
                                </form>
                                <p class="titol_review  data_review ">{$m.date}</p>
                                <p class="titol_review">{$m.score} / 10</p>
                            </div>

                            <div class="section_review_body">
                                {$m.description|truncate:50}
                            </div>

                        </section>
            {/foreach}
            </div>

            <section class="link_all_reviews_section">
                <a href="#" class="link_all_reviews">SHOW ALL THE REVIEWS >> </a>
            </section>

            <div class="separator"></div>