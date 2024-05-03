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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/banner_services.jpg)">
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
                        <li class="active">Services</li>
                    </ul> -->
                    <h2>Services</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Projects Page Start-->
        <section class="projects-page">
            <div class="container">
                <div class="section-title text-center">

                    <h2 class="section-title__title">Explore Our Programs</h2>
                    <!-- <span class="section-title__tagline">Short Term / Long Term Programs For Students And Working
                        Professionals</span> -->
                </div>
                <div class="row filter-layout">
                    <?php $i = 1;
                    foreach ($servicesw as $service) : ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra photo web">
                            <!--Portfolio One Single-->
                            <div class="project-one__single">
                                <div class="project-one__img">
                                    <img src="<?php echo base_url('' . $service['image']); ?>" alt=" <?php echo ucfirst(strtolower($service['name'])); ?>">
                                    <div class="project-one__hover">
                                        <!-- <p class="project-one__tagline">Graphic</p> -->
                                        <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/<?php echo $service['service_url']; ?>">
                                                <?php echo ucfirst(strtolower($service['name'])); ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--Projects Page End-->

        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->


    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
</body>


<!-- Mirrored from qutiiz-html.vercel.app/main-html/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:32 GMT -->

</html>