<?php
	get_header();
	
?>
            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- PAGE -->
                <section class="page-section no-padding slider">
                    <div class="container full-width">

                        <div class="main-slider">
                            <div class="owl-carousel" id="main-slider">

                                <!-- Slide 1 -->
                                <div class="item slide1">
                                    <img class="slide-img" src="<?php echo get_template_directory_uri();?>/assets/img/preview/slider/slide-1.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">The Biggest</h2>
                                                        <h3 class="caption-subtitle">Sale</h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 1 -->

                                <!-- Slide 2 -->
                                <div class="item slide2 alt">
                                    <img class="slide-img" src="<?php echo get_template_directory_uri();?>/assets/img/preview/slider/slide-2.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">New Arrivals On Sale</h2>
                                                        <h3 class="caption-subtitle"><span>NIKE Sports Shoes </span></h3>
                                                        <div class="price">
                                                            <span>$</span><ins>49</ins>
                                                            <span>$</span><del>86</del>
                                                        </div>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 2 -->

                                <!-- Slide 3 -->
                                <div class="item slide3 dark">
                                    <img class="slide-img" src="<?php echo get_template_directory_uri();?>/assets/img/preview/slider/slide-3.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">New Arrivals On Sale</h2>
                                                        <h3 class="caption-subtitle"><span>NIKE Sports Shoes </span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 3 -->

                            </div>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

				<?php
					// Mini Banners
					get_template_part('template-parts/home/mini_banners');
					
					// Featured Products
					get_template_part('template-parts/home/home_featuredproducts');
					
					// Line Free Shipping
					get_template_part('template-parts/home/line_freeshipping');
					
					// Top Rated Products
					get_template_part('template-parts/home/top_rated');
					
					// Brands
					get_template_part('template-parts/home/brands');
				?>






                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Top Sellers</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-1.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Top Accessories</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-4.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-5.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-6.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Top Newest</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-7.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-8.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/img/preview/shop/top-sellers-9.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shoes Product Header</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section no-padding-top">
                    <div class="container">
                        <div class="row blocks shop-info-banners">
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-gift"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Buy 1 Get 1</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-comments"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Call to Free</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Money Back!</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->
<?php
	get_footer();
?>