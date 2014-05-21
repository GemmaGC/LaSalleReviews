{$modules.headPractica}
    <div class="header_form">
        <h1>FINISH TO SIGN UP</h1>
        <p>Please complete the next fields to finish the sign up.</p>
    </div>

    <form name="signup-form" class="form" method="post">

        <section>
            <label for="login">LOGIN <strong>*</strong>
                {if $vUsed}<div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;This login is already used!</p></div>{/if}</label>
            {if $vLogin}<div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;This login is incorrect (2 letters + 2 numbers)!</p></div>{/if}</label>
            <input name="login" id="login" type="text" class="input_form" {if !$vLogin && !$vPas} placeholder="LOGIN" {else} value = "{$login}" {/if} required/>

            <label for="Password">PASSWORD (6-20 characters) <strong>*</strong>
                {if $vPas}<div align="top" class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;Password must be between 6 and 20 characters long!</p></div>{/if}</label>
            <input name="password" id="Password" type="password" class="input_form" {if !$vLogin && !$vPas} placeholder="PASSWORD" {else} value = "{$password}" {/if} required/>

            <div class="footer_form">
                <input type="submit" name="submit_button" value="SIGN UP" class="button_form" />
            </div>

        </section>

    </form>
{$modules.footerPractica}