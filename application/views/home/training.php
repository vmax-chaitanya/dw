<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include("includes/styles.php"); ?>
    <style>
        .blog-one__date {
            position: absolute;
            bottom: 0;
            right: 190px;
            background-color: var(--qutiiz-base);
            padding: 12px 19px;
            border-top-left-radius: 0px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 25px;
        }

        .blog-one__content {
            position: relative;
            display: block;
            background-color: rgb(255, 255, 255);
            box-shadow: 5px 8.66px 60px 0px rgb(4, 0, 11, 0.07);
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            padding: 12px 27px 27px;
        }

        .business-growth-one__single-img::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition-delay: .1s;
            transition-timing-function: ease-in-out;
            transition-duration: .7s;
            transition-property: all;
            /* background: rgba(var(--qutiiz-black-rgb), 0.7); */
            border-top-left-radius: var(--qutiiz-bdr-radius);
            border-top-right-radius: var(--qutiiz-bdr-radius);
            opacity: 0;
            z-index: 1;
            content: "";
        }

        .business-growth-one__single-img::before {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            /* background: var(--qutiiz-base); */
            height: 10px;
            content: "";
            z-index: 5;
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
                        <li class="active">Tranining</li>
                    </ul> -->
                    <h2>Tranining</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->



        <!--Blog Page Start-->
        <section class="blog-one blog-one__blog-page">
            <div class="container">
                <div class="section-title text-center">

                    <h2 class="section-title__title">Explore Our Programs</h2>
                    <span class="section-title__tagline">Short Term / Long Term Programs For Students And Working
                        Professionals</span>
                </div>
                <div class="row">
                    <?php $i = 1;
                    foreach ($trainings as $training) : ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <!--Blog One Start-->
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img src="<?php echo base_url('' . $training['image']); ?>" alt="<?php echo ucfirst(strtolower($training['name'])); ?>">
                                    <a href="<?php echo base_url(); ?>training/<?php echo $training['training_url']; ?>">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date" style="left:0px !important;right:288px !important">
                                        <p>
                                            <?php echo $training['duration']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <!-- <li><a href="#"><i class="fa fa-calendar"></i> <?php echo $training['duration']; ?></a></li> -->
                                        <!-- <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li> -->
                                    </ul>
                                    <!-- <p><a href="#"><i class="fa fa-calendar"></i> <?php echo $training['duration']; ?></a></p> -->

                                    <h3 class="blog-one__title">
                                        <a href="<?php echo base_url(); ?>training/<?php echo $training['training_url']; ?>"><?php echo ucfirst(strtolower($training['name'])); ?></a>
                                    </h3>
                                    <!-- <p>Online | Classroom </p> -->

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </section>
        <!--Blog Page End-->

        <?php if (count($certification_course) > 0) { ?>

            <!--Blog Page Start-->
            <section class="blog-one blog-one__blog-page">
                <div class="container">
                    <div class="section-title text-center">
                        <p class="section-title__tagline">Get certified by global certification bodies and deepen your
                            expertise</p>
                        <h2 class="section-title__title">Certification Courses</h2>
                    </div>
                    <div class="row">
                        <?php $i = 1;
                        foreach ($certification_course as $certification_course) : ?>

                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo  $i; ?>00ms">
                                <!--Blog One Start-->
                                <div class="blog-one__single">

                                    <div class="blog-one__content">

                                        <h3 class="blog-one__title">
                                            <a href="#"><?php echo $certification_course['name']; ?></a>
                                        </h3>
                                        <div class="blog-one__person">
                                            <div class="blog-one__person-img">
                                                <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="<?php echo $certification_course['name']; ?>">
                                            </div>
                                            <div class="blog-one__date">
                                                <p><?php echo $certification_course['tag']; ?></p>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled blog-one__meta mt-2">
                                            <li><a href="#"><i class="fa fa-star"></i> <?php echo $certification_course['rating']; ?></a></li>
                                            <li><a href="#"><i class="fa fa-users"></i> <?php echo $certification_course['learners']; ?> Learners</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>




                    </div>
                </div>
            </section>
            <!--Blog Page End-->
        <?php } ?>
        <?php if (count($tools) > 0) { ?>

            <!--Start Business Growth One-->
            <section class="business-growth-one">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span>
                        <h2 class="section-title__title">Tools You Will Master</h2>
                    </div>
                    <div class="business-growth-one__bottom">
                        <div class="row">
                            <?php $i = 1;
                            foreach ($tools as $tools) : ?>


                                <!--Start Business Growth One Single-->
                                <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.'<?php echo  $i; ?>'s">
                                    <div class="business-growth-one__single">
                                        <div class="business-growth-one__single-img">
                                            <img src="<?php echo base_url('' . $tools['image']); ?>" alt="<?php echo $tools['image']; ?>" />
                                        </div>

                                    </div>
                                </div>
                                <!--End Business Growth One Single-->
                            <?php $i++;
                            endforeach; ?>


                        </div>
                    </div>
                </div>
            </section>
            <!--End Business Growth One-->
        <?php } ?>
        <?php if (count($certification_courses) > 0) { ?>

            <!--Start Services Three-->
            <section class="services-three">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span>
                        <h2 class="section-title__title">Certifications</h2>
                    </div>
                    <div class="row">
                        <?php $i = 1;
                        foreach ($certification_courses as $certification_courses) : ?>

                            <!--Start Services Three Single-->
                            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms">
                                <div class="services-three__single">
                                    <div class="services-three__single-img">
                                        <div class="services-three__single-img-inner">
                                            <img src="<?php echo base_url('' . $certification_courses['image']); ?>" alt="Certifications" />
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--End Services Three Single-->

                        <?php $i++;
                        endforeach; ?>

                    </div>
                </div>
            </section>
            <!--End Services Three-->

        <?php } ?>


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