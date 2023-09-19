<!DOCTYPE html>
<html lang="en">




<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
        .about-page__img img{
            object-fit: cover !important;
        }
        p {
    margin-top: 0;
    margin-bottom: 1rem;
    text-align: justify;
    /* line-height: 26px; */
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
            <div class="page-header-bg"
                style="background-image: url(<?php echo base_url('' . $services_detail['banner_image']); ?>)">
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
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">service</li>
                    </ul> -->
                    <h2> <?php echo $services_detail['banner_text']; ?></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Service Details Start-->
        <section class="service-details pt-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__sidebar">
                            <div class="service-details__sidebar-service">
                                <ul class="service-details__sidebar-service-list list-unstyled">
                                    <?php $i = 1;
                                    foreach ($services as $service): ?>
                                        <li <?php echo ($service['id'] == $this->uri->segment(3)) ? "class='current'" : "class=''"; ?>><a
                                                href="<?php echo base_url(); ?>service-detail/<?php echo $service['type']; ?>/<?php echo $service['id']; ?>">
                                                <?php echo $service['name']; ?> <span class="icon-right-arrow"></span>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="contact-page__form mt-3">
                                <form id="contact-form" name="contact" method="POST" class=""
                                    action="">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
										<div class="comment-form__input-box" style="padding:15px 0px 15px 0px !important">
											<select class="select-pad" name="copoun_select" id="copoun_select">
											<option value="2">Do You Have A Copoun</option>
											<option value="1">Yes</option>
											<option value="2">No</option>
											</select>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Enter Copoun" name="copoun_id" id="copoun_id" >
										</div>
									</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <input type="hidden" name="services_ids"
                                                value="<?php echo $this->uri->segment(2); ?>">
                                            
                                            <button type="submit" class="thm-btn comment-form__btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="about-page__img cardimg">
                                <img src="<?php echo base_url('' . $services_detail['image']); ?>" alt="">
                            </div>
                            <div class="service-details__content">
                                <h2 class="service-details__title">
                                    <?php echo $services_detail['name']; ?>
                                </h2>

                                <p class="about-page__right-text-2">
                                    <?php echo $services_detail['description']; ?>
                                </p>
                                <!-- <p class="service-details__text-3">Tincidunt elit magnis nulla facilisis sagittis sapien
                                    nunc Many desktop publishing packages and web page editors amet ultrices dolores sit
                                    ipsum velit purus aliquet massa fringilla leo orci. Sapien nunc amet ultrices.</p> -->
                            </div>
                            <!-- <div class="service-details__bottom">
                                <ul class="list-unstyled service-details__bottom-list">
                                    <li class="service-details__bottom-single">
                                        <div class="service-details__bottom-icon">
                                            <span class="icon-front-end"></span>
                                            <h4 class="service-details__bottom-title">content & Structure</h4>
                                            <p class="service-details__bottom-text">Duis aute irure dolor in repreh
                                                enderit nulla voluptate velit.</p>
                                        </div>
                                    </li>
                                    <li class="service-details__bottom-single">
                                        <div class="service-details__bottom-icon">
                                            <span class="icon-investigation"></span>
                                            <h4 class="service-details__bottom-title">Analysis & Planning</h4>
                                            <p class="service-details__bottom-text">Duis aute irure dolor in repreh
                                                enderit nulla voluptate velit.</p>
                                        </div>
                                    </li>
                                    <li class="service-details__bottom-single">
                                        <div class="service-details__bottom-icon">
                                            <span class="icon-increment"></span>
                                            <h4 class="service-details__bottom-title">Solutions & Findings</h4>
                                            <p class="service-details__bottom-text">Duis aute irure dolor in repreh
                                                enderit nulla voluptate velit.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if(count($services_module1) > 0):?>
        <!--Services Two Start-->
        <section class="services-two pt-5 pb-0">
            <div class="container">
            <div class="section-title text-center">
                        <span class="section-title__tagline"><?php echo isset($services_detail['module_quote_1']) ?  $services_detail['module_quote_1'] : "Quote"; ?></span>
                        <h2 class="section-title__title"> <?php echo isset($services_detail['module_name_1']) ?  $services_detail['module_name_1'] : "Heading"; ?></h2>
                    </div>
                <div class="row">
                    <?php $i = 1;
                            foreach ($services_module1 as $service): ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="website-development.html"><?php echo $service['name']; ?></a></h3>
                            <p class="services-two__text"><?php echo $service['description']; ?></p>
                            <a class="services-two__arrow" href="website-development.html"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
              
            </div>
        </section>
        <!--Services Two End-->
        <?php endif;?>

        <?php if(count($services_module2) > 0):?>
        <!--Services Two Start-->
        <section class="services-two pt-5 pb-0">
            <div class="container">
            <div class="section-title text-center">
			<span class="section-title__tagline"><?php echo isset($services_detail['module_quote_2']) ?  $services_detail['module_quote_2'] : "Quote"; ?></span>
                        <h2 class="section-title__title"> <?php echo isset($services_detail['module_name_2']) ?  $services_detail['module_name_2'] : "Heading"; ?></h2>
                    </div>
              
                <div class="row">
                    <?php $i = 1;
                            foreach ($services_module2 as $service): ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="website-development.html"><?php echo $service['name']; ?></a></h3>
                            <p class="services-two__text"><?php echo $service['description']; ?></p>
                            <a class="services-two__arrow" href="website-development.html"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--Services Two End-->
        <?php endif;?>

		
        <?php if(count($services_module3) > 0):?>
        <!--Services Two Start-->
        <section class="services-two pt-5 pb-0  ">
            <div class="container">
            <div class="section-title text-center">
			<span class="section-title__tagline"><?php echo isset($services_detail['module_quote_3']) ?  $services_detail['module_quote_3'] : "Quote"; ?></span>
                        <h2 class="section-title__title"> <?php echo isset($services_detail['module_name_3']) ?  $services_detail['module_name_3'] : "Heading"; ?></h2>
                    </div>
              
                <div class="row">
                    <?php $i = 1;
                            foreach ($services_module3 as $service): ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="website-development.html"><?php echo $service['name']; ?></a></h3>
                            <p class="services-two__text"><?php echo $service['description']; ?></p>
                            <a class="services-two__arrow" href="website-development.html"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--Services Two End-->
        <?php endif;?>


        <?php if (count($service_faqs) > 0) { ?>

            <!--FAQ Page Start-->
            <section class="faq-page pt-5 pb-0">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span>
                        <h2 class="section-title__title">Faqs</h2>
                        <div class="row" style="text-align:left">
                            <?php $i = 1;
                            foreach ($service_faqs as $faqs): ?>
                                <div class="col-xl-6 col-lg-6 mt-2 mb-2">
                                    <div class="faq-page__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion2">
                                            <div class="accrodion">
                                                <div class="accrodion-title1">
                                                    <h4 class="text-align">
                                                        <?php echo $faqs['question']; ?>
                                                    </h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p class="text-align">
                                                            <?php echo $faqs['answer']; ?>
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
                    <h2 class="section-title__title">similar Service</h2>
                </div>
                <div class="row">
                <?php $i = 1;
                       foreach ($services as $key=>$service): 
                       if($key < 3):?>
                    <div class="col-xl-4 col-lg-4">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                
                                <img src="<?php echo base_url('' . $service['image']); ?>"
                                    alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url();?>service-detail/<?php echo $service['id'];?>"><?php echo $service['name']; ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php endif; endforeach;?>
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


<!-- Mirrored from qutiiz-html.vercel.app/main-html/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:32 GMT -->

</html>
