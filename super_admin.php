<?php include('header.php');?>
	
		<section class="view_all_ad">
			<div class="container">
				<div class="row">
					<div class="col-md-12 dshbrd">
						<div class="tab_area">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs col-md-12 main_nv" role="tablist">
							  <li role="presentation" class="active"><a href="#my_ads" role="tab" data-toggle="tab"><i class="fa fa-files-o"></i> Ads</a></li>
							  <li role="presentation"><a href="#selected_ads" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Users</a></li>
							  <li role="presentation"><a href="#my_fav_src" role="tab" data-toggle="tab"><i class="fa fa-exclamation-triangle"></i> Issues</a></li>
							  <li role="presentation"><a href="#settings" role="tab" data-toggle="tab"><i class="fa fa-files-o"></i> Templates</a></li>
							  <li role="presentation"><a href="#communications" role="tab" data-toggle="tab"><i class="fa fa-users"></i> Communications</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content col-md-12 main_tb">
							  <div role="tabpanel" class="tab-pane fade in active" id="my_ads">

								<div class="col-md-10 tab-content ad_status_tb">
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
												<div class="col-md-11 col-sm-11 ads_info_l">
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
												
												<div class="col-md-1 col-sm-1 ads_info_r">
													<ul>
														<li>
															<a href=""><i class="fa fa-check actv"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-times rejected"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-cog blck"></i></a>
														</li>
													</ul>
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
								
								<ul class="col-md-1 col-md-offset-1 nav nav-tabs ad_status spr_admn" role="tablist">
								  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-check-square-o"></i> Live</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-dollar"></i> Paid</a></li>
								  <li role="presentation"><a href="#rejected" title="Rececjed" role="tab" data-toggle="tab"><i class="fa fa-exclamation-circle rejected"></i> Blocked</a></li>
								  <li role="presentation"><a href="#inactive" title="Pending" role="tab" data-toggle="tab"><i class="fa fa-ellipsis-h inactive"></i> Pending</a></li>
								</ul>
								
							  </div>
							  <div role="tabpanel" class="tab-pane fade users_area" id="selected_ads">
								<div class="col-md-10 tab-content ad_status_tb">
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
											<div class="ads_info users">
												<div class="col-md-11 col-sm-11 ads_info_l">
													<p class="ttl"><a href="single-add.php"><i class="fa fa-user"></i> মোঃ মারুফ হোসেন</a></p>
													<p class="des"><i class="fa fa-phone"></i> ০১৮৪ - ৮৮৮৮৮৮৮</p>
													<p class="des"><i class="fa fa-envelope"></i> maruf.sylhet@gmail.com</p>
													<p class="loc">ঢাকা, বাংলাদেশ।</p>
													<div class="proprt">
														<ul>
															<li><i class="fa fa-check-square-o actv"></i> 3</li>
															<li><i class="fa fa fa-dollar blck"></i> 5</li>
															<li><i class="fa fa-exclamation-circle rejected rejected"></i> 7</li>
															<li><i class="fa fa-ellipsis-h inactive"></i> 5</li>
														</ul>
													</div>
												</div>
												
												<div class="col-md-1 col-sm-1 ads_info_r">
													<ul>
														<li>
															<a href=""><i class="fa fa-check actv"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-times rejected"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-cog blck"></i></a>
														</li>
													</ul>
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
								
								<ul class="col-md-1 col-md-offset-1 nav nav-tabs ad_status spr_admn" role="tablist">
								  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-check-square-o actv"></i> Activated</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-dollar blck"></i> Blocked</a></li>
								</ul>
							  </div>
							  <div role="tabpanel" class="tab-pane fade issues_area" id="my_fav_src">
								
								<div class="col-md-10 tab-content ad_status_tb">
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
											<div class="ads_info users">
												<div class="col-md-11 col-sm-11 ads_info_l">
													<p class="ttl"><a href="single-add.php">ইস্যু টাইটেল</a></p>
													<p class="des">ওয়েব ব্রাউজার একটি ভিউয়ার একটি সংগ্রহস্থল থেকে একটি বাংলা ডকুমেন্ট যোগাযোগ জড়িত সফটওয়্যার এর মধ্যে শুধুমাত্র একটি উপাদান. নথিটি কোথাও একটি কম্পিউটারে থাকা, এবং যে..</p>
													
													<div class="proprt">
														<ul>
															<li><i class="fa fa-check-square-o actv"></i> 3</li>
															<li><i class="fa fa fa-dollar blck"></i> 5</li>
															<li><i class="fa fa-exclamation-circle rejected rejected"></i> 7</li>
															<li><i class="fa fa-ellipsis-h inactive"></i> 5</li>
														</ul>
													</div>
												</div>
												
												<div class="col-md-1 col-sm-1 ads_info_r">
													<ul id="issues_act">
														<li>
															<a href=""><i class="fa fa-check actv"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-times rejected"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-cog blck"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<?php } ?>
										
										<nav>
										  <ul class="pagination" id="issues_pag">
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
								
								<ul class="col-md-1 col-md-offset-1 nav nav-tabs ad_status spr_admn" role="tablist">
								  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-ellipsis-h inactive"></i> Pending</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-check-square-o actv"></i> Replied</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-times rejected"></i> Closed</a></li>
								</ul>
								
							  </div>
							  <div role="tabpanel" class="tab-pane fade users_area" id="settings">
								
								<div class="col-md-10 tab-content ad_status_tb">
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
											<div class="ads_info templates">
												<div class="col-md-11 col-sm-11 ads_info_l">
													<p class="ttl"><a href="single-add.php">ইস্যু টাইটেল</a></p>
													<p class="des">ওয়েব ব্রাউজার একটি ভিউয়ার একটি সংগ্রহস্থল থেকে একটি বাংলা ডকুমেন্ট যোগাযোগ জড়িত সফটওয়্যার এর মধ্যে শুধুমাত্র একটি উপাদান. নথিটি কোথাও একটি কম্পিউটারে থাকা, এবং যে..</p>
													
													<div class="proprt">
														<ul>
															<li><i class="fa fa-check-square-o actv"></i> 3</li>
															<li><i class="fa fa fa-dollar blck"></i> 5</li>
															<li><i class="fa fa-exclamation-circle rejected rejected"></i> 7</li>
															<li><i class="fa fa-ellipsis-h inactive"></i> 5</li>
														</ul>
													</div>
												</div>
												
												<div class="col-md-1 col-sm-1 ads_info_r">
													<ul id="issues_act">
														<li>
															<a href=""><i class="fa fa-check actv"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-times rejected"></i></a>
														</li>
														
														<li>
															<a href=""><i class="fa fa-cog blck"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<?php } ?>
										
										<nav>
										  <ul class="pagination" id="issues_pag">
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
								
								<ul class="col-md-1 col-md-offset-1 nav nav-tabs ad_status spr_admn" role="tablist">
								  <li role="presentation" class="singlePanel active" data-toggle="tooltip" data-placement="right" title="Tooltip on left"><a href="#all" title="All Ads" role="tab" data-toggle="tab"><i class="fa fa-mobile actv"></i> SMS</a></li>
								  <li role="presentation"><a href="#actives" title="Active" role="tab" data-toggle="tab"><i class="fa fa-envelope actv"></i> Email</a></li>
								</ul>
								
								</div>
								<div class="col-md-8 rht">
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
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

<?php include('footer.php');?>