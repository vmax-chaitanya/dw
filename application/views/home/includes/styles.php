<meta charset="UTF-8" />
<meta name="description" content="<?php echo $meta_description;?>" />
<meta name="keywords" content="<?php echo $meta_keywords;?>">
<meta name="facebook-domain-verification" content="gopzcud8n0uo2g0cqcekp1a7e7fhff" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
<?php echo $page_title;?>
</title>

<?php // include("includes/seo_pages_scripts.php"); 
?>



<!-- favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/home/images/favicons/favicon.png" />
<link rel="canonical" href="https://digitalwinbusinessagency.com/" />

<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/home/images/favicons/favicon.png" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/home/images/favicons/favicon.png" />
<link rel="manifest" href="<?php echo base_url(); ?>assets/home/images/favicons/site.webmanifest" />
<meta name="description" content="DigitalWin HTML Template For Business" />

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/animate/animate.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/animate/custom-animate.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/jarallax/jarallax.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/nouislider/nouislider.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/nouislider/nouislider.pips.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/odometer/odometer.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/swiper/swiper.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/qutiiz-icons/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/qutiiz-icons-two/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/tiny-slider/tiny-slider.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/reey-font/stylesheet.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/owl-carousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/bxslider/jquery.bxslider.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/vegas/vegas.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/timepicker/timePicker.css" />

<!-- template styles -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/qutiiz.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/qutiiz-responsive.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .error {
        font-size: 15px;
        color: red;
        display: none;
    }
</style>
<style>
    .home-showcase__item:hover {
        background-color: var(--qutiiz-base);
        color: var(--qutiiz-white) !important;
        border-radius: 20px;

    }

    .home-showcase__item:hover>h3 {
        padding: 10px;
        color: var(--qutiiz-white);
        text-align: left;
    }

    .hover-white:hover {
        color: white !important;
    }
</style>
<style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        width: 60px;
        height: 80px;
        /* background-color: green; Customize the background color */
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        animation: spin 3s infinite linear;
        /* Add spin animation */
        z-index: 9999;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .whatsapp-button img {
        width: 40px;
        height: 40px;
        transition: transform 0.9s ease-in-out;
    }

    .whatsapp-button:hover img {
        transform: rotate(-360deg);
    }
</style>
<style>
    .select-pad {
        padding: 2px 0px 15px 0px !important;
    }
</style>
<style>
    .service-details__sidebar-service {

        max-height: 700px;

        overflow-y: auto;

    }


    .service-details__sidebar-service-list li {

        margin: 5px 0;
    }


    .service-details__sidebar-service-list .current {

        font-weight: bold;
    }

    .disabled-input {
        cursor: no-drop;

    }
