<?php

$this->load->helper('custom_helper');

$social_media = get_social_media();
// echo $social_media['gmail'];

?>
<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container" >
            <div class="site-footer__top-inner">
                <div class="site-footer__top-left" style="margin-left: -45px !important;">
                    <div class="site-footer__top-logo">
                        <a href="<?php echo base_url(); ?>"><img
                                src="<?php echo base_url(); ?>assets/home/images/resources/logo-1.png" alt height="80"
                                width="180" style="margin-top: -30px;"></a>
                    </div>
                    <div class="site-footer__top-title-box">
                        <h3 class="site-footer__top-title">Let's
                            work together - <a href="mailto:<?php echo $social_media['gmail']; ?>"><?php echo $social_media['gmail']; ?></a></h3>
                    </div>
                </div>
                <div class="site-footer__top-right">
                    <div class="site-footer__top-right-social">

                        <a href="<?php echo $social_media['facebook']; ?>"><i class="fab fa-facebook"></i></a>

                        <a href="<?php echo $social_media['instagram']; ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $social_media['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $social_media['quora']; ?>"><i class="fab fa-quora"></i></a>
                        <a href="<?php echo $social_media['pinterest']; ?>"><i class="fab fa-pinterest-p"></i></a>
                        <a href="<?php echo $social_media['twitter']; ?>"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__middle">
        <div class="site-footer-shape" style="background-image: url(assets/images/shapes/site-footer-shape.png)"></div>
        <div class="container">
            <div class="site-footer__middle-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <h3 class="footer-widget__title">About Us</h3>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">DigitalWin
                                    Business Agency AI Driven - Your
                                    dynamic partner for digital
                                    success. Tailored strategies,
                                    data-driven results...<a href="<?php echo base_url(); ?>about"
                                        style="color:blue !important">View More</a> </p>
                            </div>
                            <!-- <ul class="footer-widget__about-contact list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:+919154357401">+91
                                            9154357401</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:info@digitalwinbusinessagency">info@digitalwinbusinessagency</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>DigitalWin BUSINESS
                                            AGENCY PVT LTD.,
                                            MIG-161, 3rd Floor,
                                            Above Lenskart, Opp Sri
                                            Sri Holistic Hospital,
                                            Road No 1, KPHB,
                                            Hyderabad - 500085</p>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- <div
                                class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp"
                                data-wow-delay="200ms">
                                <div
                                    class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Links</h3>
                                    <ul
                                        class="footer-widget__links-list list-unstyled clearfix">
                                        <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                                        <li><a href="<?php echo base_url(); ?>about">Our Mission</a></li>
                                        <li><a href="team.html">Meet the
                                                Team</a></li>
                                        <li><a href="project.html">Our
                                                Projects</a></li>
                                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div> -->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__explore clearfix">
                            <h3 class="footer-widget__title">Services</h3>
                            <ul class="footer-widget__explore-list list-unstyled clearfix">
                                <?php foreach ($h_services as $service): ?>

                                    <li><a href="<?php echo base_url(); ?>service-detail/<?php echo $service['id'] ?>"><?php echo $service['name'] ?></a></li>
                                <?php endforeach; ?>


                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__explore clearfix">
                            <h3 class="footer-widget__title">Training</h3>
                            <ul class="footer-widget__explore-list list-unstyled clearfix">
                                <!-- <li><a href="services.html">What We
                                                Offer</a></li> -->
                                <li><a href="#">Certified course in
                                        digital marketing.</a></li>
                                <li><a href="#">Diploma in digital
                                        marketing.</a></li>
                                <li><a href="#">Advanced digital
                                        marketing with AI.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__explore clearfix">
                            <h3 class="footer-widget__title">Contact Us</h3>
                            <ul class="footer-widget__about-contact list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:+919154357401">+91
                                            9154357401</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:info@digitalwinbusinessagency">info@digitalwinbusinessagency</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>DigitalWin BUSINESS
                                            AGENCY PVT LTD.,
                                            MIG-161, 3rd Floor,
                                            Above Lenskart, Opp Sri
                                            Sri Holistic Hospital,
                                            Road No 1, KPHB,
                                            Hyderabad - 500085</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div
                                class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp"
                                data-wow-delay="400ms">
                                <div
                                    class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                    <form
                                        class="footer-widget__newsletter-form">
                                        <div
                                            class="footer-widget__newsletter-input-box">
                                            <input type="email"
                                                placeholder="Email address"
                                                name="email">
                                            <button type="submit"
                                                class="footer-widget__newsletter-btn"><i
                                                    class="far fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                    <div
                                        class="footer-widget__newsletter-bottom">
                                        <div
                                            class="footer-widget__newsletter-bottom-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div
                                            class="footer-widget__newsletter-bottom-text">
                                            <p>I agree to all your terms and
                                                policies</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <p class="site-footer__bottom-text">©
                                    Copyrights, 2023 <a href="#">digitalwinbusinessagency</a></p>
                            </div>
                            <div class="site-footer__bottom-right">
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <li><a href="<?php echo base_url(); ?>about">Disclamer</a></li>
                                    <li><a href="<?php echo base_url(); ?>about">Privacy
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="fix-items d-flex align-items-center">
    <!--<div class="demo">-->
    <!--	<a href="#demo" class="btn-demo">Book a Demo</a>-->
    <!--</div>-->
    <div class="wtsapp">

        <a href="https://wa.me/+919154357401" target="_blank"> <img
                src="<?php echo base_url(); ?>assets/images/WhatsApp.png" class="img-fluid" alt="whatsapp"> </a>
    </div>
</div>