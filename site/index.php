<?php
include 'realestatedbconnect.php_l';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Realestate Project</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/custom.css"/> 


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
<!------------------------------------------------------------------------------------------- contact number -------------------------------------------------------------->					
					<!--	<div class="top-info">
							<i class="fa fa-phone"> P 02 6642 8554</i>

							<i class="fa fa-phone"> M 0487 289 471</i>
							
						</div> -->
<!-------------------------------------------------------------------------------------------- contact email --------------------------------------------------------------->						
						<!-- <div class="top-info">
							 <i class="fa fa-envelope"> allison@fngrafton.com.au</i>
							
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social"> -->
<!----------------------------------------------------------------------------------------- Social Media links ---------------------------------------------------------- -->
						<!-- <a href="https://www.facebook.com/firstnationalgrafton/"><i class="fa fa-facebook"></i></a> -->
						<!-- <a href=""><i class="fa fa-twitter"></i></a> -->
						<!-- <a href="https://www.instagram.com/graftonrealestate/"><i class="fa fa-instagram"></i></a> ->>
						<!-- <a href=""><i class="fa fa-pinterest"></i></a> -->
						<!-- <a href=""><i class="fa fa-linkedin"></i></a> -->
						</div>
						<!-- <div class="user-panel"> -->
<!----------------------------------------------------------------------------------------- Register button -------------------------------------------------------------->							
						<!--<a href=""><i class="fa fa-user-circle-o"></i> Register</a> -->
<!----------------------------------------------------------------------------------------- Login button ----------------------------------------------------------------->								
							<!-- <a href=""><i class="fa fa-sign-in"></i> Login</a> -->
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
<!----------------------------------------------------------------------------------------- Logo ------------------------------------------------------------------------->	

						<a  class="site-logo"><img src="img/logo.jpg" alt="sitelogo"></a>
						<div class="nav-switch">

<!----------------------------------------------------------------------------------------- responsive button ------------------------------------------------------------------>								
							<i class="fa fa-bars"></i>
						</div>



<!----------------------------------------------------------------------------------------- Navagation links for website -------------------------------------------------------------->							
						<ul class="main-menu">
							<li><a href="index.php">Home</a></li>
					        <li><a href="contact.php">Contact</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->
<!----------------------------------------------------------------------------------------- Navagation links for website end -------------------------------------------------------------->	


<!----------------------------------------------------------------------------------------- Hero section  -------------------------------------------------------------->	
	<!-- Hero section -->
	<section class="hero-image">
		<div class="container hero-text text-white">
			<h2>Find your home not just a house </h2> 
			 <p>Search real estate property's in your local area</p> 
			<!-- <a href="#" class="site-btn">VIEW DETAIL</a> --> 
		 </div>
	</section> 
	<!-- Hero section end -->
<!----------------------------------------------------------------------------------------- hero section end-------------------------------------------------------------->	






<!----------------------------------------------------------------------------------------- search filter form -------------------------------------------------------------->	
	<!-- Filter form section -->
	<!--<div class="filter-search">
		<div class="container">
			<form class="filter-form">
				<input type="text" placeholder="Enter a street name, address number or keyword">
				<select>
					<option value="City">City</option>
				</select>
				<select>
					<option value="City">State</option>
				</select>
				<button class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div> -->
	<!-- Filter form section end -->
<!----------------------------------------------------------------------------------------- search filter form end -------------------------------------------------------------->	







<!----------------------------------------------------------------------------------------- recent properties  -------------------------------------------------------------->	
	<!-- Properties section -->
<!-- <section class="properties-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>RECENT PROPERTIES</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="propertie-item set-bg" data-setbg="img/propertie/1.jpg">
						<div class="sale-notic">FOR SALE</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>176 Kingsberry, Dr Anderson</h5>
								<p><i class="fa fa-map-marker"></i> Rochester, NY 14626</p>
							</div>
							<div class="price">$1,777,000</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="propertie-item set-bg" data-setbg="img/propertie/2.jpg">
						<div class="rent-notic">FOR Rent</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>45 Lianne Dr, Greece Street</h5>
								<p><i class="fa fa-map-marker"></i> Tasley, VA 23441</p>
							</div>
							<div class="price">$1255/month</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="propertie-item set-bg" data-setbg="img/propertie/3.jpg">
						<div class="sale-notic">FOR SALE</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>6101 Aqua Ave Apt 603</h5>
								<p><i class="fa fa-map-marker"></i> Miami Beach, FL 33141</p>
							</div>
							<div class="price">$150,000</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="propertie-item set-bg" data-setbg="img/propertie/4.jpg">
						<div class="rent-notic">FOR Rent</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>339 N Oakhurst Dr Apt 303</h5>
								<p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
							</div>
							<div class="price">$3000/month</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Properties section end -->
