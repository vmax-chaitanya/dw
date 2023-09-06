<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
    <?php echo $page_title; ?>
</title>
<!-- favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo base_url(); ?>assets/home/images/favicons/favicon.png" />
<link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo base_url(); ?>assets/home/images/favicons/favicon.png" />
<link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo base_url(); ?>assets/home/images/favicons/favicon.png" />
<link rel="manifest" href="<?php echo base_url(); ?>assets/home/images/favicons/site.webmanifest" />
<meta name="description" content="DigitalWin HTML Template For Business" />

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">

<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/animate/animate.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/animate/custom-animate.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/jarallax/jarallax.css" />
<link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/home/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
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
<link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/home/vendors/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/vegas/vegas.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/vendors/timepicker/timePicker.css" />

<!-- template styles -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/qutiiz.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/qutiiz-responsive.css" />
<style>
    .error {
        font-size: 15px;
        color: red;
        display: none;
    }
</style>
<style>
        .sections__container{
            min-width: 900px;
        }
        .sections__container span a{
            font-size: 16px;
            line-height: 30px;
            color: var(--qutiiz-black);
            font-family: var(--qutiiz-font-two);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 500;
            display: flex;
            padding-left: 20px;
            padding-right: 20px;
             padding-top: 10px;
            padding-bottom: 10px;
            transition: 500ms;
            text-align: center;
             /* min-width: 270px; */
        }
        .sections__container span{
            width: 100%;
           
        }
        .sections__container span:hover{
            background-color: var(--qutiiz-base);
            color: var(--qutiiz-white);
        }
        .sections__container span:hover > a{
            color: var(--qutiiz-white);
        }
        .sections__container {
            margin-left: -10px;
            margin-right: -10px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .sections__container .col {
            -ms-flex: 0 0 calc(33.333% - 20px);
            flex: 0 0 calc(33.333% - 20px);
            max-width: calc(33.333% - 20px);
            text-align: center;
        } 
        .main-menu .main-menu__list>li>ul, .main-menu .main-menu__list>li>ul>li>ul, .stricky-header .main-menu__list>li>ul, .stricky-header .main-menu__list>li>ul>li>ul{
            left: -540%!important; 
        }
    </style>