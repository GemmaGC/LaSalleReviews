

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



                <div class="section_review_puntuacio">


                    <h3>RATE THE REVIEW</h3>

                    <!-- Això si ha estat valorada algun cop-->
                    <p class="titol_review">Average rate: </p></br>
                    <p class="titol_review">Nº rates: </p></br>

                    <!-- Si no s'ha valorat mai-->
                    <p class="titol_review">Sorry, but this review hasn't been rated yet.</p>

                    <!-- Si estem loggejats-->
                    <form>
                        <label for="score">SCORE</label>
                        <select name="newScore" id="score"  required>

                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                        </select>

                        <div class="footer_form">
                            <input type="submit" name="submit_button" value="RATE" class="button_review" />
                        </div>

                    </form>


                    <!-- Si no estem loggejats al fer RATE (botó) ens porta a la pag 2 opcions i posem valor als botons Register i Log in-->

                </div>

            </section>
    {/foreach}

{$modules.footerPractica}
