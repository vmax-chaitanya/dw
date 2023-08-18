<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
.business-growth-one__single-img::after {
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
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Tranining</li>
                    </ul>
                    <h2>Tranining</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Tranining Page Start-->
        <!-- <section class="projects-page">
            <div class="container">
               
                <div class="section-title text-center">
                    <span class="section-title__tagline">recent projects</span> 
                    <h2 class="section-title__title">Trainings</h2>
                </div>
                <div class="row filter-layout">
                <?php $i = 1; foreach ($trainings as $training) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item bra photo web">
                        
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url('' . $training['image']); ?>" alt="">
                                <div class="project-one__hover">
                                <p class="project-one__tagline">Graphic</p> 
                                    <h3 class="project-one__title"><a href="<?php echo base_url();?>training-detail/<?php echo $training['id']; ?>"><?php echo $training['name']; ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section> -->
        <!--Tranining Page End-->

        <!--Blog Page Start-->
        <section class="blog-one blog-one__blog-page">
            <div class="container">
            <div class="section-title text-center">
                    
                    <h2 class="section-title__title">Explore Our Programs</h2>
                    <span class="section-title__tagline">Short Term / Long Term Programs For Students And Working Professionals</span>
                </div>
                <div class="row">
                <?php $i = 1; foreach ($trainings as $training) : ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url('' . $training['image']); ?>" alt="">
                                <a href="<?php echo base_url();?>training-detail/<?php echo $training['id']; ?>">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date" style="left:0px !important;right:288px !important">
                                    <p><?php echo $training['duration']; ?></p>
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
                                    <a href="<?php echo base_url();?>training-detail/<?php echo $training['id']; ?>"><?php echo $training['name']; ?></a>
                                </h3>
                                <p>Online | Classroom  | E-Learning</p>
                               
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- <div class="blog-sidebar__load-more text-center">
                        <a href="blog.html" class="thm-btn blog-sidebar__load-more-btn">load more
                            posts</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!--Blog Page End-->

        
        <!--Blog Page Start-->
        <section class="blog-one blog-one__blog-page">
            <div class="container">
            <div class="section-title text-center">
                    <p class="section-title__tagline">Get certified by global certification bodies and deepen your expertise</p>
                    <h2 class="section-title__title">Certification Courses</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <!-- <div class="blog-one__img">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div>
                            </div> -->
                            <div class="blog-one__content">
                                
                                <h3 class="blog-one__title">
                                    <a href="#">Get few solutions to hire a best candidate</a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled blog-one__meta mt-2">
                                    <li><a href="#"><i class="fa fa-star"></i> Business</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i> 153 Learners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <!-- <div class="blog-one__img">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div>
                            </div> -->
                            <div class="blog-one__content">
                                
                                <h3 class="blog-one__title">
                                    <a href="#">Get few solutions to hire a best candidate</a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled blog-one__meta mt-2">
                                    <li><a href="#"><i class="fa fa-star"></i> Business</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i> 153 Learners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <!-- <div class="blog-one__img">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div>
                            </div> -->
                            <div class="blog-one__content">
                                
                                <h3 class="blog-one__title">
                                    <a href="#">Get few solutions to hire a best candidate</a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled blog-one__meta mt-2">
                                    <li><a href="#"><i class="fa fa-star"></i> Business</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i> 153 Learners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <!-- <div class="blog-one__img">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div>
                            </div> -->
                            <div class="blog-one__content">
                                
                                <h3 class="blog-one__title">
                                    <a href="#">Get few solutions to hire a best candidate</a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled blog-one__meta mt-2">
                                    <li><a href="#"><i class="fa fa-star"></i> Business</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i> 153 Learners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <!-- <div class="blog-one__img">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div>
                            </div> -->
                            <div class="blog-one__content">
                                
                                <h3 class="blog-one__title">
                                    <a href="#">Get few solutions to hire a best candidate</a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled blog-one__meta mt-2">
                                    <li><a href="#"><i class="fa fa-star"></i> Business</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i> 153 Learners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <!-- <div class="blog-one__img">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div>
                            </div> -->
                            <div class="blog-one__content">
                                
                                <h3 class="blog-one__title">
                                    <a href="#">Get few solutions to hire a best candidate</a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled blog-one__meta mt-2">
                                    <li><a href="#"><i class="fa fa-star"></i> Business</a></li>
                                    <li><a href="#"><i class="fa fa-users"></i> 153 Learners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   

                 
                </div>
            </div>
        </section>
        <!--Blog Page End-->

         <!--Start Business Growth One-->
         <section class="business-growth-one">
            <div class="container">
            <div class="section-title text-center">
                    <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing experts</span>
                    <h2 class="section-title__title">Tools You Will Master</h2>
                </div>
                <div class="business-growth-one__bottom">
                    <div class="row">
                        <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                        <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                        <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                        <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                        <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                        <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                         <!--Start Business Growth One Single-->
                        <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->
                         <!--Start Business Growth One Single-->
                         <div class="col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="business-growth-one__single">
                                <div class="business-growth-one__single-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/update1.0/resources/business-growth-v1-img1.jpg" alt="" />
                                </div>
                               
                            </div>
                        </div>
                        <!--End Business Growth One Single-->

                    </div>
                </div>
            </div>
        </section>
        <!--End Business Growth One-->

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