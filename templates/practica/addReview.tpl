{$modules.headPractica}



			<div class="add_review_title">
				<h1>ADD A REVIEW!</h1>
				<p>All the fields marked with a <strong>*</strong> are required.</p>
			</div>

			<form name="review-form" class="review_form" method="post">

		       

		        <div class="content_review_form">

		            <label for="title">TITLE <strong>*</strong></label>
		            <input name="newTitle" id="title" type="text" class="input_title_form" placeholder="TITLE" required/>    

					<label for="description">DESCRIPTION <strong>*</strong></label></br>
		        	<textarea form="review_form" name="newDescription" id="description" class="input_description_form" placeholder="DESCRIPTION" required> 
		        	</textarea></br>

					<label for="subject">SUBJECT <strong>*</strong></label>
		            <input name="newSubject" id="subject" type="text" class="input_title_form" placeholder="SUBJECT" required/>

		            <label for="date">DATE <strong>*</strong></label>
		            <input name="newDate" id="date" type="date" class="input_title_form  input_date" placeholder="DD/MM/AAAA" required/>

		            <label for="score">SCORE <strong>*</strong></label>
					<select id="score" class="input_title_form  input_desplegable" required>
						  <option value="1">1</option>
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

					<label for="image">IMAGE <strong>*</strong></label>
		            <input name="newImage" id="image" type="file" required/>


					<div class="footer_form">
		            	<input type="submit" name="submit_button" value="SEND REVIEW" class="button_review" />
		        	</div>
					
		        </div>

		        

		    </form>


{$modules.footerPractica}