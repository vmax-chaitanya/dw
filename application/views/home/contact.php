<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
			<div class="page-header-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/page-header-bg.jpg)">
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
					<h2>contact</h2>
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
							<h3 class="contact-info__title">About</h3>
							<p class="contact-info__text">DigitalWin
								Business Agency is a dynamic and
								results-driven digital marketing agency
								dedicated to helping businesses thrive in
								the digital age.</p>
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
								Hyderabad - 500085
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
								<br>
								<br>

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
							<form action="#" id="contact-form" name="contact">
								<div class="row">
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Your name" name="name">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="email" placeholder="Email address" name="email">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Phone number" name="mobile" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Subject" name="subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="comment-form__input-box">
											<div class="row">
												<?php foreach ($services as $service) : ?>
													<div class="col-xl-6" style="">
														<input type="checkbox" id="service_<?php echo $service['id'] ?>" name="service[]" value="<?php echo $service['id'] ?>">
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
											<textarea name="message" placeholder="Write a message"></textarea>
										</div>
										<button type="submit" class="thm-btn comment-form__btn">send
											a message</button>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11713.438823203016!2d78.38269015541992!3d17.4893101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91702e9ced71%3A0x2f98a8d51d48ba5e!2sLenskart.com%20at%20Kukatpally%2C%20Hyderabad!5e1!3m2!1sen!2sin!4v1686419304737!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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

<!-- Mirrored from qutiiz-html.vercel.app/main-html/<?php echo base_url(); ?>contact by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:41 GMT -->

</html>
