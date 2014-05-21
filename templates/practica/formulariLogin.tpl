
{$modules.headPractica}


            <div class="header_form">
                <h1>LOG IN!</h1>
                <p>All the fields marked with a <strong>*</strong> are required.</p>
            </div>

            {if (!$ok)}<p class="error_login">{$error}</p>{/if}

            <form name="signup_form" class="form" method="post" onsubmit="return validarLogIn();">

                <div class="content_form">

                    <label for="email">EMAIL <strong>*</strong></label>
                    <input name="email" id="email" type="email" class="input_form" placeholder="example@dom.com" value="{$mail}" required/>

		            <label for="Password">PASSWORD <strong>*</strong></label>
		            <input name="password" id="Password" type="password" class="input_form" placeholder="PASSWORD" required/>

                    <div class="footer_form">
                        <input type="submit" name="submit_button" value="LOG IN" class="button_form"/>
                    </div>

                </div>



		    </form>

            <a href="{$loginFacebookURL}" class="btn btn-primary btn-block" type="button"><img class="boto_fb" src="imag/LoginFacebook.png"></a>
{$modules.footerPractica}