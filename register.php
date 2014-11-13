<?php include('header.php');?>
	
		<section class="texts">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 post_ad">
						<h2 class="crt_acc"><i class="fa fa-user"></i> Create a personal account to our site</h2>
						<div class="col-md-6 col-md-offset-1 post_ad_l">
							<form class="register">									
								<div class="radio rdo">
									<p class="cate sale_buy">You</p>
									<label class="radio-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Private Person
									</label>
									<label class="radio-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Company / SP
									</label>
								</div>
									
								<p class="cate">First Name</p>
								<div class="form-group">
								  <input id="staff_ttl" type="text" class="form-control" placeholder="First Name" size="35" />
								</div>

								<p class="cate">Phone</p>
								<div class="form-group phone">
								  <input type="text" class="form-control" id="inputEmail3" placeholder="Phone">
								</div>
								
								<div class="checkbox hide_phn">
									<label>
										<input type="checkbox" value="">
										Hide Phone Number
									</label>
								</div>
									
								<p class="cate">Area</p>
								<select id="area" name="area" class="form-control area">
								  <option value="table">Dhaka</option>
								  <option value="chair">Cumilla</option>
								  <option value="comoputer_acc">Rajshahi</option>
								  <option value="electronics">Chittagonj</option>
								  <option value="electronics">Kustia</option>
								</select>
								
								<p class="cate">Neighborhood</p>
								<select id="neighborhood" name="neighborhood" class="form-control neighborhood">
								  <option value="table">Dhaka</option>
								  <option value="chair">Cumilla</option>
								  <option value="comoputer_acc">Rajshahi</option>
								  <option value="electronics">Chittagonj</option>
								  <option value="electronics">Kustia</option>
								</select>
								
								<p class="cate eml">Email</p>
								<div class="form-group">
								  <input id="staff_ttl" type="email" class="form-control" placeholder="Email" />
								</div>
								
								<p class="cate">Repeat Email</p>
								<div class="form-group">
								  <input id="staff_ttl" type="email" class="form-control" placeholder="Repeat Email" />
								</div>
								
								<p class="cate">Password</p>
								<div class="form-group">
								  <input id="staff_ttl" type="password" class="form-control" placeholder="Password" />
								</div>
								
								<p class="cate">Confirm Password</p>
								<div class="form-group con_ps">
								  <input id="staff_ttl" type="password" class="form-control" placeholder="Confirm Password" />
								</div>
								
								<p class="agree">Click on "Create" button, I agree to the terms of <a href="customer-agreement.php">the User Agreement</a> .</p>
								
								<button type="submit" class="btn btn-success">Create</button>
							</form>
						</div>
						
						<div class="col-md-5 reg_r">
							<p>With personal account to add and edit ads and photos will be even easier!</p>
							
							<p>With a personal account you will be able to view bookmarks from any computer!</p>
						</div>
						
						
						
								
					</div>
				</div>
			</div>
		</section>

<?php include('footer.php');?>