{$modules.headPractica}


                <div class="header_form">
                    <h1>SIGN UP!</h1>
                    <p>All the fields marked with a <strong>*</strong> are required.</p>
                </div>
                <form name="signup-form" class="form" method="post">

                    <section>

                        <label for="name">NAME <strong>*</strong>
                            {if $vNom}<div class="notValid">&nbsp;&nbsp;&nbsp;<img src="{$url_creu}"><p class="notValid">&nbsp;Aquest nom ja ha sigut utilitzat!</p></div>{/if}</label>
                        <input name="newUser" id="name" type="text" class="input_form" {if !$vNom && !$vMail && !$vPas} placeholder="NAME" {else} value = "{$nom}" {/if} required/>

                        <!--
                    <label for="name">LOGIN</label>
                    <input name="newUser" id="login" type="text" class="input_form" placeholder="LOGIN" required/>
    -->
                        <label for="email">EMAIL <strong>*</strong>
                            {if $vMail}<div class="notValid">&nbsp;&nbsp;&nbsp;<img src="{$url_creu}"><p class="notValid">&nbsp;Aquest email ja ha sigut utilitzat!</p></div>{/if}</label>
                        <input name="newEmail" id="email" type="email" class="input_form" {if !$vNom && !$vMail && !$vPas} placeholder="example@dom.com" {else} value = "{$email}" {/if} required/>


                        <label for="Password">PASSWORD <strong>*</strong>
                            {if $vPas}<div align="top" class="notValid">&nbsp;&nbsp;&nbsp;<img src="{$url_creu}"><p class="notValid">&nbsp;La contrassenya ha de tenir entre 6 i 20 caràcters</p></div>{/if}</label>
                        <input name="newPassword" id="Password" type="password" class="input_form" {if !$vNom && !$vMail && !$vPas} placeholder="PASSWORD" {else} value = "{$password}" {/if} required/>


                        <div class="footer_form">
                            <input type="submit" name="submit_button" value="SIGN UP" class="button_form" />
                        </div>

                    </section>

                </form>




{$modules.footerPractica}