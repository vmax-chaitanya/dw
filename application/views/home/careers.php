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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/banner_careers.jpg)">
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
                        <li class="active">about us</li>
                    </ul> -->
                    <h2>Careers</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Page Start-->
        <section class="about-page " style="padding: 20px 0px 30px 0px !important;">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="about-page__right">

                            <div class="section-title text-left">
                                <span class="section-title__tagline">Careers</span>
                                <h2 class="section-title__title">Are you looking for an amazing opportunity? Learn about
                                    our company</h2>
                            </div>
                            <div class="about-page__img cardimg">
                                <img src="<?php echo base_url(); ?>assets/home/images/home_images/careers.jpg" alt="career image">
                            </div>
                            <p class="about-page__right-text-2"> DigitalWin Business Agency is continuously looking for
                                qualified professionals to join its ever-expanding talent pool and help the firm thrive.
                                The business is an equal opportunity employer dedicated to tailoring employment to the
                                skills of those seeking innovative career possibilities in Hyderabad.</p>

                            <div class="about-page__points-box">
                                <ul class="list-unstyled why-choose-one__points">
                                    <?php $i = 1;
                                    foreach ($careers_list as $careers_list) : ?>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-draw-check-mark"></span>
                                            </div>
                                            <div class="text">
                                                <p>
                                                    <?php echo $careers_list['poisition']; ?>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 " style="padding-top: 200px !important;">
                        <!-- <div class="about-page__left"> -->
                        <div class="contact-page__form mt-3">
                            <h2 class="section-title__title pb-5 ">Careers Form</h2>

                            <form action="#" id="career-form" name="careeerForm" class="career-form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="career_name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="career_email" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="careeer_mobile" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <select name="career_list" id="copoun_select" style="display: block !important;">
                                                <!-- <option style="color:#726d7b !important" value="">Select Job</option> -->
                                                <?php $i = 1;
                                                foreach ($careers_list_form as $val) : ?>
                                                    <option value="<?php echo $val['id']; ?>">
                                                        <?php echo $val['poisition']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                    <label>Resume</label>
                                    <div class="col-md-6">
                                        <div class="comment-form__input-box">
                                            <input type="file" placeholder="Resume" name="resume" style="display: block !important;" accept="application/pdf, application/msword,.doc,.docx, image/*">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                            <div class="comment-form__input-box">
                                                <input type="file" placeholder="Resume" name="resume" >
                                            </div>
                                        </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-xl-12" style="padding-top: 20px;">
                                        <div class=" comment-form__input-box">
                                            <textarea name="message" placeholder="Write a message" style="display: block !important;"></textarea>
                                        </div>
                                        <div class="row mt-3">
											<div class="col-md-4">
												<p id="image_captcha"><?php echo $captcha_image; ?></p>
											</div>
											<div class="col-md-3">
												<a href="javascript:void(0);" class="captcha-refresh sm"><img class="capture-referwch-image" src="<?php echo base_url() . 'assets/home/images/refresh.png'; ?>" /></a>
											</div>
											<div class="col-md-5">
												<div class="comment-form__input-box">
													<input type="text" placeholder="Enter Captcha" name="captcha" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
												</div>
											</div>
										</div>
                                        <button type="submit" class="thm-btn comment-form__btn mt-3">send
                                            a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--About Page End-->


        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->


    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
</body>


</html>