<!----------------------------------------------------------------------------------------- recent properties end  -------------------------------------------------------------->	






<!----------------------------------------------------------------------------------------- services section   -------------------------------------------------------------->	
	<!-- Services section -->
	<!-- <section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/service.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Consultant Service</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Properties Management</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Renting and Selling</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Services section end -->
<!----------------------------------------------------------------------------------------- services section end  -------------------------------------------------------------->	



<!------------------- loop featured properties ------------------->	
	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Featured Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg ="img/feature/macpherson_crescent.jpg">
							<div class="rent-notic">FOR RENT</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>1 Macpherson Crescent</h5>
								<p><i class="fa fa-map-marker"></i> Grafton NSW 2460</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<!-- <p><i class="fa fa-th-large"></i> 800 Square foot</p> -->
										<p><i class="fa fa-bed"></i> 3 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 1 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
									    <p><i class="fa fa-user"></i> Allison Whaites</p>
									</div>
									<div class="rf-right">
										 <!-- <p><i class="fa fa-clock-o"></i> 1 days ago</p> -->
									</div>	
								</div>
							</div>
							<a href="http://www.fngrafton.com.au/real-estate/1258059/1-macpherson-crescent-grafton-nsw-2460" class="room-price">$460</a>
						</div>
					</div>
				</div>



				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/gosford_close.jpg">
							<div class="sale-notic">FOR Auction</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>2/15 Gosford Close</h5>
								<p><i class="fa fa-map-marker"></i> Grafton NSW 2460</p>
								<p>Saturday 13 April at 1:30pm</p>

							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<!-- <p><i class="fa fa-th-large"></i> 1500 Square foot</p> -->
										<p><i class="fa fa-bed"></i> 3 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Allison Whaites </p> 
									</div>
									<div class="rf-right">
										<!-- <p><i class="fa fa-clock-o"></i> 1 days ago</p> -->
									</div>	
								</div>
							</div>
							 <a href="http://www.fngrafton.com.au/real-estate/1238184/2-15-gosford-close-grafton-nsw-2460" class="room-price"> For Auction</a> 
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/turf_street.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>180 Turf Street</h5>
								<p><i class="fa fa-map-marker"></i> Grafton NSW 2460 </p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<!-- <p><i class="fa fa-th-large"></i> 1500 Square foot</p> -->
										<p><i class="fa fa-bed"></i> 5 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 3 Garages</p>
										<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
									<p><i class="fa fa-user"></i> Allison Whaites</p> 
									</div>
									<div class="rf-right">
										<!-- <p><i class="fa fa-clock-o"></i> 1 days ago</p> -->
									</div>	
								</div>
							</div>
							<a href="http://www.fngrafton.com.au/real-estate/1179561/180-turf-street-grafton-nsw-2460" class="room-price">$375,000</a>
						</div>
					</div>
				</div>


			

					<!-- feature -->
					<!-- <div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/4.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>28 Quaker Ridge Road, Manhasset</h5>
								<p><i class="fa fa-map-marker"></i> 28 Quaker Ridge Road, Manhasset</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1200 Square foot</p>
										<p><i class="fa fa-bed"></i> 12 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 3 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Sasha Gordon </p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$5,600,000</a>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6"> -->
					<!-- feature -->
					<!-- <div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/5.jpg">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>Sofi Berryessa 750 N King Road</h5>
								<p><i class="fa fa-map-marker"></i> San Jose, CA 95133</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 500 Square foot</p>
										<p><i class="fa fa-bed"></i> 4 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Gina Wesley</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,600/month</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6"> -->
					<!-- feature -->
					<!-- <div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/6.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>1203 Orren Street, Northeast</h5>
								<p><i class="fa fa-map-marker"></i> Washington, DC 20002</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 700 Square foot</p>
										<p><i class="fa fa-bed"></i> 7 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 7 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Sasha Gordon </p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,600,000</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</section>
