<!DOCTYPE html>
<html lang="en">




<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include("includes/styles.php"); ?>
    <style>
        .cardimg {
            overflow: hidden
        }

        .cardimg img {
            height: 100%;
            max-height: 550px;
            width: 100%;
        }

        .text-align li {
            text-align: left;
        }

        .about-page__img img {
            object-fit: cover !important;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
            text-align: left;
            /* line-height: 26px; */
        }
    </style>
    <style>
        div.my_div p {
            text-align: center !important;
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
            <div class="page-header-bg" style="background-image: url(<?php echo base_url('' . $services_detail['banner_image']); ?>)">
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
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">service</li>
                    </ul> -->
                    <h2>
                        <?php echo $services_detail['banner_text']; ?>
                    </h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Service Details Start-->
        <section class="service-details pt-3 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__sidebar">
                            <div class="service-details__sidebar-service">
                                <ul class="service-details__sidebar-service-list list-unstyled">
                                    <?php $i = 1;
                                    foreach ($services_menu as $service) : ?>
                                        <li <?php echo ($service['service_url'] == $this->uri->segment(2)) ? "class='current'" : "class=''"; ?>><a href="<?php echo base_url(); ?>services/<?php echo $service['service_url']; ?>">
                                                <?php echo $service['name']; ?> <span class="icon-right-arrow"></span>
                                            </a></li>
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
                                                    <option style="color:#726d7b !important" value="">Do You Have A
                                                        Copoun</option>
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

                                            <input type="checkbox" class="service-checkbox" id="" name="service[]" value="<?php echo $services_detail['id'] ?> " checked style="display:none">

                                            <button type="submit" class="thm-btn comment-form__btn"><span class="button-text">Send a message</span>
                                                <span class="loading-indicator"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="about-page__img cardimg">
                                <img src="<?php echo base_url('' . $services_detail['image']); ?>" alt="<?php echo $services_detail['name']; ?>">
                            </div>
                            <div class="service-details__content">
                                <h2 class="service-details__title">
                                    <?php echo ucwords(strtolower($services_detail['name'])); ?>
                                </h2>

                                <p class="about-page__right-text-2">
                                    <?php echo $services_detail['description']; ?>
                                </p>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if (count($services_module1) > 0) : ?>
            <!--Services Two Start-->
            <section class="services-two pt-0 pb-0">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">
                            <?php echo isset($services_detail['module_quote_1']) ? $services_detail['module_quote_1'] : "Quote"; ?>
                        </span>
                        <h2 class="section-title__title">
                            <?php echo isset($services_detail['module_name_1']) ? $services_detail['module_name_1'] : "Heading"; ?>
                        </h2>
                    </div>
                    <div class="row">
                        <?php $i = 1;
                        foreach ($services_module1 as $service) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                                <!--Services Two Single-->
                                <div class="services-two__single">
                                    <div class="services-two__icon">
                                        <span class="icon-online-shopping"></span>
                                    </div>
                                    <h3 class="services-two__title"><a href="javascript:void(0);">
                                            <?php echo $service['name']; ?>
                                        </a></h3>
                                    <p class="services-two__text" style="text-align:center !important">
                                    <div class="my_div" style="text-align:center"> <?php echo $service['description']; ?> </div>
                                    </p>
                                    <a class="services-two__arrow" href="javascript:void(0);"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </section>
            <!--Services Two End-->
        <?php endif; ?>

        <?php if (count($services_module2) > 0) : ?>
            <!--Services Two Start-->
            <section class="services-two pt-3 pb-0">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">
                            <?php echo isset($services_detail['module_quote_2']) ? $services_detail['module_quote_2'] : "Quote"; ?>
                        </span>
                        <h2 class="section-title__title">
                            <?php echo isset($services_detail['module_name_2']) ? $services_detail['module_name_2'] : "Heading"; ?>
                        </h2>
                    </div>

                    <div class="row">
                        <?php $i = 1;
                        foreach ($services_module2 as $service) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                                <!--Services Two Single-->
                                <div class="services-two__single">
                                    <div class="services-two__icon">
                                        <span class="icon-online-shopping"></span>
                                    </div>
                                    <h3 class="services-two__title"><a href="javascript:void(0);">
                                            <?php echo $service['name']; ?>
                                        </a></h3>
                                    <p class="services-two__text">
                                    <div class="my_div" style="text-align:center"> <?php echo $service['description']; ?> </div>
                                    </p>
                                    <a class="services-two__arrow" href="javascript:void(0);"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!--Services Two End-->
        <?php endif; ?>


        <?php if (count($services_module3) > 0) : ?>
            <!--Services Two Start-->
            <section class="services-two pt-3 pb-0  ">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">
                            <?php echo isset($services_detail['module_quote_3']) ? $services_detail['module_quote_3'] : "Quote"; ?>
                        </span>
                        <h2 class="section-title__title">
                            <?php echo isset($services_detail['module_name_3']) ? $services_detail['module_name_3'] : "Heading"; ?>
                        </h2>
                    </div>

                    <div class="row">
                        <?php $i = 1;
                        foreach ($services_module3 as $service) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                                <!--Services Two Single-->
                                <div class="services-two__single">
                                    <div class="services-two__icon">
                                        <span class="icon-online-shopping"></span>
                                    </div>
                                    <h3 class="services-two__title"><a href="javascript:void(0);">
                                            <?php echo $service['name']; ?>
                                        </a></h3>
                                    <p class="services-two__text">
                                    <div class="my_div" style="text-align:center"> <?php echo $service['description']; ?> </div>
                                    </p>
                                    <a class="services-two__arrow" href="javascript:void(0);"></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!--Services Two End-->
        <?php endif; ?>


        <?php if (count($service_faqs) > 0) { ?>

            <!--FAQ Page Start-->
            <section class="faq-page pt-3 pb-0">
                <div class="container">
                    <div class="section-title text-center">
                        <!-- <span class="section-title__tagline">Advanced digital marketing tools used by digital marketing
                            experts</span> -->
                        <h2 class="section-title__title">Faqs</h2>
                        <div class="row" style="text-align:left">
                            <?php $i = 1;
                            foreach ($service_faqs as $faqs) : ?>
                                <div class="col-xl-6 col-lg-6 mt-2 mb-2">
                                    <div class="faq-page__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion2">
                                            <div class="accrodion">
                                                <div class="accrodion-title1">
                                                    <h4 class="text-align">
                                                        <?php echo str_replace("?","",$faqs['question']); ?>
                                                    </h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p class="text-align">
                                                            <?php echo str_replace("?","",$faqs['answer']) ?>
                                                        </p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>
            <!--FAQ Page End-->
        <?php } ?>


        <!--Similar Work Start-->
        <section class="similar-work pt-3 pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">recent Service</span> -->
                    <h2 class="section-title__title">Other Services</h2>
                </div>
                <div class="row">
                    <?php $i = 1;
                    foreach ($upcoming_services as $key => $service) :
                        if ($key < 3) : ?>
                            <div class="col-xl-4 col-lg-4">
                                <!--Portfolio One Single-->
                                <div class="project-one__single">
                                    <div class="project-one__img">

                                        <img src="<?php echo base_url('' . $service['image']); ?>" alt="<?php echo ucfirst(strtolower($service['name'])); ?>">
                                        <div class="project-one__hover">
                                            <p class="project-one__tagline">service</p>
                                            <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/<?php echo $service['service_url']; ?>">
                                                    <?php echo ucfirst(strtolower($service['name'])); ?>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endif;
                    endforeach; ?>
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