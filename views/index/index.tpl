<section id="head" class="style4">
		<div class="container hero">
			<div class="row">
				<div class="col-md-12 col-md-offset-1">
					<div class="row">
						<div class="col-md-5 form-wrapper">
								<form id="data-wrapper">
									<div class="field">
										<label for="min-words">Min words</label>
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
										<label for="min-length">Min Length</label>
										<select id="min-length" name="minLength">
											<option value="10">10</option>
											<option value="15">15</option>
											<option value="20" selected="selected">20</option>
											<option value="25">25</option>
											<option value="30">30</option>
											<option value="35">35</option>
											<option value="40">40</option>
										</select>
									</div>

									<div class="field">
										<label for="separator">Separator</label>
										<input type="text" id="separator" name="separator" value="-">
									</div>

									<div class="field ">
										<input type="checkbox" checked="checked" name="firstUpper" id="first-upper">
										<label for="first-upper">Make First Letter Uppercase</label>
									</div>

									<div class="field ">
										<input type="checkbox" checked="checked" name="appendNumbers" id="append-numbers">
										<label for="append-numbers">Append random number to the end (1 - 10)</label>
									</div>
									<div class="field submit-wrapper">
										<input type="button" value="Generate" id="generate">
									</div>
								</form>
	
						</div>
						<div class="col-md-7">
							<div class="stong-password">correct-horse-battery-staple</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<div class="wrapper"></div>