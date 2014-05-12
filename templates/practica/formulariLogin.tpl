
{$modules.headPractica}


            <div class="header_form">
                <h1>LOG IN!</h1>
                <p>All the fields marked with a <strong>*</strong> are required.</p>
            </div>

            <form name="login-form" class="form" method="post" onsubmit="return(validateFormLogin());">

                {if (!$ok)}<h1>{$error}</h1>{/if}
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

{$modules.footerPractica}