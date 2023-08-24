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
                style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/page-header-bg.jpg)">
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
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">training</li>
                    </ul>
                    <h2>project Details</h2>
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
                                    foreach ($trainings as $training): ?>
                                        <li <?php echo ($training['id'] == $this->uri->segment(2)) ? "class='current'" : "class=''"; ?>><a href="<?php echo base_url(); ?>training-detail/<?php echo $training['id']; ?>">
                                                <?php echo $training['name']; ?> <span class="icon-right-arrow"></span>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="contact-page__form mt-3">
                                <form id="contact-form" name="contact" method="POST" class=""
                                    action="<?php echo base_url('contact-insert'); ?>">
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
                                                <input type="text" placeholder="Phone number" name="mobile">
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
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <input type="hidden" name="services_ids"
                                                value="<?php echo $this->uri->segment(2); ?>">
                                            <input type="hidden" name="brochure"
                                                value=" <?php echo $training['brochure']; ?>">
                                            <button type="" class="thm-btn comment-form__btn">Download
                                                Brochure</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="about-page__img cardimg">
                                <img src="<?php echo base_url('' . $training['image']); ?>" alt="">
                            </div>
                            <div class="service-details__content">
                                <h2 class="service-details__title">
                                    <?php echo $training['name']; ?>
                                </h2>

                                <p class="service-details__text-3">
                                    <?php echo $training['description']; ?>
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
        <!--Service Details End-->
        <?php if (count($key_highlites) > 0) { ?>
            <!--Key highlites Page Start-->
            <section class="faq-page">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span>
                        <h2 class="section-title__title">Key Highlites</h2>
                        <div class="row">
                            <?php $i = 1;
                            foreach ($key_highlites as $key_highlite): ?>

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
            <section class="faq-page">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span>
                        <h2 class="section-title__title">Faqs</h2>
                        <div class="row" style="text-align:left">
                            <?php $i = 1;
                            foreach ($curriculums as $curriculum): ?>
                                <div class="col-xl-6 col-lg-6 mt-2 mb-2">
                                    <div class="faq-page__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion2">
                                            <div class="accrodion">
                                                <div class="accrodion-title">
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

        <!--About Page Start-->
        <section class="about-page" style="padding-bottom: 10px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-page__left">
                            <div class="about-page__img">
                                <img src="<?php echo base_url('' . $training['image']); ?>" alt="">
                            </div>
                            <!-- <div class="about-page__founded">
                                <h5>Founded <br> in 2014</h5>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-page__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">read about us</span> -->
                                <h2 class="section-title__title">
                                    <?php echo $training['name']; ?>
                                </h2>
                            </div>
                            <!-- <p class="about-page__right-text-1">We’re committed to delivering the best digital marketing
                                for your businesses</p> -->
                            <p class="about-page__right-text-2">
                                <?php echo $training['description']; ?>
                            </p>
                            <div class="about-page__points-box">
                                <ul class="list-unstyled about-page__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Develop a vision statement</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Grow your customer base</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-page__points about-page__points-two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Increase your monthly sales</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Beat your competition</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Page End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img">
                            <img src="<?php echo base_url('' . $training['image']); ?>" alt="">
                        </div>
                    </div>
                </div> -->
                <div class="project-details__content">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="project-details__content-left">

                                <ul class="list-unstyled project-details__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-increment"></span>
                                        </div>
                                        <div class="text">
                                            <h4>Attract and retain quality high paying customers</h4>
                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book has survived not only five centuries.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-checking"></span>
                                        </div>
                                        <div class="text">
                                            <h4>Strong business plan requires experience</h4>
                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen book has survived not only five centuries.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="contact-page__form">
                                <form
                                    action="https://qutiiz-html.vercel.app/main-html/<?php echo base_url(); ?>assets/home/inc/sendemail.php"
                                    class="comment-one__form contact-form-validated" novalidate="novalidate">
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
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <button type="submit" class="thm-btn comment-form__btn">Download
                                                Brochure</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__pagination-box">
                            <ul class="project-details__pagination list-unstyled">
                                <li class="next">
                                    <p class="project-details__pagination-sub-title">Previous project</p>
                                    <a href="#" aria-label="Previous">
                                        <span class="project-details__pagination-title">Filmor Experience</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="previous">
                                    <p class="project-details__pagination-sub-title">next project</p>
                                    <a href="#" aria-label="Next">
                                        <span class="project-details__pagination-title">Filmor Experience</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--Project Details End-->







        <!--Similar Work Start-->
        <section class="similar-work">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">recent training</span>
                    <h2 class="section-title__title">similar training</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/project-page-img-4.jpg"
                                    alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Fimlor Experience</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/project-page-img-5.jpg"
                                    alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Fimlor Experience</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/project-page-img-6.jpg"
                                    alt="">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Graphic</p>
                                    <h3 class="project-one__title"><a href="project-details.html">Fimlor Experience</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
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