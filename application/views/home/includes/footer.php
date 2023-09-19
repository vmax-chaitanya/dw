<!-- /////// -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Quick Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-page__form mt-3">
                    <form id="brouchure" name="brouchure" method="POST" class="" action="<?php echo base_url('training-enquiry'); ?>">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="email" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="mobile" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write a message"></textarea>
                                </div>
                                <!-- <input type="hidden" name="services_ids" value="<?php echo $this->uri->segment(2); ?>"> -->

                                <button type="submit" class="thm-btn comment-form__btn ajax-form">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- //////// -->
<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__top-left">
                    <div class="site-footer__top-logo">
                        <a href="<?php echo base_url(); ?>"><img
                                src="<?php echo base_url(); ?>assets/home/images/resources/logo-1.png" alt height="80"
                                width="180" style="margin-top: -30px;"></a>
                    </div>
                    <div class="site-footer__top-title-box">
                        <h3 class="site-footer__top-title">Let's
                            work together - <button style="padding: left 20px; background-color:#9232b2" type="button"
                                class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Download Brouchure
                            </button></h3>

                    </div>
                </div>
                <div class="site-footer__top-right">
                    <div class="site-footer__top-right-social">

                        <a href="<?php echo $social_media['facebook']; ?>"><i class="fab fa-facebook"></i></a>

                        <a target="__blank" href="<?php echo $social_media['instagram']; ?>"><i
                                class="fab fa-instagram"></i></a>
                        <a target="__blank" href="<?php echo $social_media['linkedin']; ?>"><i
                                class="fab fa-linkedin"></i></a>
                        <a target="__blank" href="<?php echo $social_media['quora']; ?>"><i
                                class="fab fa-quora"></i></a>
                        <a target="__blank" href="<?php echo $social_media['pinterest']; ?>"><i
                                class="fab fa-pinterest-p"></i></a>
                        <a target="__blank" href="<?php echo $social_media['youtube']; ?>"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer__middle">
        <div class="site-footer-shape"
            style="background-image: url(<?php echo base_url(); ?>assets/home/images/shapes/site-footer-shape.png)">
        </div>
        <div class="container">
            <div class="site-footer__middle-inner">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__explore clearfix">
                            <h3 class="footer-widget__title">Quick Links</h3>
                            <ul class="footer-widget__explore-list list-unstyled clearfix">
                                <!-- <li><a href="services.html">What We
                                                Offer</a></li> -->
                                <li><a href="#"><i class="fa-li fa fa-spinner "></i> &nbsp; Support</a></li>


                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__explore clearfix">
                            <h3 class="footer-widget__title">Services</h3>
                            <ul class="footer-widget__explore-list list-unstyled clearfix">
                                <?php foreach ($f_services as $service): ?>

                                    <li><a href="<?php echo base_url(); ?>service-detail/<?php echo $service['id'] ?>"><i
                                                class="fa-li fa fa-spinner "></i> &nbsp;
                                            <?php echo $service['name'] ?>
                                        </a></li>
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
                                <li><a href="#"><i class="fa-li fa fa-spinner "></i> &nbsp; Certified course in
                                        digital marketing.</a></li>

                                <li><a href="#"><i class="fa-li fa fa-spinner "></i> &nbsp; Diploma in digital
                                        marketing.</a></li>
                                <li><a href="#"><i class="fa-li fa fa-spinner " style="padding-right:5px"></i> &nbsp;
                                        Advanced digital
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
                                <p class="site-footer__bottom-text">
                                    Copyrights © DigitalWin Business Agency Pvt.Ltd., </p>
                            </div>
                            <div class="site-footer__bottom-right">
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <li><a href="<?php echo base_url(); ?>disclamer">Disclamer</a></li>
                                    <li><a href="<?php echo base_url(); ?>privacy-policy">Privacy
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
                src="<?php echo base_url(); ?>assets/images/WhatsApp.png" class="img-fluid " alt="whatsapp"> </a>
    </div>
</div>