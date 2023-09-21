<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from qutiiz-html.vercel.app/main-html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <?php include("includes/styles.php"); ?>
    <style>
        p {
            margin-top: 0;
            margin-bottom: 1rem;
            text-align: justify;
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
                style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/blog_banner.jpg)">
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
                    <h2>Blog Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="<?php echo base_url('' . $blog['image']); ?>" alt="">
                                <div class="blog-details__date-box">
                                    <p>
                                        <?php echo date('j M', strtotime($blog['created_at'])); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <!-- <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Mike Hardson</a>
                                    </li>
                                    <li><a href="blog-details.html"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-details__title">
                                    <?php echo $blog['title']; ?>
                                </h3>
                                <p class="blog-details__text-1">
                                    <?php echo $blog['about']; ?>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">

                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <?php $i = 100;
                                    foreach ($blogs as $blog): ?>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="<?php echo base_url('' . $blog['image']); ?>"
                                                    alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <!-- <span class="sidebar__post-content-meta"><i
                                                        class="far fa-comments"></i>02 Comments</span> -->
                                                    <a href="<?php echo base_url();?>blog-detail/<?php echo $blog['id']; ?>"><?php echo $blog['title']; ?></a>
                                                </h3>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="contact-page__form mt-3">
                            <form action="#" id="contact-form" name="contact" class="contact-form">
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
											<input type="text" placeholder="Phone number" name="mobile" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Subject" name="subject">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box" >
											<select  name="copoun_select" id="copoun_select" style="display: block !important;">
											<option style="color:#726d7b !important" value="">Do You Have A Copoun</option>
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
											<textarea name="message" placeholder="Write a message" style="display: block !important;"></textarea>
										</div>
										<button type="submit" class="thm-btn comment-form__btn mt-3">send
											a message</button>
									</div>
								</div>
							</form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->

        <!--About Page Start-->
        <section class="about-page" style="padding-top: 0px !important;">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xl-6">
                        <div class="about-page__left">
                            <div class="about-page__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/resources/about-page-img.jpg" alt="">
                            </div>
                            <div class="about-page__founded">
                                <h5>Founded <br> in 2014</h5>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12">
                        <div class="about-page__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline"> about us</span> -->
                                <!-- <h2 class="section-title__title">get to know about DigitalWin agency solutions</h2> -->
                            </div>

                            <p class="about-page__right-text-2" style="padding-top: 15px !important;">
                                <?php echo $blog['description']; ?>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Page End-->

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


<!-- Mirrored from qutiiz-html.vercel.app/main-html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:40 GMT -->

</html>