<?php include('header.php');?>
	
		<section class="view_all_ad">
			<div class="container">
				<div class="row">
					<div class="col-md-12 vw_all_ad">
						<div class="col-md-3 vw_all_ad_l">
							<div class="src_area">
								<form action="" method="post">
									<input class="form-control" placeholder="খুঁজুন এখানে" type="text" name="" />
									<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							
							<div class="cats_area">
								<h2 class="htwo">বিভাগসমূহ</h2>
								<ul class="main">
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
									<li><a href="">ইলেক্ট্রনিক্স</a>
										<ul class="sub">
											<li><a href="">ইলেক্ট্রনিক্স</a></li>
											<li><a href="">ইলেক্ট্রনিক্স</a></li>
											<li><a href="">ইলেক্ট্রনিক্স</a></li>
										</ul>
									</li>
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
								</ul>
							</div>
							
							<div class="cats_area">
								<h2 class="htwo">অন্যান্য বিষয়সমূহ</h2>
								<ul class="main">
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
									<li><a href="">ইলেক্ট্রনিক্স</a>
										<ul class="sub">
											<li><a href="">ইলেক্ট্রনিক্স</a></li>
											<li><a href="">ইলেক্ট্রনিক্স</a></li>
											<li><a href="">ইলেক্ট্রনিক্স</a></li>
										</ul>
									</li>
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
									<li><a href="">ইলেক্ট্রনিক্স</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-9 vw_all_ad_r">
							<h2 class="htwo">সকল বিজ্ঞাপন</h2>
							<div class="vw_all_ads">
								<?php
									for($i=0; $i<=6; $i++){
								?>
								<div class="sng_vw_all_ad">									
									<div class="col-md-2 col-sm-2 img">
										<a href="single-add.php"><img src="img/ads-item-1.jpg" alt="" /></a>
									</div>
									
									<div class="col-md-10 col-sm-10 ads_info">
										<div class="col-md-10 col-sm-10 ads_info_l">
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
										
										<div class="col-md-2 col-sm-2 ads_info_r">
											<p class="fav">
												<a href=""><i class="fa fa-star-o"></i></a>
											</p>
											
											<p class="price">
												৩৫,০০০
											</p>
											
											<p class="tme">
												আজ ১২:০০
											</p>
										</div>
									</div>
								</div>
								<?php } ?>
								
							</div>
						</div>
		
					</div>
				</div>
			</div>
		</section>

<?php include('footer.php');?>