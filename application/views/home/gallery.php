<!DOCTYPE html>
<html lang="en">




<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include("includes/styles.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/why_1.jpg)">
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
                    <h2>Gallery</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->





        <section class="about-page" style="padding-top: 0px !important;">
            <div class="container">
                <div class="row">

                <?php   foreach ($GalleryItems as $val): ?>
                    <div class="col-xl-4 pt-5">
                        <div class="about-page__img">
                            <a data-fancybox="about-gallery" data-caption="Image 1" href="<?php echo base_url('' . $val['image']); ?>">
                                <img src="<?php echo base_url('' . $val['image']); ?>" alt="<?php echo $val['title'];?>">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>


        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->


    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


</body>


</html>