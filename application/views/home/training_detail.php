<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from qutiiz-html.vercel.app/main-html/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:30 GMT -->
<!-- Added by HTTrack -->
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
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">training</li>
                    </ul>
                    <h2>project Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img">
                            <img src="<?php echo base_url('' . $training['image']); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="project-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="project-details__content-left">
                                <h3 class="project-details__content-title"><?php echo $training['name']; ?></h3>
                                <p class="project-details__content-text-2"><?php echo $training['description']; ?></p>
                               
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
                        <!-- <div class="col-xl-4 col-lg-5">
                            <div class="project-details__content-right">
                                <div class="project-details__details-box">
                                    <div class="project-details__details-info">
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Clients:</h5>
                                            <p class="project-details__details-info-name">Jessica Brown</p>
                                        </div>
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Category:</h5>
                                            <p class="project-details__details-info-name">Web &amp; Application Design
                                            </p>
                                        </div>
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Date:</h5>
                                            <p class="project-details__details-info-name">20 September, 2021</p>
                                        </div>
                                    </div>
                                    <div class="project-details__details-social-list">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="project-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="project-details__content-left">
                                <h3 class="project-details__content-title"><?php echo $training['name']; ?></h3>
                                <p class="project-details__content-text-2"><?php echo $training['description']; ?></p>
                               
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
                        <div class="col-xl-4 col-lg-5">
                            <div class="project-details__content-right">
                                <div class="project-details__details-box">
                                    <div class="project-details__details-info">
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Clients:</h5>
                                            <p class="project-details__details-info-name">Jessica Brown</p>
                                        </div>
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Category:</h5>
                                            <p class="project-details__details-info-name">Web &amp; Application Design
                                            </p>
                                        </div>
                                        <div class="project-details__details-info-single">
                                            <h5 class="project-details__details-info-client">Date:</h5>
                                            <p class="project-details__details-info-name">20 September, 2021</p>
                                        </div>
                                    </div>
                                    <div class="project-details__details-social-list">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
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