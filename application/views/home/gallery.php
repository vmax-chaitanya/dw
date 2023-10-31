<!DOCTYPE html>
<html lang="en">




<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include("includes/styles.php"); ?>
    <!-- Include Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <!-- Include Fancybox JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Include Fancybox Buttons and Thumbs Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox-buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox-thumbs.min.js"></script>

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
                    <div class="col-xl-4 pt-5">
                        <div class="about-page__left">
                            <div class="about-page__img">
                                <a data-fancybox="gallery" data-fancybox-zoom="true" data-fancybox-autoplay="true" data-fancybox-thumbs="true" href="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg">
                                    <img src="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg" alt="">
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 pt-5">
                        <div class="about-page__left">
                            <div class="about-page__img">
                                <a data-fancybox="gallery" data-fancybox-zoom="true" data-fancybox-autoplay="true" data-fancybox-thumbs="true" href="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg">
                                    <img src="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg" alt="">
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 pt-5">
                        <div class="about-page__left">
                            <div class="about-page__img">
                                <a data-fancybox="gallery" data-fancybox-zoom="true" data-fancybox-autoplay="true" data-fancybox-thumbs="true" href="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg">
                                    <img src="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg" alt="">
                                </a>

                            </div>

                        </div>
                    </div>

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

    <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({
                buttons: [
                    "zoom",
                    "slideShow",
                    "fullScreen",
                    "download",
                    "thumbs",
                    "close"
                ],
            });
        });
    </script>

</body>


</html>