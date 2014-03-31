
{$modules.headPractica}

            <form name="login-form" class="form" method="post">

		        <div class="header_form">
		            <h1>LOG IN!</h1>
		        </div>

		        <div class="content_form">

                    <label for="email">EMAIL</label>
                    <input name="newEmail" id="email" type="email" class="input_form" placeholder="example@dom.com" required/>

		            <label for="Password">PASSWORD</label>
		            <input name="newPassword" id="Password" type="password" class="input_form" placeholder="PASSWORD" required/>
		        </div>

		        <div class="footer_form">
		            <input type="submit" name="submit_button" value="LOG IN" class="button_form"/>
		        </div>

		    </form>

{$modules.footerPractica}