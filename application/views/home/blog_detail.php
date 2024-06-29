<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />

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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url('' . $blog['banner_image']); ?>)">
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
                                <img src="<?php echo base_url('' . $blog['image']); ?>" alt="<?php echo $blog['title'] ;?>">
                                <div class="blog-details__date-box">
                                    <p>
                                        <?php echo date('j M', strtotime($blog['created_at'])); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-details__content">

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
                                    foreach ($blogs as $blogs) : ?>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="<?php echo base_url('' . $blogs['image']); ?>" alt="<?php echo $blogs['title']; ?>">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>

                                                    <a href="<?php echo base_url(); ?>blog-detail/<?php echo $blogs['id']; ?>"><?php echo $blogs['title']; ?></a>
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
                                                <input type="text" placeholder="Phone number" name="mobile" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode === 32" >
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <select name="copoun_select" id="copoun_select" style="display: block !important;">
                                                    <option style="color:#726d7b !important" value="">Do You Have A Copoun</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Enter Copoun" name="copoun_id" id="copoun_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write a message" style="display: block !important;"></textarea>
                                            </div>
                                            <div class="row mt-3">
											<div class="col-md-5">
												<p id="image_captcha"><?php echo $captcha_image; ?></p>
											</div>
											<div class="col-md-2">
												<a href="javascript:void(0);" class="captcha-refresh sm"><img class="capture-referwch-image" src="<?php echo base_url() . 'assets/home/images/refresh.png'; ?>" /></a>
											</div>
											<div class="col-md-5">
												<div class="comment-form__input-box">
													<input type="text" placeholder="Enter Captcha" name="captcha" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
												</div>
											</div>
										</div>
                                            <button type="submit" class="thm-btn comment-form__btn mt-3"><span class="button-text">Send a message</span>
        								<span class="loading-indicator"></span></button>
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

                    <div class="col-xl-12">
                        <div class="about-page__right">
                            <div class="section-title text-left">

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


    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
</body>

</html>