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
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">training</li>
                    </ul>
                    <h2>project Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

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
                                <form action="https://qutiiz-html.vercel.app/main-html/<?php echo base_url(); ?>assets/home/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
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
                                                <input type="email" placeholder="Subject" name="subject"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode === 32">
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
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/project-page-img-4.jpg" alt="">
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
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/project-page-img-5.jpg" alt="">
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
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/project-page-img-6.jpg" alt="">
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


    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
</body>

</html>