<?php
$h_services = $this->Home_model->getActiveServiceNames();

?>
<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__logo pt-0 " >
                    <a href="<?php echo base_url();?>"><img height="80" width="180" src="<?php echo base_url(); ?>assets/home/images/resources/logo-1.png"></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">

                        <!-- <li class="dropdown megamenu">
                                <a href="index.html">Home </a>
                                <ul>
                                    <li>
                                        <section class="home-showcase">
                                            <div class="container">
                                                <div class="home-showcase__inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo base_url(); ?>assets/home/images/home-showcase/home-showcase-1-1.jpg"
                                                                        alt="">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index.html"
                                                                            class="thm-btn home-showcase__buttons__item">Multi
                                                                            Page</a>
                                                                        <a href="index-one-page.html"
                                                                            class="thm-btn home-showcase__buttons__item">One
                                                                            Page</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="home-showcase__title">Home Page
                                                                    01
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo base_url(); ?>assets/home/images/home-showcase/home-showcase-1-2.jpg"
                                                                        alt="">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index2.html"
                                                                            class="thm-btn home-showcase__buttons__item">Multi
                                                                            Page</a>
                                                                        <a href="index2-one-page.html"
                                                                            class="thm-btn home-showcase__buttons__item">One
                                                                            Page</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="home-showcase__title">Home Page
                                                                    02
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo base_url(); ?>assets/home/images/home-showcase/home-showcase-1-3.jpg"
                                                                        alt="">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index3.html"
                                                                            class="thm-btn home-showcase__buttons__item">Multi
                                                                            Page</a>
                                                                        <a href="index3-one-page.html"
                                                                            class="thm-btn home-showcase__buttons__item">One
                                                                            Page</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="home-showcase__title">Home Page
                                                                    03
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="<?php echo base_url(); ?>assets/home/images/home-showcase/home-showcase-1-4.jpg"
                                                                        alt="">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="index-dark.html"
                                                                            class="thm-btn home-showcase__buttons__item">View
                                                                            Page</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="home-showcase__title">Home Dark
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                    </li>
                                </ul>
                            </li> -->

                        <!-- <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="<?php echo base_url();?>about">About</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team
                                                Details</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="why-choose.html">Why
                                                Choose</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services2.html">Services
                                                Two</a></li>
                                        <li><a
                                                href="mobile-applications.html">Mobile
                                                Applications </a></li>
                                        <li><a href="digital-marketing.html">Digital
                                                Marketings </a></li>
                                        <li><a href="graphic-design.html">Graphic
                                                Designings </a></li>
                                        <li><a
                                                href="website-development.html">Website
                                                Developments </a></li>
                                        <li><a href="social-marketing.html">Social
                                                Marketings </a></li>
                                        <li><a href="content-writing.html">Content
                                                Writtings </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Projects</a>
                                    <ul>
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="project-details.html">Project
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Shop</a>
                                    <ul>
                                        <li><a href="products.html">Products</a></li>
                                        <li><a href="product-details.html">Product
                                                Details </a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Posts</a></li>
                                        <li><a href="blog-sidebar.html">Blog
                                                Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog
                                                Details</a></li>
                                    </ul>
                                </li> -->
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>services">Services</a>
                            <ul class="">
                                <div class="sections__container">
                                    <?php foreach($h_services as $service):?>
                                    <div class="col">
                                        <span class="btn"><a href="<?php echo base_url(); ?>service-detail/<?php echo $service['id']?>"><?php echo $service['name']?></a></span>
                                    </div>
                                   <?php endforeach;?>


                                </div>

                            </ul>
                        </li>
                       
                        <!-- <li class="dropdown ">
                            <a href="<?php echo base_url(); ?>training">Training</a>
                            <ul>
                                <li><a href="#">Certified course in
                                        digital marketing.</a></li>
                                <li><a href="#">Diploma in digital
                                        marketing.</a></li>
                                <li><a href="#">Advanced digital
                                        marketing with AI.</a></li>
                            </ul>
                        </li> -->
                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                      


                    </ul>
                </div>
            </div>
            <div class="main-menu-wrapper__right">
                <!-- <div class="main-menu-wrapper__search-box">
                            <a href="#"
                                class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                        </div> -->
                <div class="main-menu-wrapper__call">
                    <div class="main-menu-wrapper__call-icon">
                        <span class="fas fa-phone-square-alt"></span>
                    </div>
                    <div class="main-menu-wrapper__call-number">
                        <p>Reach US:</p>
                        <h5><a href="tel:040-2704708">040-2704708</a></h5>
                        <!-- <h5><a href="tel:91 9154357401">9154357404/01</a></h5> -->
								<!-- <h5><a href="tel:91 9154357402">+91
                                9154357402</a></h5> -->
                        <!-- <h5><a href="info@digitalwinbusinessagency.com">info@digitalwinbusinessagency.com</a></h5> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
