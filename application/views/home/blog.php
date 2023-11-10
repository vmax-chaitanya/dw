<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from qutiiz-html.vercel.app/main-html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:36 GMT -->
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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/blog_banner.jpg)">
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
                        <li class="active">Blog</li>
                    </ul> -->
                    <h2>Blog posts</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-one blog-one__blog-page">
            <div class="container">
                <div class="row">

                    <?php $i = 100;
                    foreach ($blogs as $blog): ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $i; ?>ms">
                            <!--Blog One Start-->
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img src="<?php echo base_url('' . $blog['image']); ?>" alt="">
                                    <a href="<?php echo base_url();?>blog-detail/<?php echo $blog['id']; ?>">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date">
                                        <p><?php echo date('j M',strtotime($blog['created_at'])); ?></p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                        <!-- <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li> -->
                                    </ul>
                                    <h3 class="blog-one__title">
                                        <a href="<?php echo base_url();?>blog-detail/<?php echo $blog['id']; ?>"> <?php echo $blog['title']; ?></a>
                                    </h3>
                                    <!-- <div class="blog-one__person">
                                        <div class="blog-one__person-img">
                                            <img src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-person-img-1.jpg" alt="">
                                        </div>
                                        <div class="blog-one__person-content">
                                            <p>by Suresh</p>
                                        </div>
                                    </div> -->
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

        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->

    
    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
</body>


<!-- Mirrored from qutiiz-html.vercel.app/main-html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:38 GMT -->

</html>