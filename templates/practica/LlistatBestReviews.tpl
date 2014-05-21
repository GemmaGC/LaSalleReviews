

<div class="Last10reviews">

    <!-- Que el h1 sigui una variable que omplim des del controller!! Així podem reutilitzar el mòdul -->
    <h1>{$titulo}</h1>
    {if ($numreviews==0)}
        <h1>Sorry, there's no rated reviews yet!</h1>
    {else}
           {if ($numreviews>0)}
                {foreach from = $reviews0 item = r}
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
           {/if}
            {if ($numreviews>1)}
                {foreach from = $reviews1 item = r}
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
            {/if}
            {if ($numreviews>2)}
                {foreach from = $reviews2 item = r}
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
            {/if}
            {if ($numreviews>3)}
                    {foreach from = $reviews3 item = r}
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
            {/if}
            {if ($numreviews>4)}
                    {foreach from = $reviews4 item = r}
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
            {/if}
            {if ($numreviews>5)}
                {foreach from = $reviews5 item = r}
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
            {/if}
            {if ($numreviews>6)}

                {foreach from = $reviews6 item = r}
                    <section class=4"section_review">

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
            {/if}
            {if ($numreviews>7)}
                {foreach from = $reviews7 item = r}
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
            {/if}
            {if ($numreviews>8)}
                {foreach from = $reviews8 item = r}
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
            {/if}
            {if ($numreviews>9)}
                {foreach from = $reviews9 item = r}
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
            {/if}
    {/if}

</div>