</style>
<style>
    .sticky-icon {
        z-index: 99;
        position: fixed;
        top: 25%;
        right: 0%;
        width: 38px;
        display: flex;
        flex-direction: column;

    }

    .sticky-icon a {
        border-radius: 50px 0px 0px 50px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        text-transform: uppercase;
        padding: 2px;
        font-size: 15px;
        font-family: 'Oswald', sans-serif;
        filter: grayscale(100%);
        transition: all 0.8s;
        width: 35px;
    }

    .sticky-icon a:hover {
        color: #FFF;
        filter: grayscale(0%);
        /* transform: translate(180px, 0px); */
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    .Facebook {
        background-color: #2C80D3;
        color: #FFF;
    }

    .Youtube {
        background-color: #fa0910;
        color: #FFF;
    }

    .Twitter {
        background-color: #53c5ff;
        color: #FFF;
    }

    .Instagram {
        background-color: #FD1D1D;
        color: #FFF;
    }

    .Google {
        background-color: #d34836;
        color: #FFF;
    }

    .LinkedIn {
        background-color: #0077B5;
        color: #FFF;
    }

    .Quora {
        background-color: #A82400;
        color: #FFF;
    }

    .Pinterest {
        background-color: #BD081C;
        color: #FFF;
    }

    .sticky-icon a i {
        background-color: #FFF;
        height: 30px;
        width: 30px;
        color: #000;
        text-align: center;
        line-height: 30px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    .sticky-icon a i.fa-facebook-f {
        background-color: #FFF;
        color: #2C80D3;
    }

    .sticky-icon a i.fa-google-plus-g {
        background-color: #FFF;
        color: #d34836;
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #FD1D1D;
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #fa0910;
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #53c5ff;
    }

    .sticky-icon a i.fa-linkedin {
        background-color: #FFF;
        color: #0077B5;
    }

    .sticky-icon a i.fa-quora {
        background-color: #FFF;
        color: #A82400;
    }

    .sticky-icon a i.fa-pinterest {
        background-color: #FFF;
        color: #BD081C;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .spin {
        animation: spin 2s linear infinite;
    }

    /* .fas fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    } */
</style>
<style>
    .inner__sub-menu {
        display: none;
        position: absolute;
        background-color: #d1cece;
        list-style: none;
        padding: 0;
        left: 4%;
        z-index: 999;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border: 57px;
        width: 95%;
    }

    .outer__menu-item:hover .inner__sub-menu {
        display: block;
    }

    .inner__sub-menu li a {
        font-size: 12px !important;
    }
</style>
<style>
    .inner__sub-menu {

        position: absolute;

        background-color: white;

        list-style-type: none !important;

        padding: 0px;

        z-index: 99;

        left: 15%;

    }

    .inner__sub-menu {

        display: none;

        position: absolute;

        background-color: #d1cece;

        list-style: none;

        padding: 0;

        left: 100%;

        z-index: 999;

        align-items: center;

        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

        border: 57px;

        width: 100%;

    }
</style>
<!-- Add these styles for the loading indicator -->
<style>
    .loading-indicator {
        display: none;
        margin-left: 10px; /* Adjust the margin as needed */
    }

    .loading-indicator::after {
        content: " ";
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        border-radius: 50%;
        border: 0.2em solid #ccc;
        border-top: 0.2em solid #333;
        animation: spin 1s linear infinite;
        margin-top: -0.75em;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
<style>
    .capture-referwch-image{
        width: 40px;
        height: 40px;
        margin-top: 7px;
        
    }
</style>
<style>
    .modal-body {
        text-align: center; /* Optional: Centers the image in the modal */
    }
    .responsive-image {
        max-width: 100%;
        height: auto;
    }
</style>
<style>
     /* Slider  for toools images in home page*/

     .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
        filter: grayscale(100%); /* Set initial state to black and white */
         transition: filter 0.3s ease; /* Add transition for smooth effect */
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
       
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    .slick-slide:hover img {
        filter: grayscale(0%);
        /* On hover, remove grayscale filter */
    }
</style>

<!-- <style>
.current > a {
    color: #9232b2 !important; /* Your desired color */
}
</style> -->





<?php
$this->load->helper('custom_helper');
// $h_services = $this->Home_model->getActiveServiceNames();
// $other_services = $this->Home_model->getActiveOtherServiceNames();
$f_services = $this->Home_model->getFooterServiceNames();

$h_training = $this->Home_model->getHeaderTrainingNames();
$f_training = $this->Home_model->getFooterTrainingNames();

// $f_other_services = $this->Home_model->getFooterOtherServiceNames();
$social_media = get_social_media();
$categories = $this->Home_model->getActiveServicesCategories();
$services = $this->Home_model->getActiveServicesNew();


?>

<!--Start Sticky Icon-->
<div class="sticky-icon">
    <a href="<?php echo $social_media['facebook']; ?>" target="__blank" class="Facebook"><i class="fab fa-facebook-f"> </i> </a>
    <a href="<?php echo $social_media['instagram']; ?>" target="__blank" class="Instagram"><i class="fab fa-instagram"></i> </a>
    <a href="<?php echo $social_media['linkedin']; ?>" target="__blank" class="LinkedIn"><i class="fab fa-linkedin"></i> </a>
    <a href="<?php echo $social_media['quora']; ?>" target="__blank" class="Quora"><i class="fab fa-quora"></i> </a>
    <a href="<?php echo $social_media['pinterest']; ?>" target="__blank" class="Pinterest"><i class="fab fa-pinterest"></i> </a>
    <a href="<?php echo $social_media['youtube']; ?>" target="__blank" class="Youtube"><i class="fab fa-youtube"></i> </a>
    <!-- <a href="https://twitter.com/login" class="Twitter"><i class="fab fa-twitter"> </i> Twitter </a> -->


</div>
<!--End Sticky Icon-->