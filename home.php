<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<?php include("header.php"); ?>

<div class="container clearfix"></div>
<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">
			<div id="page-menu-wrap">
			</div>
		</div><!-- #page-menu end -->


		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">LEARNING SYSTEM</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200"></p>
								</div>
							</div>
							<div class="video-wrap">
								<img src="images/slider/slide2.png">
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('images/slider/Slide1.png'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">LEARNING SYSTEM</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Universitas PGRI Madiun</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-lg-5">
							<div class="heading-block topmargin">
								<h1>Selamat datang di Elearning Sistem <br>UNIPMA</h1>
							</div>
							<p class="lead">menjadi perguruan tinggi yang unggul di tingkat nasional dan menghasilkan lulusan yang cerdas, berdaya saing, dan memiliki kemampuan berwirausaha.</p>
						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="images/services/bglauncer.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								<!-- <img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad"> -->
							</div>

						</div>

					</div>
				</div>

				<div class="section nobottommargin">
					<div class="container clear-bottommargin clearfix">

						<div class="row topmargin-sm clearfix">

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-smile inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4>Positive Attitude</h4>
								</div>
								<p>Jadilah pribadi yang memiliki komitmen kuat dan sikap positif yang tak tergoyahkan, karena itulah yang membedakan kita dari yang lain dan membawa kita menuju keberhasilan yang gemilang.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-users inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4>Communication Skills</h4>
								</div>
								<p>Kemampuan komunikasi yang baik adalah kunci untuk membangun hubungan yang kuat, mempengaruhi orang lain, dan meraih kesuksesan dalam berbagai aspek kehidupan.</p>
							</div>

							<div class="col-md-4 bottommargin">
								<i class="i-plain color i-large icon-time inline-block" style="margin-bottom: 15px;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4>Great at Time and Task Management</h4>
								</div>
								<p>Kemampuan manajemen waktu dan tugas adalah kunci untuk mencapai produktivitas dan kesuksesan dalam kehidupan kita.</p>
							</div>

						</div>

					</div>
				</div>

				<div class="container clearfix" id="features">

					<div class="row topmargin-lg bottommargin-sm">

						<div class="heading-block center">
							<h2>UNIVERSITAS PGRI MADIUN</h2>
							<span class="divcenter">Sebagai salah satu Perguruan tinggi yang selalu berkeinginan meningkatkan eksistensinya, UNIPMA terus berupaya meningkatkan kualitas secara berkelanjutan (continuous improvement) yang berlandaskan pada good university governance.</span>
						</div>

						<!-- <div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-user4"></i></a>
								</div>
								<h3>Qualified, Passionate Instructors</h3>
								<p>We have Exceptional Certified Professional Instructors that deliver video lectures.</p>
							</div>

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line2-magic-wand"></i></a>
								</div>
								<h3>Services</h3>
								<p>We are also providing services in Web &amp; Software Development.</p>
							</div>

							

						</div>

						<div class="col-md-4 hidden-sm bottommargin center">
							<img src="images/services/iphone7.png" alt="iphone 2">
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-facetime-video"></i></a>
								</div>
								<h3>Video Lectures</h3>
								<p>We are also providing international standard lectures on YouTube.</p>
							</div>

							<div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check"></i></a>
								</div>
								<h3>Endless Possibilities</h3>
								<p>We are providing Endless Possibilities for students</p>
							</div> -->

							

						</div>

					</div>

				</div>


				<div class="row clearfix bottommargin-lg common-height">

				
					<div class="col-md-4 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-diamond2"></i>
							<div class="counter counter-lined"><span data-from="2" data-to="20" data-refresh-interval="100" data-speed="2500"></span></div>
							<h5>Team Members</h5>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-trophy"></i>
							<div class="counter counter-lined"><span data-from="1" data-to="10" data-refresh-interval="25" data-speed="4000"></span></div>
							<h5>No. of Awards</h5>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-file"></i>
							<div class="counter counter-lined"><span data-from="1" data-to="50" data-refresh-interval="30" data-speed="3500"></span></div>
							<h5>No. of Projects</h5>
						</div>
					</div>

				</div>

				
				


				<div class="clear"></div>

				
				<div class="section parallax dark nobottommargin" data-stellar-background-ratio="0.4">

					<div class="heading-block center">
						<h3>Our Heroes</h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/2.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Kurang cerdas dapat diperbaiki dengan belajar. Kurang cakap dapat dihilangkan dengan pengalaman. Namun tidak jujur itu sulit diperbaiki</p>
										<div class="testi-meta">
											Bung Hatta
											<span>Pahlawan Indonesia</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/3.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Banyak hal yang bisa menjatuhkanmu. Tapi satu-satunya hal yang benar-benar dapat menjatuhkanmu adalah sikapmu sendiri</p>
										<div class="testi-meta">
										RA Kartini 
											<span>Pahlawan Indonesia</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/1.png" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Lawan sastra ngesti mulya (Dengan ilmu kita menuju kemuliaan)</p>
										<div class="testi-meta">
											Ki Hadjar Dewantara
											<span>Pahlawan Indonesia</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- <div class="section notopmargin notopborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>Latest from the Blog</h3>
						</div>
					</div>
				</div> -->

				
				
									
					</div>
				
		</section><!-- #content end -->

<?php include("footer.php"); ?>