<?php include('header.php');?>
	
		<section class="view_all_ad">
			<div class="container">
				<div class="row">
					<div class="col-md-12 dshbrd">
						<div class="tab_area">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs main_nv" role="tablist">
							  <li role="presentation" class="active"><a href="#my_home" role="tab" data-toggle="tab"><i class="fa fa-home"></i> My Home</a></li>
							  <li role="presentation"><a href="#my_ads" role="tab" data-toggle="tab"><i class="fa fa-files-o"></i> My Ads</a></li>
							  <li role="presentation"><a href="#fav_ads" role="tab" data-toggle="tab"><i class="fa fa-star"></i> Favourite Ads</a></li>
							  <li role="presentation"><a href="#my_fav_src" role="tab" data-toggle="tab"><i class="fa fa-search"></i> Search History</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content col-md-12 main_tb">
							   <div role="tabpanel" class="tab-pane fade in active" id="my_home">
								<div class="col-md-2 left">
									<ul class="nav nav-tabs ad_status spr_admn" role="tablist">
									  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Your Info</a></li>
									  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-pencil"></i> Edit Info</a></li>
									  <li role="presentation"><a href="#rejected" title="Rececjed" role="tab" data-toggle="tab"><i class="fa fa-lock"></i> Change Password</a></li>
									</ul>
								</div>
								<div class="col-md-10 rht">
									<div class="tab-content update_acc">
									  <div role="tabpanel" class="tab-pane fade in active" id="edit_personal_data">
										<h3 class="ttl">Here you can change your personal account</h3>
										<form action="" class="register" method="post">									
											<div class="radio rdo">
												<p class="cate">You :</p>
												<p class="sel_tp">Private Person</p>
											</div>
												
											<p class="cate">Name :</p>
											<div class="form-group">
											  <input id="staff_ttl" type="text" class="form-control" placeholder="Name" value="Md Hasan Fardous Rubel" />
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
											
											<p class="cate eml">Email</p>
											<div class="form-group email">
											  <input id="staff_ttl" type="email" class="form-control" placeholder="Email" />
											</div>
											<p class="agree">E-mail address can not be changed. See the <a href="">frequently asked questions</a> .</p>
											
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

											<input type="submit" class="btn btn-success" value="Save Changes">
										</form>
									  </div>
									  
									  <div role="tabpanel" class="tab-pane fade in" id="remove_personal_cabinet">
										<h3>Deleting personal account</h3>

										<div class="del_info">
											<div class="warn">
												<i class="fa fa-warning"></i>
											</div>
											<div class="r_txt">
												<p class="des">Attention! When you delete an account, all active ads will be automatically removed. Experiencing difficulties? Contact our <a href="">support team</a>.</p>
												
												<a href="" class="del_acc btn btn-danger">Delete Account</a>
											</div>
										</div>
									  </div>
									  
									  <div role="tabpanel" class="tab-pane fade in" id="change_password">
										<h3 class="ttl">Change Password</h3>
										<!--form id="myForm" action="" class="register" method="post">
												
											<p class="cate">Old Password :</p>
											<div class="form-group">
											  <input type="password" class="form-control" placeholder="Old Password" />
											</div>

											<p class="cate">New Password :</p>
											<div class="form-group">
											  <input type="password" class="form-control" placeholder="New Password" />
											</div>
											
											<p class="cate">New Password :</p>
											<div class="form-group">
											  <input type="password" class="form-control" placeholder="New Password" />
											</div>

											<input type="submit" class="btn btn-success" value="Save Changes">
										</form-->
										
										<form class="form2" action="" method="POST" name="myForm" id="myForm">
										  <div class="formtitle">Contact Us</div>
										  <div class="input">
											<div class="inputtext">Your Name: </div>
											<div class="inputcontent">
											  <input type="text" name="name" id="name" />
											</div>
										  </div>
										  <div class="input">
											<div class="inputtext">Your Surname: </div>
											<div class="inputcontent">
											  <input type="text" name="surname" id="surname" />
											</div>
										  </div>
										  <div class="input">
											<div class="inputtext">Your Email: </div>
											<div class="inputcontent">
											  <input type="text" name="email" id="email" />
											</div>
										  </div>
										  <div class="inputtextbox nobottomborder">
											<div class="inputtext">About: </div>
											<div class="inputcontent">
											  <textarea class="textarea" name="about" id="about"></textarea>
											</div>
										  </div>
										  <div class="buttons"> <span id="error" style="display:none; color:#F00">Some Error!Please Fill form Properly </span> <span id="success" style="display:none; color:#0C0">All the records are submitted!</span>
											<input class="greybutton" type="submit" name="submit" value="Send" />
										  </div>
										</form>
										
										
									  </div>
									</div> 
								</div>
							  </div>
							
							  <div role="tabpanel" class="tab-pane fade" id="my_ads">
								
								<ul class="col-md-1 nav nav-tabs ad_status spr_admn" role="tablist">
								  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-check-square-o"></i> Live</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-dollar"></i> Paid</a></li>
								  <li role="presentation"><a href="#rejected" title="Rececjed" role="tab" data-toggle="tab"><i class="fa fa-exclamation-circle rejected"></i> Blocked</a></li>
								  <li role="presentation"><a href="#inactive" title="Pending" role="tab" data-toggle="tab"><i class="fa fa-ellipsis-h inactive"></i> Pending</a></li>
								</ul>
								
								<div class="col-md-10 col-md-offset-1 tab-content ad_status_tb">
								  <div role="tabpanel" class="tab-pane fade in active" id="all">
									<!--div class="well text-center">
										<h3>Oh! You have no active add.</h3>
										<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
										<div class="wht_do">
											<div class="col-md-1 lft">
												<i class="fa fa-picture-o"></i>
											</div>
											<div class="col-md-11 rht">
												<p class="ttl">Here you can view or edit your active add.</p>
												<p class="des">
													Add photos, Edit the description, Price etc.<br/>
													Publish new listings fast and convenient way!
												</p>
											</div>
										</div>
									</div-->
									
									<div class="have_cont">
										<?php
											for($i=1; $i<6; $i++){
										?>
										<div class="sng_vw_all_ad">									
											<div class="col-md-2 col-sm-2 img">
												<a href="single-add.php"><img src="img/ads-item-1.jpg" alt="" /></a>
												<p class="text-center"><i class="fa fa-camera"></i> <span>6</span></p>
											</div>
											
											<div class="col-md-10 col-sm-10 ads_info">
												<div class="col-md-12 col-sm-12 ads_info_l">
													<p class="ttl"><a href="single-add.php">এটা প্রথম বিজ্ঞাপনের টাইটেল</a></p>
													<p class="des">ওয়েব ব্রাউজার একটি ভিউয়ার একটি সংগ্রহস্থল থেকে একটি বাংলা ডকুমেন্ট যোগাযোগ জড়িত সফটওয়্যার এর মধ্যে শুধুমাত্র একটি উপাদান. নথিটি কোথাও একটি কম্পিউটারে থাকা, এবং যে..</p>
													<div class="proprt">
														<ul>
															<li>বেবহ্রিত হ্যাঁ</li>
															<li>পোর্ট ইউএসবি</li>
															<li>ইত্যাদি</li>
															<li>ইত্যাদি</li>
														</ul>
													</div>
													<p class="loc">ঢাকা, বাংলাদেশ।</p>
												</div>
												
											</div>
										</div>
										<?php } ?>
										
										<nav>
										  <ul class="pagination">
											<li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
											<li class="active"><a class="btn-success" href="#">1 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">2 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">3 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">4 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">5 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">6 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">7 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">8 <span class="sr-only"></span></a></li>
											<li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
										  </ul>
										</nav>
										
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="actives">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="moderated">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="rejected">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="inactive">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								</div>
								
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="fav_ads">
								
								<ul class="col-md-1 nav nav-tabs ad_status spr_admn" role="tablist">
								  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-check-square-o"></i> Live</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-dollar"></i> Paid</a></li>
								  <li role="presentation"><a href="#rejected" title="Rececjed" role="tab" data-toggle="tab"><i class="fa fa-exclamation-circle rejected"></i> Blocked</a></li>
								  <li role="presentation"><a href="#inactive" title="Pending" role="tab" data-toggle="tab"><i class="fa fa-ellipsis-h inactive"></i> Pending</a></li>
								</ul>
								
								<div class="col-md-10 col-md-offset-1 tab-content ad_status_tb">
								  <div role="tabpanel" class="tab-pane fade in active" id="all">
									<div class="well text-center">
										<div class="col-md-12 lft no_fav_ads">
											<i class="fa fa-picture-o"></i>
										</div>
										<h3>Oh! You have no active add.</h3>
										<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
										<div class="wht_do">
											<div class="col-md-12 rht">
												<p class="ttl">Here you can view or edit your active add.</p>
												<p class="des">
													Add photos, Edit the description, Price etc.<br/>
													Publish new listings fast and convenient way!
												</p>
											</div>
										</div>
									</div>
									
									<div class="have_cont">
										<?php
											for($i=1; $i<6; $i++){
										?>
										<div class="sng_vw_all_ad">									
											<div class="col-md-2 col-sm-2 img">
												<a href="single-add.php"><img src="img/ads-item-1.jpg" alt="" /></a>
												<p class="text-center"><i class="fa fa-camera"></i> <span>6</span></p>
											</div>
											
											<div class="col-md-10 col-sm-10 ads_info">
												<div class="col-md-12 col-sm-12 ads_info_l">
													<p class="ttl"><a href="single-add.php">এটা প্রথম বিজ্ঞাপনের টাইটেল</a></p>
													<p class="des">ওয়েব ব্রাউজার একটি ভিউয়ার একটি সংগ্রহস্থল থেকে একটি বাংলা ডকুমেন্ট যোগাযোগ জড়িত সফটওয়্যার এর মধ্যে শুধুমাত্র একটি উপাদান. নথিটি কোথাও একটি কম্পিউটারে থাকা, এবং যে..</p>
													<div class="proprt">
														<ul>
															<li>বেবহ্রিত হ্যাঁ</li>
															<li>পোর্ট ইউএসবি</li>
															<li>ইত্যাদি</li>
															<li>ইত্যাদি</li>
														</ul>
													</div>
													<p class="loc">ঢাকা, বাংলাদেশ।</p>
												</div>
												
											</div>
										</div>
										<?php } ?>
										
										<nav>
										  <ul class="pagination">
											<li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
											<li class="active"><a class="btn-success" href="#">1 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">2 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">3 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">4 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">5 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">6 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">7 <span class="sr-only"></span></a></li>
											<li class=""><a href="#">8 <span class="sr-only"></span></a></li>
											<li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
										  </ul>
										</nav>
										
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="actives">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="moderated">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="rejected">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="inactive">
									<h3>Oh! You have no active add.</h3>
									<p class="ds">Lets change the situation. You can <a href="post-add.php">Create an add</a> right now.</p>
									<div class="wht_do">
										<div class="col-md-1 lft">
											<i class="fa fa-picture-o"></i>
										</div>
										<div class="col-md-11 rht">
											<p class="ttl">Here you can view or edit your active add.</p>
											<p class="des">
												Add photos, Edit the description, Price etc.<br/>
												Publish new listings fast and convenient way!
											</p>
										</div>
									</div>
								  </div>
								</div>
								
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="my_fav_src">
								<ul>
									<li><a href="">This is search a search item.</a></li>
									<li><a href="">This is second search a search item.</a></li>
								</ul>
								<div class="srch">
									<a href=""><i class="fa fa-search"></i> Save a new search</a>
								</div>
							  </div>
							 </div>
						</div>

					</div>
				</div>
			</div>
		</section>

<?php include('footer.php');?>