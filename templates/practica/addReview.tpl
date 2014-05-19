{$modules.headPractica}



			<div class="add_review_title">
				<h1>ADD A REVIEW!</h1>
				<p>All the fields marked with a <strong>*</strong> are required.</p>
			</div>

            <!--action="addReview/OK"-->
			<form name="review-form" class="review_form" method="post" enctype="multipart/form-data" >

		       

		        <div class="content_review_form">

		            <label for="title">TITLE <strong>*</strong></label>
		            <input name="newTitle" id="title" type="text" class="input_title_form" {if !$ok} value = "{$title}" {else} placeholder="TITLE" {/if} required/>

					<label for="description">DESCRIPTION <strong>*</strong></label></br>
		        	<textarea  name="newDescription" id="description" class="input_description_form" {if !$ok} value = "{$description}" {else} placeholder="DESCRIPTION" {/if} required>
		        	</textarea></br>

					<label for="subject">SUBJECT <strong>*</strong></label>
		            <input name="newSubject" id="subject" type="text" class="input_title_form" {if !$ok} value = "{$subject}" {else} placeholder="SUBJECT" {/if} required/>

		            <label for="date">DATE <strong>*</strong></label>
		            <input name="newDate" id="date" type="date" class="input_title_form  input_date" {if !$ok} value = "{$date}" {else} placeholder="DD/MM/AAAA" {/if} required/>

		            <label for="score">SCORE <strong>*</strong></label>
					<select name="newScore" id="score"  required>
                          {if !$ok}
                              <option value="{$score}" selected>{$score}</option>
                          {else}
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
                          {/if}

					</select>
                    </br>
                    </br>

                    <label for="image">IMAGE <strong>*</strong></label>
                    <input type="file" id="fileInput" name="newImage" required/>
                    <div id="fileDisplayArea"></div>

					<div class="footer_form">
		            	<input type="submit" name="submit_button" value="SEND REVIEW" class="button_review" />
		        	</div>
					
		        </div>

		        

		    </form>


{$modules.footerPractica}