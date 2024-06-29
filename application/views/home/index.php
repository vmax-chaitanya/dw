<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <?php include("includes/styles.php"); ?>
    <?php  //include("includes/seo_index_scripts.php"); 
    ?>

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

        .p {
            text-align: center;
            max-width: 220px;
            word-wrap: break-word;
            word-break: break-all;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNTM2J82" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("includes/preloader.php"); ?>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include("includes/header.php"); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <?php $i = 1;
                    foreach ($banners as $banner) : ?>
                        <div class="swiper-slide">
                            <div class="image-layer" style="background-image: url(<?php echo base_url('' . $banner['image']); ?>);">
                            </div>
                            <!-- /.image-layer -->
                            <div class="main-slider-border"></div>
                            <div class="main-slider-border main-slider-border-two"></div>
                            <div class="main-slider-border main-slider-border-three"></div>
                            <div class="main-slider-border main-slider-border-four"></div>
                            <div class="main-slider-border main-slider-border-five"></div>
                            <div class="main-slider-border main-slider-border-six"></div>

                            <div class="main-slider-shape-1"></div>
                            <div class="main-slider-shape-2"></div>
                            <div class="main-slider-shape-3"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-slider__content">
                                            <p>
                                                <?php echo $banner['name']; ?>
                                            </p>
                                            <h2>
                                                <?php echo $banner['description']; ?>
                                            </h2>

                                            <a href="<?php echo base_url(); ?>services" class="thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow icon-left-arrow"></i>Prev
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        Next <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->


        <!--Get To Know Start-->
        <section class="get-to-know pt-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-to-know__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="get-to-know__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/home_images/home_images.jpg" alt="service_image">
                                <div class="get-to-know__video-link">
                                    <a href="https://www.youtube.com/watch?v=tjeBik0Q860" class="video-popup">
                                        <div class="get-to-know__video-icon">
                                            <span class="icon-play-button"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="get-to-know__left wow slideInLeft pr-0" data-wow-delay="100ms" data-wow-duration="2500ms">
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
                                                <div class="col-md-4">
                                                    <p id="image_captcha"><?php echo $captcha_image; ?></p>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0);" class="captcha-refresh "><img class="capture-referwch-image" src="<?php echo base_url() . 'assets/home/images/refresh.png'; ?>" /></a>
                                                </div>
                                                <div class="col-md-4">
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
                    <div class="col-xl-6">
                        <div class="get-to-know__right">
                            <!-- <div class="get-to-know-big-text">DigitalwWin</div> -->
                            <div class="section-title text-left">
                                <span class="section-title__tagline">get to
                                    know us</span>
                                <h2 class="section-title__title">Why Choose DigitalWin Business Agency For Your
                                    Business?</h2>
                                <h1 style="display:none">DigitalWin Business Agency | Digital Marketing Services in Hyderabad| Digital Marketing Agency | SEO | SMM | PPC Services</h1>
                            </div>
                            <p class="get-to-know__text-1">We’re committed
                                to delivering the best digital marketing for
                                your businesses</p>
                            <p class="get-to-know__text-2"><b>Expertise:
                                </b> Our team of AI experts and industry professionals brings in-depth knowledge and
                                experience to the table, ensuring you receive top-notch solutions tailored to your
                                business needs.</p>
                            <p class="get-to-know__text-2" style="padding-top: 20px; ">
                                <b>Customization:</b> We understand that each business is unique, and so are its
                                challenges. Our AI solutions are highly customizable, ensuring a perfect fit for your
                                specific requirements.
                            </p>

                            <p class="get-to-know__text-2" style="padding-top: 20px; ">
                                <b>AI- Result Driven:</b> Your success is our ultimate goal. We measure our achievements
                                based on the tangible results we deliver to your business.
                            </p>
                            <div class="get-to-know__progress">
                                <div class="get-to-know__progress-single">
                                    <h4 class="get-to-know__progress-title">Digital Marketing usage World Wide</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="85.5%">
                                            <div class="count-text">85.5%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="get-to-know__progress">
                                <div class="get-to-know__progress-single">
                                    <h4 class="get-to-know__progress-title">AI Driven Digital Marketing Services</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="get-to-know__progress">
                                <div class="get-to-know__progress-single">
                                    <h4 class="get-to-know__progress-title">High Returns on Investment</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%">
                                            <div class="count-text">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Get To Know End-->

        <!--Services Two Start-->
        <section class="services-two pt-5 pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">our team members</span> -->
                    <h2 class="section-title__title">Why Choose AI-Driven Solutions?

                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Unparalleled Insights</a>
                            </h3>
                            <p class="services-two__text">With AI's ability to analyze vast amounts of data in
                                real-time, you gain invaluable insights into customer behavior, market trends, and
                                performance metrics. These insights empower you to make informed decisions that drive
                                success.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-growth"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Enhanced Personalization</a>
                            </h3>
                            <p class="services-two__text">Customers today expect personalized experiences. AI enables
                                you to deliver tailored content, product recommendations, and communication, fostering
                                stronger relationships and customer loyalty.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="300ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-webpage"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Improved Efficiency</a>
                            </h3>
                            <p class="services-two__text">Repetitive manual tasks can hinder productivity. AI automates
                                these processes, freeing up your team to focus on strategic initiatives that lead to
                                growth.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Predictive Capabilities</a>
                            </h3>
                            <p class="services-two__text">AI predictive analytics help you anticipate future trends and
                                customer needs, allowing you to stay proactive and seize opportunities before your
                                competitors.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Cost Savings</a></h3>
                            <p class="services-two__text">By streamlining processes and optimizing resources, AI helps
                                reduce operational costs, making your business more agile and resilient.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Embracing AI in Business</a>
                            </h3>
                            <p class="services-two__text">Get insights into the importance of adopting AI-driven
                                solutions in today's rapidly evolving business landscape and how it can transform your
                                organization's success.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->



        <!--Project One Start-->
        <section class="project-one pt-5 pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Services</span>
                    <h2 class="section-title__title">work showcase</h2>
                </div>
                <div class="row">

                </div>
                <div class="row filter-layout masonary-layout">
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra photo web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/api.jpg" alt="Api Integration">
                                <div class="project-one__hover project-one__hover-pl-40">
                                    <p class="project-one__tagline">Service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/api-integration">API Inegration</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 filter-item bra app web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/ai.jpg" alt="Advance Digital Marketing Services with AI">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services">Advance Digital Marketing Services with AI</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/google_ads.jpg" alt="Google Ads">
                                <div class="project-one__hover project-one__hover-pl-40">
                                    <p class="project-one__tagline">Service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/google-ads">Google Ads</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra photo web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/training.jpg" alt="Advance Digital Marketing Training with AI">
                                <div class="project-one__hover project-one__hover-pl-40">
                                    <p class="project-one__tagline">Training</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>training/advanced-digital-marketing-with-ai">Advance Digital Marketing Training with AI</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra web">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/native_ads.jpg" alt="Native Marketing">
                                <div class="project-one__hover project-one__hover-pl-40">
                                    <p class="project-one__tagline">Service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/native-marketing">Native Marketing</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item app photo">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/ecommerce.jpg" alt="Responsive Websites for Ecommerce and More">
                                <div class="project-one__hover project-one__hover-pl-40">
                                    <p class="project-one__tagline">Service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/responsive-website-design">Responsive Websites for Ecommerce and More</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 filter-item app photo">
                        <!--Portfolio One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/showcase/seo.jpg" alt="SEO">
                                <div class="project-one__hover">
                                    <p class="project-one__tagline">Service</p>
                                    <h3 class="project-one__title"><a href="<?php echo base_url(); ?>services/search-engine-optimization">SEO</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Blog Page Start-->
        <section class="blog-one blog-one__blog-page pt-5 pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">our team members</span> -->
                    <h2 class="section-title__title">Driving success for diverse clients through innovation

                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/small_bussigness.jpg" alt="Small Businesses">


                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Small Businesses</a>
                                </h3>
                                <p class="services-two__text">We provide digital marketing services tailored to the unique needs of small businesses, helping them establish a strong online presence, reach their target audience, and compete effectively in the digital landscape.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/start_up.jpg" alt="Startups">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Startups</a>
                                </h3>
                                <p class="services-two__text"> For startups, navigating the complexities of digital marketing can be overwhelming. Our expert team crafts customized strategies to build brand awareness, drive traffic, and generate leads, ensuring a solid foundation for growth.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img" style="text-align: center !important; ">
                                <img src="<?php echo base_url(); ?>assets/images/driven/ecommerce.jpg" alt="E-commerce Businesses">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">E-commerce Businesses</a>
                                </h3>
                                <p class="services-two__text">In the highly competitive e-commerce industry, our digital marketing services drive traffic, optimize conversions, and enhance customer experiences, resulting in increased sales and repeat business.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/b2b.jpg" alt="B2B Companies">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">B2B Companies </a>
                                </h3>
                                <p class="services-two__text">With our specialized B2B digital marketing solutions, we connect businesses with their ideal clients through targeted campaigns, lead generation, and nurturing strategies, fostering long-term partnerships.
                                </p>
                                <div class="blog-one__person">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/professional_services.jpg" alt="Professional Services">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Professional Services
                                    </a>
                                </h3>
                                <p class="services-two__text">We understand the unique marketing challenges faced by professional service providers. Our services aim to showcase expertise, build credibility, and attract high-quality leads to grow their client base.
                                </p>
                                <div class="blog-one__person">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/local_bussigness.jpg" alt="Enterprenuers">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Enterprenuers</a>
                                </h3>
                                <p class="services-two__text">Local businesses thrive on local visibility. Our location-based digital marketing strategies ensure that they remain visible to their target audience, driving foot traffic and increasing local brand awareness.
                                </p>
                                <div class="blog-one__person">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/non_profit_orginization.jpg" alt="Banking & Finance">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Banking & Finance</a>
                                </h3>
                                <p class="services-two__text">Our digital marketing services for nonprofits focus on increasing awareness, attracting donors, and mobilizing support for their meaningful causes, ultimately driving positive social impact.
                                </p>
                                <div class="blog-one__person">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/educational.jpg" alt="Education Institutions">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Education Institutions</a>
                                </h3>
                                <p class="services-two__text">Education providers benefit from our digital marketing expertise to reach prospective students, engage with parents, and build a strong online reputation that reflects their institution's quality.
                                </p>
                                <div class="blog-one__person">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="900ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url(); ?>assets/images/driven/real-estate.jpg" alt="Real Estate Agencies">

                            </div>
                            <div class="blog-one__content">

                                <h3 class="blog-one__title" style="text-align: center !important; ">
                                    <a href="javascript:void(0);">Real Estate Agencies</a>
                                </h3>
                                <p class="services-two__text"> In the competitive real estate market, our digital marketing strategies help agencies stand out, generate leads, and showcase property listings to potential buyers, driving business growth.
                                </p>
                                <div class="blog-one__person">

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--Blog Page End-->


        <!--Services Two Start-->
        <section class="services-two pt-5 pb-5">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">our team members</span> -->
                    <h2 class="section-title__title">Why Choose DigitalWin Business Agency For Your Business?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon" style="text-align:center">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Expertise</a></h3>
                            <p class="services-two__text">Our team of AI experts and industry professionals brings
                                in-depth knowledge and experience to the table, ensuring you receive top-notch solutions
                                tailored to your business needs.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-growth"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Customization</a>
                            </h3>
                            <p class="services-two__text"> We understand that each business is unique, and so are its
                                challenges. Our AI solutions are highly customizable, ensuring a perfect fit for your
                                specific requirements.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="300ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-webpage"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Scalability</a></h3>
                            <p class="services-two__text">Whether you're a startup or an established enterprise, our
                                AI-driven solutions are designed to scale effortlessly with your business growth,
                                providing unmatched flexibility</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Results-Driven</a></h3>
                            <p class="services-two__text">Your success is our ultimate goal. We measure our achievements
                                based on the tangible results we deliver to your business, helping you achieve a
                                significant return on your investment.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);">Dynamic Pricing
                                    Optimization </a></h3>
                            <p class="services-two__text">Stay ahead of the competition with AI-driven dynamic pricing
                                strategies. Our algorithms analyse market dynamics, competitor pricing, and customer
                                behaviour to optimize your pricing in real-time, maximizing profitability while
                                maintaining competitiveness.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="javascript:void(0);0">Embracing AI in Business</a>
                            </h3>
                            <p class="services-two__text">Get insights into the importance of adopting AI-driven
                                solutions in today's rapidly evolving business landscape and how it can transform your
                                organization's success.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->



        <!--Why Choose One Start-->
        <section class="why-choose-one pt-5 pb-3 mt-1">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-one__left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/home_images/home_images3.jpg" alt="Unlock new dimensions of success with our <BR>
                                    AI-driven services">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-one__right" style="padding-top: 5px;">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">company
                                        benefits</span> -->
                                <h2 class="section-title__title">Unlock new dimensions of success with our <BR>
                                    AI-driven services</h2>
                            </div>
                            <p class="why-choose-one__text">Our AI-driven marketing strategies are designed to make your
                                brand stand out in a crowded digital landscape.</p>
                            <div class="why-choose-one__bottom">
                                <!-- <div class="why-choose-one__bottom-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/resources/why-choose-one-bottom-img.jpg"
                                        alt>
                                </div> -->
                                <ul class="list-unstyled why-choose-one__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>AI-Powered Marketing</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Intelligent Data Analytics</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Automated Customer Support</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Predictive Sales</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Process Automation</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->



        <!--Testimonial One Start-->
        <!-- <section class="testimonial-one pt-5">
            <div class="testimonial-one__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="testimonial-one__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">customer
                                        feedbacks</span>
                                    <h2 class="section-title__title">what
                                        they’re talking about company?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                       Testimonial One Single
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">I'm thrilled with the results
                                from this digital marketing agency. Their team's in-depth knowledge and innovative
                                strategies helped us reach a broader audience and boost conversions.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/male.jpg" alt="PRANAV" width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png" alt="services">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">PRANAV
                                    </h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Efficient and knowledgeable
                                team! Their expertise in SEO and social media marketing played a crucial role in
                                elevating our brand visibility and driving more customers to our website.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/male.jpg" alt="CHAITANYA" width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png" alt="service">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">CHAITANYA</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">I am extremely satisfied with
                                the services provided by DigitalWin Digital Marketing. They have implemented successful SEO
                                strategies that have improved my website's organic rankings and traffic.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/female.jpg" alt="service" width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png" alt="quote">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">ANNAYA SHARMA</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">DigitalWin has exceeded my
                                expectations with their outstanding services. Their team's deep knowledge of the digital
                                landscape has helped me stay ahead of the competition.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/male.jpg " alt="service" width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png" alt="service">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">SACHIN</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">DigitalWin has been an
                                invaluable asset to my business. Their expertise in search engine optimization has
                                significantly improved my website's visibility and organic rankings.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/female.jpg" alt="service" width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png" alt="service">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">RESHMA</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav"></div>
                    </div>
                </div>

            </div>
        </section> -->
        <!--Testimonial One End-->
        <?php if (count($tools) > 0) { ?>
            <div class="section-title text-center">
                <!-- <span class="section-title__tagline">our team members</span> -->
                <h2 class="section-title__title">Tools

                </h2>
            </div>
            <section class="customer-logos slider mb-3">
                <?php $i = 1;
                foreach ($tools as $row) : ?>

                    <div class="slide"><img src="<?php echo base_url('' . $row['image']); ?>"></div>

                <?php endforeach; ?>

            </section>
        <?php } ?>

        <!--DigitalWin Ready Start-->
        <section class="qutiiz-ready">
            <div class="qutiiz-ready-bg-box">
                <div class="qutiiz-ready-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo base_url(); ?>assets/home/images/home_images/bg.jpg">
                </div>
            </div>
            <div class="container">
                <div class="qutiiz-ready__inner">
                    <!-- <div class="qutiiz-ready__icon">
                            <span class="icon-wealth"></span>
                        </div> -->
                    <h2 class="qutiiz-ready__title">Experience growth with our <br>results-driven marketing services.
                    </h2>
                </div>
            </div>
        </section>
        <!--DigitalWin Ready End-->

        <!--Financial Advice Start-->
        <section class="financial-advice">
            <div class="financial-advice-bg" style="background-image: url(<?php echo base_url(); ?>assets/home/images/shapes/financial-advice-shape.png)">
            </div>
            <div class="container">
                <div class="financial-advice__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#business" class="tab-btn"><span>MISSION
                            </span></li>
                        <li data-tab="#financial" class="tab-btn active-btn"><span>VISION
                            </span></li>
                        <li data-tab="#soltution" class="tab-btn"><span>
                                VALUES</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab" id="business">
                            <div class="tabs-content__inner">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <image src="<?php echo base_url('' . $social_media['mission_image']); ?>" height="150px" width="150px" class="" alt="social media" />
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tabs-content__left">

                                            <p class="about-page__right-text-2"><?php echo $social_media['mission']; ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab active-tab" id="financial">
                            <div class="tabs-content__inner">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <image src="<?php echo base_url('' . $social_media['vision_image']); ?>" height="150px" width="150px" class="" alt="vission" />
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tabs-content__left">

                                            <p class="about-page__right-text-2"><?php echo $social_media['vision']; ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="soltution">
                            <div class="tabs-content__inner">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <image src="<?php echo base_url('' . $social_media['value_image']); ?>" height="150px" width="150px" class="" alt="value" />
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tabs-content__left">

                                            <p class="about-page__right-text-2"><?php echo $social_media['value']; ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="financial-advice__bottom">
                    <p class="financial-advice__bottom-text">DigitalWin services
                        built specifically for your business. <a href="<?php echo base_url(); ?>services">Find Your Requirements</a></p>
                </div>
            </div>
        </section>
        <!--Financial Advice End-->



        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="cta-one-shape-1"></div>
                            <div class="cta-one-shape-2"></div>
                            <div class="cta-one-shape-3"></div>
                            <div class="cta-one__left">
                                <h2 class="cta-one__title">Your Success is Our Mission <br> Let’s Win Digitally</h2>
                            </div>
                            <div class="cta-one__right">
                                <a href="<?php echo base_url(); ?>contact" class="cta-one__btn thm-btn">let’s get
                                    started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->



    <?php include("includes/scripts.php"); ?>
</body>

</html>