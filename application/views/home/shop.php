<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from qutiiz-html.vercel.app/main-html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:32 GMT -->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php include("includes/styles.php"); ?>
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
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
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
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">shop</li>
                    </ul>
                    <h2>Products</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Start Shop Page-->
        <section class="shop-page">
            <div class="container">
                <div class="row">
                    <!--Start Shop Sidebar-->
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <!--Start Shop Sidebar Single-->
                            <div class="shop-search shop-sidebar__single wow animated fadeInUp" data-wow-delay="0.1s">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <!--End Shop Sidebar Single-->
                            <!--Start Shop Sidebar Single-->
                            <div class="shop-range shop-sidebar__single wow animated fadeInUp" data-wow-delay="0.3s">
                                <h3 class="shop-sidebar__title">Price</h3>
                                <div class="product-sidebar__price-range">
                                    <div class="range-slider-price" data-range-min="50" data-range-max="500"
                                        data-limit="500" data-start-min="50" data-start-max="500"
                                        id="range-slider-price"></div>
                                    <div class="form-group">
                                        <div class="left">
                                            <p>$<span id="min-value-rangeslider"></span></p>
                                            <span>-</span>
                                            <p>$<span id="max-value-rangeslider"></span></p>
                                        </div>
                                        <div class="right">
                                            <button class="thm-btn btn-style-one">
                                                <span>Filter</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Shop Sidebar Single-->

                            <!--Start Shop Sidebar Single-->
                            <div class="shop-category shop-sidebar__single wow animated fadeInUp" data-wow-delay="0.5s">
                                <h3 class="shop-sidebar__title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Business</a></li>
                                    <li class="active"><a href="#">Introductions</a></li>
                                    <li><a href="#">One Page Template</a></li>
                                    <li><a href="#">Parallax Effects</a></li>
                                    <li><a href="#">New Technologies</a></li>
                                    <li><a href="#">Video Backgrounds</a></li>
                                </ul>
                            </div>
                            <!--End Shop Sidebar Single-->
                        </div>
                    </div>
                    <!--End Shop Sidebar-->


                    <div class="col-lg-9">
                        <div class="product-sorting default-form">
                            <p>Showing 1–9 of 12 results</p>
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Sort by popular">Sort by popular</option>
                                    <option value="1">Sort by popular</option>
                                    <option value="2">Sort by Price</option>
                                    <option value="3">Sort by Ratings</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img1.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">Classic
                                                chair</a>
                                        </h3>
                                        <p class="product-card__price">$33.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img2.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">Comfy chair</a>
                                        </h3>
                                        <p class="product-card__price">$26.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img3.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">boss chair</a>
                                        </h3>
                                        <p class="product-card__price">$58.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img4.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">Sofa chair</a>
                                        </h3>
                                        <p class="product-card__price">$33.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img5.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">wooden stool</a>
                                        </h3>
                                        <p class="product-card__price">$81.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img6.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">Big Sofa</a>
                                        </h3>
                                        <p class="product-card__price">$58.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img7.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">round chair</a>
                                        </h3>
                                        <p class="product-card__price">$33.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img8.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">big stool</a>
                                        </h3>
                                        <p class="product-card__price">$44.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->

                            <!--Start Product Card-->
                            <div class="col-sm-12 col-md-6 col-lg-4 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="assets/images/update1.0/products/shop-v1-img9.jpg" alt="">
                                        <div class="product-card__buttons">
                                            <a href="product-details.html" class=" thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">Classic
                                                chair</a>
                                        </h3>
                                        <p class="product-card__price">$16.00</p>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Card-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Start Shop Page-->

        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->

    
    <!-- /.search-popup -->
    <?php include("includes/scripts.php"); ?>
</body>


<!-- Mirrored from qutiiz-html.vercel.app/main-html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:24:35 GMT -->

</html>