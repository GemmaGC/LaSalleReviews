

{$modules.headPractica}
            <section class="section_review_show">

                <img class="section_review_img" src='/imag/img_usuaris/704_{$r.image}'>

                <div class="section_review_title section_review_title_show">
                    <h1>

                        {if $r.old_title == null}
                            {$r.title}
                        {else}
                            {$r.old_title}
                        {/if}

                    </h1>
                    <p class="titol_review  data_review">{$date_esp}</p>
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
                    <p class="titol_review">{$date_creacio_esp}</p>
                </div>



                <div class="section_review_puntuacio">


                    <h3>RATE THE REVIEW</h3>

                    {if $valorada == 1}
                        <!-- Això si ha estat valorada algun cop-->
                        <p class="titol_review">Average rate: {$avg}</p></br>
                        <p class="titol_review">Nº rates: {$num}</p></br>


                    {elseif $valorada == 0}
                        <!-- Si no s'ha valorat mai-->
                        <p class="titol_review">Sorry, but this review hasn't been rated yet.</p>
                    {/if}


                    <!-- Si estem loggejats-->
                    {if $log}
                        <form method="post">
                            {if $fet == 1}
                                {if $edita == 1}
                                    <label for="score">NEW SCORE</label>
                                    <select name="score" id="score"  required>

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
                                        <input type="submit" name="submit_save" value="SAVE RATE" class="button_review" />
                                    </div>
                                {else}
                                    <p class="titol_review">My rate: {$score}</p></br>

                                    <div class="footer_form">
                                        <input type="submit" name="submit_edit" value="EDIT RATE" class="button_review" />
                                        <input type="submit" name="submit_delete" value="DELETE RATE" class="button_review" />
                                    </div>
                                {/if}
                            {else}
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

                            {/if}

                        </form>
                    {else}
                        <br>
                        <p class="titol_review">You have to log in to rate reviews.</p>
                        <div class="welcome_buttons_container">
                            <a href="{$url.global}/logIn" class="welcome_button">LOG IN</a>
                            <a href="{$url.global}/register" class="welcome_button">SIGN UP</a>
                        </div>
                    {/if}

                </div>

            </section>

{$modules.footerPractica}
