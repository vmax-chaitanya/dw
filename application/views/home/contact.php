<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<?php include("includes/styles.php"); ?>
</head>

<body>
	<?php include("includes/preloader.php"); ?>
	<!-- /.preloader -->
	<div class="page-wrapper">
		<?php include("includes/header.php"); ?>

		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
		</div><!-- /.stricky-header -->

		<!--Page Header Start-->
		<section class="page-header">
			<div class="page-header-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/contact.jpg)">
			</div>
			<div class="page-header-border"></div>
			<div class="page-header-border page-header-border-two"></div>
			<div class="page-header-border page-header-border-three"></div>
			<div class="page-header-border page-header-border-four"></div>
			<div class="page-header-border page-header-border-five"></div>
			<div class="page-header-border page-header-border-six"></div>

			<div class="page-header-shape-1"></div>
			<div class="page-header-shape-2"></div>
			<div class="page-header-shape-3"></div>

			<div class="container">
				<div class="page-header__inner">
					<!-- <ul class="thm-breadcrumb list-unstyled">
						<li><a href="index.html">Home</a></li>
						<li class="active">contact</li>
					</ul> -->
					<h2>Contact Form</h2>
				</div>
			</div>
		</section>
		<!--Page Header End-->

		<!--Contact Info Start-->
		<section class="contact-info">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
						<!--Contact Info Single-->
						<div class="contact-info__single">
							<div class="contact-info__icon">
								<span class="icon-conversation"></span>
							</div>
							<h3 class="contact-info__title">Payment</h3>
							<p class="contact-info__text">DigitalWin
								Business Agency is a dynamic and
								results-driven digital marketing agency
								dedicated to helping businesses thrive in
								the digital age.</p>

								<button style="padding: left 20px; background-color:#9232b2" type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModalQR">
                               Open QR code
                            </button>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
						<!--Contact Info Single-->
						<div class="contact-info__single">
							<div class="contact-info__icon">
								<span class="icon-address"></span>
							</div>
							<h3 class="contact-info__title">address</h3>
							<p class="contact-info__text">DIGITALWIN
								BUSINESS AGENCY PVT LTD.,
								MIG-161, 3rd Floor, Above Lenskart, Opp Sri
								Sri Holistic Hospital, Road No 1, KPHB,
								Hyderabad - 500085,
								www.digitalwinbusinessagency.com
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
						<!--Contact Info Single-->
						<div class="contact-info__single contact-info__single-last">
							<div class="contact-info__icon">
								<span class="icon-contact"></span>
							</div>
							<h3 class="contact-info__title">contact</h3>
							<h4>
								<a href="mailto:info@digitalwinbusinessagency.com" class="contact-info__mail">info@digitalwinbusinessagency.com
								</a>
								<a href="tel:919154357401" class="contact-info__phone">+91
									9154357401</a>
								<a href="tel:919154357402" class="contact-info__phone">+91
									9154357402</a>
								<a href="tel:919154357402" class="contact-info__phone">+91
									9154357404</a>
								<a href="tel:040-42704708" class="contact-info__phone">
									040-42704708</a>


							</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Contact Info End-->

		<!--contact Page Start-->
		<section class="contact-page contact-page-two">
			<div class="container">
				<div class="section-title text-center">
					<span class="section-title__tagline">contact with us</span>
					<h2 class="section-title__title">have any questions?</h2>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="contact-page__form">
							<form action="#" id="contact-form" name="contact" class="contact-form">
								<div class="row">
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Your name" name="name">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="email" placeholder="Email address" name="email" required>
										</div>
									</div>

									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Phone number" name="mobile" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="10">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Subject" name="subject" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode === 32" >
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<select name="copoun_select" id="copoun_select" style="display: block !important;">
												<option style="color:#726d7b !important" value="">Do You Have A Copoun</option>
												<option value="1">Yes</option>
												<option value="2">No</option>
											</select>

										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Enter Copoun" name="copoun_id" id="copoun_id">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="comment-form__input-box">
											<div class="row">
												<div class="col-xl-6">
													<input type="checkbox" id="select-all" name="select-all">
													<label for="select-all" style="display:inline">Select All</label><br>
												</div>
												<?php foreach ($services as $service) : ?>
													<div class="col-xl-6">
														<input type="checkbox" class="service-checkbox" id="service_<?php echo $service['id'] ?>" name="service[]" value="<?php echo $service['id'] ?>">
														<label for="service_<?php echo $service['id'] ?>" style="display:inline"><?php echo $service['name'] ?></label><br>
													</div>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-12">
										<div class="comment-form__input-box">
											<textarea name="message" placeholder="Write a message" style="display: block !important;"></textarea>
											<input type="hidden" name="page_check" value="1" id="page_check" >
										</div>

										<div class="row mt-3">
											<div class="col-md-3">
												<p id="image_captcha"><?php echo $captcha_image; ?></p>
											</div>
											<div class="col-md-3">
												<a href="javascript:void(0);" class="captcha-refresh sm"><img class="capture-referwch-image" src="<?php echo base_url() . 'assets/home/images/refresh.png'; ?>" /></a>
											</div>
											<div class="col-md-6">
												<div class="comment-form__input-box">
													<input type="text" placeholder="Enter Captcha" name="captcha" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
												</div>
											</div>
										</div>



										<button type="submit" class="thm-btn comment-form__btn mt-3">
											<span class="button-text">Send a message</span>
											<span class="loading-indicator"></span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--contact Page End-->

		<!--Google Map Start-->
		<section class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15221.571488999034!2d78.4000756!3d17.4887495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xaddcaa3bf459be9f%3A0x68cfc58ca756b953!2sDigitalWin%20Business%20Agency%20%7C%20Digital%20Marketing%20Services%20%7C%20Digital%20Marketing%20Agency%20%7C%20SEO%20%7C%20SMM!5e0!3m2!1sen!2sin!4v1694330869412!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		</section>
		<!--Google Map End-->

		<!--Site Footer Start-->
		<?php include("includes/footer.php"); ?>
		<!--Site Footer End-->

	</div><!-- /.page-wrapper -->

	<?php include("includes/mobilenav.php"); ?>
	<!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<i class="icon-magnifying-glass"></i>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<?php include("includes/scripts.php"); ?>
</body>

</html>