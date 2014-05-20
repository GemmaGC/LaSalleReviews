{$modules.headPractica}


    <div class="header_form">
        <h1>SIGN UP!</h1>
        <p>All the fields marked with a <strong>*</strong> are required.</p>
    </div>

    <form name="signup-form" class="form" method="post">

        <section>

            <label for="name">NAME <strong>*</strong>
                {if $vNom}<div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;This name is already used!</p></div>{/if}</label>
            <input name="newUser" id="name" type="text" class="input_form" {if !$vNom && !$vLogin && !$vMail && !$vPas} placeholder="NAME" {else} value = "{$nom}" {/if} required/>


            <label for="login">LOGIN <strong>*</strong>
                {if $vLogin}<div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;This login is already used!</p></div>{/if}</label>
            {if $vNom}<div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;This login is already used or is incorrect (2 letters + 2 numbers)!</p></div>{/if}</label>
            <input name="newLogin" id="login" type="text" class="input_form" {if !$vNom && !$vLogin && !$vMail && !$vPas} placeholder="LOGIN" {else} value = "{$login}" {/if} required/>



            <label for="email">EMAIL <strong>*</strong>
                {if $vMail}<div class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;This email is already used!</p></div>{/if}</label>
            <input name="newEmail" id="email" type="email" class="input_form" {if !$vNom && !$vLogin && !$vMail && !$vPas} placeholder="example@dom.com" {else} value = "{$email}" {/if} required/>


            <label for="Password">PASSWORD (6-20 characters) <strong>*</strong>
                {if $vPas}<div align="top" class="notValid">&nbsp;&nbsp;&nbsp;<img class="img_notValid" src="{$url_creu}"><p class="notValid">&nbsp;Password must be between 6 and 20 characters long!</p></div>{/if}</label>
            <input name="newPassword" id="Password" type="password" class="input_form" {if !$vNom && !$vLogin && !$vMail && !$vPas} placeholder="PASSWORD" {else} value = "{$password}" {/if} required/>


            <div class="footer_form">
                <input type="submit" name="submit_button" value="SIGN UP" class="button_form" />
            </div>

        </section>

    </form>

    <a href="{$loginFacebookURL}" class="btn btn-primary btn-block" type="button"><img  class="boto_fb" src="imag/LoginFacebook.png"></a>




{$modules.footerPractica}