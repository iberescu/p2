<div class="header">xkcd Password Generator</div>

<div id="head" class="style4">
		<div class="container hero">
			<div class="row">
				<div class="col-md-12 col-md-offset-1">
					<div class="row">
						<div class="col-md-5">
								<form id="data-wrapper" class="form-wrapper">
									<div class="field">
										<label for="min-words">Nr. of words</label>
										<select id="min-words" name="minWords">
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4" selected="selected">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>


									</div>

									<div class="field">
										<label for="separator">Separator</label>
										<input type="text" id="separator" name="separator" value="-">
									</div>

									<div class="field ">
										<input type="checkbox" name="firstUpper" id="first-upper">
										<label for="first-upper">Make First Letter Uppercase</label>
									</div>

									<div class="field ">
										<input type="checkbox" name="appendNumbers" id="append-numbers">
										<label for="append-numbers">Add number to the end (1 - 10)</label>
									</div>
									<div class="field ">
										<input type="checkbox" name="addSpecial" id="append-special">
										<label for="append-numbers">Add special character to the end</label>
									</div>									

								</form>
								<div class="submit-wrapper">
									<input type="button" value="Generate" id="generate">
								</div>								
	
						</div>
						<div class="col-md-7">
							<div class="stong-password">correct-horse-battery-staple</div>
							<div><input type="button" value="Copy to clipboard" id="copy-clipboard"></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="wrapper"><div class="wrapper-img"><img src="public/images/password_strength.png" /></div></div>