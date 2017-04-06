<?php
	global $icredux, $ic_cart;
?>
<!-- HEADER -->
<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

			<?php if(!empty($icredux['ic-logo-file']['url'])) { ?>
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo esc_url(bloginfo('home')); ?>">
                	<img src="<?php echo $icredux['ic-logo-file']['url']; ?>" alt="<?php bloginfo('name'); ?>"/>
                </a>
            </div>
            <!-- /Logo -->
            <?php } ?>

            <!-- Header search -->
            <div class="header-search">
            	<form action="" method="GET">
	                <input class="form-control" name="s" type="text" placeholder="<?php _e('Търсене...','camal'); ?>"/>
	                <button><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- /Header search -->

            <!-- Header shopping cart -->
            <div class="header-cart">
                <div class="cart-wrapper">
                    <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart">
                    	<i class="fa fa-shopping-cart"></i> 
                    	<span class="hidden-xs"> <?php echo $ic_cart->cart_count();?> арт. &nbsp; - &nbsp; <?php echo $ic_cart->cart_count(); ?> лв </span> 
                    	<i class="fa fa-angle-down"></i>
                    </a>
                    <!-- Mobile menu toggle button -->
                    <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                    <!-- /Mobile menu toggle button -->
                </div>
            </div>
            <!-- Header shopping cart -->

        </div>
    </div>
    <div class="navigation-wrapper">
        <div class="container">
            <!-- Navigation -->
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                
                <?php wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'menu_class' => 'nav sf-menu',
				)); ?>
				<!--
                <ul class="nav sf-menu">
                    <li class="active"><a href="index.html">Homepage</a>
                        <ul>
                            <li><a href="index.html">Homepage 1</a></li>
                        </ul>
                    </li>
                    <li class="sale"><a href="category.html">Sale</a></li>
                </ul> -->
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
</header>
<!-- /HEADER -->