<!------------------- loop featured properties end ------------------->	
	<div class="container">
				<div class="section-title text-center">
					<h3>OUR AGENTS</h3>
					<p>Our directory of real estate agents who can help you</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/allison_small.jpg" alt="person">
								<div class="member-social">
									<a href="https://www.facebook.com/firstnationalgrafton/"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/graftonrealestate/"><i class="fa fa-instagram"></i></a>
									<!-- <a href=""><i class="fa fa-twitter"></i></a> -->
								</div>
							</div>
							<div class="member-info">
								<h5>Allison Whaites</h5>
								<span>Real Estate  Agent and Property Management</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>P 02 6642 8554</p>
									<p><i class="fa fa-phone"></i>M 0487 289 471</p>
									<p><i class="fa fa-envelope"></i>allison@fngrafton.com.au</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 about-text-left">
					<h5>ABOUT Allison Whaites</h5>
					<br>
					<p class="about-agent">Allison is a local Licensed Real Estate Professional, who specialises in office management, Property Sales, both residential and rural, property management and Fair Trading compliance. With many years experience in the local Grafton market and also out of area, allows her to have a well-rounded picture of all facets of the local and national real estate industry.</p>
					<p class="about-agent">Being a long time Grafton local and having raised her children in the area, Allison enjoys being part of the wider community by fundraising, being involved in charity events, supporting local businesses via social media and hosting free real estate information sessions. She loves the industry's dynamic nature and is determined to excel and reach her real estate goals.</p>
					<p class="about-agent">Allison also enjoys interacting with people, with clients valuing her friendly and supportive nature as well as her drive to deliver the best results possible.</p>
				</div>
		</div>
</div>






<!----------------------------------------------------------------------------------------- Feature category section  -------------------------------------------------------------->	
	<!-- feature category section -->
	<!-- <section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LOOKING PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/1.jpg" alt="">
					<h5>Apartment for rent</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5>Family Home</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5>Resort Villas</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5>Office Building</h5>
				</div>
			</div>
		</div>
	</section> -->
	<!-- feature category section end-->

<!----------------------------------------------------------------------------------------- Feature category section end  -------------------------------------------------------------->	







<!----------------------------------------------------------------------------------------- Gallery section -------------------------------------------------------------->	
	<!-- Gallery section -->
<!-- <section class="gallery-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Popular Places</h3>
				<p>We understand the value and importance of place</p>
			</div>
			<div class="gallery">
				<div class="grid-sizer"></div>
				<a href="#" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg">
					<div class="gi-info">
						<h3>New York</h3>
						<p>118 Properties</p>
					</div>
				</a>
				<a href="#" class="gallery-item grid-wide set-bg" data-setbg="img/gallery/2.jpg">
					<div class="gi-info">
						<h3>Florida</h3>
						<p>112 Properties</p>
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
					<div class="gi-info">
						<h3>San Jose</h3>
						<p>72 Properties</p>
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg">
					<div class="gi-info">
						<h3>St Louis</h3>
						<p>50 Properties</p>
					</div>
				</a>
				
			</div>
		</div>
	</section> -->
	<!-- Gallery section end -->
<!----------------------------------------------------------------------------------------- Gallery section end -------------------------------------------------------------->	






<!----------------------------------------------------------------------------------------- Review section  -------------------------------------------------------------->	
	<!-- Review section -->
	<!-- <section class="review-section set-bg" data-setbg="img/review-bg.jpg">
		<div class="container">
			<div class="review-slider owl-carousel">
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Review section end-->
<!----------------------------------------------------------------------------------------- Review section end -------------------------------------------------------------->	






<!-----------------------------------------------------------------------------------------  Blog section  ------------------------------------------------------------------->	
	<!-- Blog section -->
	<!--<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LATEST NEWS</h3>
				<p>Real estate news headlines around the world.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="img/blog/1.jpg" alt="">
					<h5><a href="single-blog.html">Housing confidence hits record high as prices skyrocket</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>Amanda Seyfried</span>
						<span><i class="fa fa-clock-o"></i>25 Jun 201</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="img/blog/2.jpg" alt="">
					<h5><a href="single-blog.html">Taylor Swift is selling her $2.95 million Beverly Hills mansion</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>Amanda Seyfried</span>
						<span><i class="fa fa-clock-o"></i>25 Jun 201</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="img/blog/3.jpg" alt="">
					<h5><a href="single-blog.html">NYC luxury housing market saturated with inventory, says celebrity realtor</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>Amanda Seyfried</span>
						<span><i class="fa fa-clock-o"></i>25 Jun 201</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Blog section end -->
