{$modules.headPractica}



            <div class="header_form">
                <h1>SIGN UP!</h1>
                <p>All the fields marked with a <strong>*</strong> are required.</p>
            </div>
			<form name="signup-form" class="form" method="post">



		        <div>

		            <label for="name">NAME <strong>*</strong></label>
		            <input name="newUser" id="name" type="text" class="input_form" placeholder="NAME" required/>
<!--
		        	<label for="name">LOGIN</label>
		            <input name="newUser" id="login" type="text" class="input_form" placeholder="LOGIN" required/>
-->
					<label for="email">EMAIL <strong>*</strong></label>
		            <input name="newEmail" id="email" type="email" class="input_form" placeholder="example@dom.com" required/>

		            <label for="Password">PASSWORD <strong>*</strong></label>
		            <input name="newPassword" id="Password" type="password" class="input_form" placeholder="PASSWORD" required/>


                    <div class="footer_form">
                        <input type="submit" name="submit_button" value="SIGN UP" class="button_form" />
                    </div>

                </div>

		    </form>



{$modules.footerPractica}