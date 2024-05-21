<!DOCTYPE html>
<html lang="en">




<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include("includes/styles.php"); ?>
    <style>
        .cardimg {
            overflow: hidden
        }

        .cardimg img {
            height: 100%;
            max-height: 550px;
            width: 100%;
        }

        .text-align li {
            text-align: left;
        }
    </style>
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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url('' . $training_detail['banner_image']); ?>)">
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
                        <li class="active">training</li>
                    </ul> -->
                    <h2>Training Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__sidebar">
                            <div class="service-details__sidebar-service">
                                <ul class="service-details__sidebar-service-list list-unstyled">
                                    <?php $i = 1;
                                    foreach ($trainings as $training) : ?>
                                        <li <?php echo ($training['training_url'] == $this->uri->segment(2)) ? "class='current'" : "class=''"; ?>><a href="<?php echo base_url(); ?>training/<?php echo $training['training_url']; ?>">
                                                <?php echo $training['name']; ?> <span class="icon-right-arrow"></span>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="contact-page__form mt-3">
                                <form id="Trainingbrouchure" name="Trainingbrouchure" method="POST" class="" action="<?php echo base_url('training-enquiry'); ?>">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name1" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email1" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="mobile1" required onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject1" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode === 32" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message1" placeholder="Write a message"></textarea>
                                            </div>
                                            <input type="hidden" name="training_url" value="<?php echo $this->uri->segment(2); ?>">
                                            <div class="row mt-3">
											<div class="col-md-5">
												<p id="image_captcha"><?php echo $captcha_image; ?></p>
											</div>
											<div class="col-md-2">
												<a href="javascript:void(0);" class="captcha-refresh sm"><img class="capture-referwch-image" src="<?php echo base_url() . 'assets/home/images/refresh.png'; ?>" /></a>
											</div>
											<div class="col-md-5">
												<div class="comment-form__input-box">
													<input type="text" placeholder="Enter Captcha" name="captcha1" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
												</div>
											</div>
										</div>
                                            <button type="submit" class="thm-btn comment-form__btn ajax-form"><span class="button-text">Download Brouchure</span>
        								<span class="loading-indicator"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="about-page__img cardimg">
                                <img src="<?php echo base_url('' . $training_detail['image']); ?>" alt="<?php echo ucwords(strtolower($training_detail['name'])); ?>">
                            </div>
                            <div class="service-details__content">
                                <h2 class="service-details__title">
                                    <?php echo ucwords(strtolower($training_detail['name'])); ?>
                                </h2>

                                <p class="service-details__text-3">
                                    <?php echo $training_detail['description']; ?>
                                </p>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Service Details End-->
        <?php if (count($key_highlites) > 0) { ?>
            <!--Key highlites Page Start-->
            <section class="faq-page">
                <div class="container">
                    <div class="section-title text-center">
                        <!-- <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span> -->
                        <h2 class="section-title__title">Key Topics</h2>
                        <div class="row">
                            <?php $i = 1;
                            foreach ($key_highlites as $key_highlite) : ?>

                                <div class="col-xl-4">
                                    <div class="service-details__benefits-content">

                                        <ul class="list-unstyled service-details__benefits-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-draw-check-mark"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        <?php echo $key_highlite['name']; ?>
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!--Key highlites Page End-->
        <?php } ?>
        <?php if (count($curriculums) > 0) { ?>

            <!--FAQ Page Start-->
            <section class="faq-page " style="padding-top: 10px !important;">
                <div class="container">
                    <div class="section-title text-center">
                        <!-- <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span> -->
                        <h2 class="section-title__title">Curriculum</h2>
                        <div class="row" style="text-align:left; padding-top:30px !important">
                            <?php $i = 1;
                            foreach ($curriculums as $curriculum) : ?>
                                <div class="col-xl-12 col-lg-12 mt-2 mb-2">
                                    <div class="faq-page__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion2">
                                            <div class="accrodion">
                                                <div class="accrodion-title1">
                                                    <h4 class="text-align">
                                                        <?php echo $curriculum['name']; ?>
                                                    </h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p class="text-align">
                                                            <?php echo $curriculum['description']; ?>
                                                        </p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>
            <!--FAQ Page End-->
        <?php } ?>


        <!--Similar Work Start-->
        <section class="similar-work pt-5 pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">recent Service</span> -->
                    <h2 class="section-title__title">Other Trainings</h2>
                </div>
                <div class="row">
                    <?php $i = 1;
                    foreach ($upcoming_trainings as $key => $trainings) :
                        if ($key < 3) : ?>
                            <div class="col-xl-4 col-lg-4">
                                <!--Portfolio One Single-->
                                <div class="project-one__single">
                                    <div class="project-one__img">

                                        <img src="<?php echo base_url('' . $trainings['image']); ?>" alt="<?php echo ucwords(strtolower($training_detail['name'])); ?>">
                                        <div class="project-one__hover">
                                            <p class="project-one__tagline">Trainings</p>
                                            <h3 class="project-one__title"><a href="<?php echo base_url(); ?>training/<?php echo $trainings['training_url']; ?>">
                                                    <?php echo ucfirst(strtolower($trainings['name'])); ?>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endif;
                    endforeach; ?>
                </div>
            </div>
        </section>
        <!--Similar Work End-->

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