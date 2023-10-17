<?php
$this->load->helper('custom_helper');
$h_services = $this->Home_model->getActiveServiceNames();
$other_services = $this->Home_model->getActiveOtherServiceNames();
$f_services = $this->Home_model->getFooterServiceNames();
$f_other_services = $this->Home_model->getFooterOtherServiceNames();
$social_media = get_social_media();
?>

<header class="main-header clearfix">
    <marquee style="color:white">
        India's First CMMi Level 5 & ISO (9001:2015) Certified Digital Marketing Services Company
    </marquee>
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__logo pt-0 ">
                    <a href="<?php echo base_url(); ?>"><img height="100" width="250"
                            src="<?php echo base_url(); ?>assets/home/images/resources/logo-1.png"></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">


                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <!-- <li><a href="<?php echo base_url(); ?>about">About</a></li> -->
                        <li class="dropdown ">
                            <a href="<?php echo base_url(); ?>about">About Us</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>why-only-we">Why Only We</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>why-digital-marketing">Why Digital Marketing</a>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul class="custom-sub-menu">
                                        <!-- Add your custom sub-menu items here -->
                                        <li><a href="#">Sub-Menu Item 1</a></li>
                                        <li><a href="#">Sub-Menu Item 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu">
                            <a href="<?php echo base_url(); ?>services/1">Services </a>
                            <ul>
                                <li>
                                    <section class="home-showcase">
                                        <div class="container">
                                            <div class="home-showcase__inner">
                                                <div class="row">
                                                    <?php foreach ($h_services as $service): ?>
                                                        <div class="col-md-3">
                                                            <a class="home-showcase__item hover-white"
                                                                href="<?php echo base_url(); ?>service-detail/<?php echo $service['type'] ?>/<?php echo $service['service_url'] ?>">
                                                                <h3 class="home-showcase__title">
                                                                    <?php echo $service['name'] ?>
                                                                </h3>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu">
                            <a href="<?php echo base_url(); ?>services/2">Other Services </a>
                            <ul>
                                <li>
                                    <section class="home-showcase">
                                        <div class="container">
                                            <div class="home-showcase__inner">
                                                <div class="row">
                                                    <?php foreach ($other_services as $service): ?>
                                                        <div class="col-lg-3">
                                                            <a class="home-showcase__item hover-white"
                                                                href="<?php echo base_url(); ?>service-detail/<?php echo $service['type'] ?>/<?php echo $service['service_url'] ?>">
                                                                <h3 class="home-showcase__title">
                                                                    <?php echo $service['name'] ?>
                                                                </h3>
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>blogs">Blogs</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>




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
                        <span class="fas fa-phone-square-alt spin"></span>
                    </div>
                    <div class="main-menu-wrapper__call-number">
                        <p>Reach US:</p>
                        <!-- <h5><a href="tel:040-2704708">040-2704708</a></h5> -->
                        <h5><a href="tel:91 9154357401">+91 9154357404/01/02</a></h5>
                        <!-- <h5><a href="tel:91 9154357402">+91
                                9154357402</a></h5> -->
                        <!-- <h5><a href="info@digitalwinbusinessagency.com">info@digitalwinbusinessagency.com</a></h5> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>