<!----------------------------------------------------------------------------------------- blog section end -------------------------------------------------------------->	






<!----------------------------------------------------------------------------------------- client section  -------------------------------------------------------------->	
	<!-- Clients section -->
	<!--<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div> -->
	<!-- Clients section end -->
<!----------------------------------------------------------------------------------------- client section end -------------------------------------------------------------->	





<!----------------------------------------------------------------------------------------- Footer section -------------------------------------------------------------->	
	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footerbg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">

<!----------------------------------------------------------------------------------------- logo and texted -------------------------------------------------------------->	
					<!-- <img src="img/logo.png" alt=""> -->
					<!-- <p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p> -->
<!----------------------------------------------------------------------------------------- logo and texted end -------------------------------------------------------------->	

<!----------------------------------------------------------------------------------------- social media links -------------------------------------------------------------->	
					<div class="social">
						<h5 class="fw-title">Follow US</h5>
						<a href="https://www.facebook.com/firstnationalgrafton/"><i class="fa fa-facebook"></i></a>
						<!-- <a href="#"><i class="fa fa-twitter"></i></a> --> 
						<a href="https://www.instagram.com/graftonrealestate/"><i class="fa fa-instagram"></i></a>
						<!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
						<!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
					</div> 
<!----------------------------------------------------------------------------------------- social media links end -------------------------------------------------------------->	
				</div>
				
<!----------------------------------------------------------------------------------------- contact infromation -------------------------------------------------------------->	
            <div class="col-lg-3 col-md-6 footer-widget">	
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>109 Pound Street, Grafton </p>
						<p><i class="fa fa-phone"></i>P 02 6642 8554</p>
						<p><i class="fa fa-phone"></i>M 0487 289 471</p>
						<p><i class="fa fa-envelope"></i>allison@fngrafton.com.au</p>
						<p><i class="fa fa-clock-o"></i>Mon - Fri, 08 AM - 06 PM <Br> Sat,  08 AM - 12 PM</p>
					</div>
				</div> 
<!----------------------------------------------------------------------------------------- contact infromation end -------------------------------------------------------------->	


<!----------------------------------------------------------------------------------------- popularplaces  ----------------------------------------------------------------------->	
			<!--	<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Florida</a></li>
							<li><a href="">New York</a></li>
							<li><a href="">Washington</a></li>
							<li><a href="">Los Angeles</a></li>
							<li><a href="">Chicago</a></li>
						</ul>
						<ul>
							<li><a href="">St Louis</a></li>
							<li><a href="">Jacksonville</a></li>
							<li><a href="">San Jose</a></li>
							<li><a href="">San Diego</a></li>
							<li><a href="">Houston</a></li>
						</ul>
					</div>
				</div> -->

<!----------------------------------------------------------------------------------------- popularplaces end -------------------------------------------------------------->


<!----------------------------------------------------------------------------------------- newletter ---------------------------------------------------------------------->		
				<!--<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div> -->
<!----------------------------------------------------------------------------------------- newletter end -------------------------------------------------------------->	

			</div>

<!----------------------------------------------------------------------------------------- bottom page links -------------------------------------------------------------->				
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<!-- <li><a href="">Featured Listing</a></li> -->
						<!-- <li><a href="">About us</a></li> -->
						<!-- <li><a href="">Pages</a></li> -->
						<!-- <li><a href="">Blog</a></li> -->
						<li><a href="contact.php">Contact</a></li>  
					</ul>
				</div>
<!----------------------------------------------------------------------------------------- bottom page links end -------------------------------------------------------------->	



<!----------------------------------------------------------------------------------------- copyright  -------------------------------------------------------------->	
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
<!----------------------------------------------------------------------------------------- copyright end -------------------------------------------------------------->	
	</footer>
	<!-- Footer section end -->
 <!----------------------------------------------------------------------------------------- Footer section end -------------------------------------------------------------->	    



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>