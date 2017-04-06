<?php
	global $icredux, $ic_cart;
?>
<html <?php language_attributes(); ?>>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.ico">

        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/iesupport/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('wide'); ?>>
		
		<?php
			// Preloader
			get_template_part('template-parts/header/preloader');
		?>
        <!-- WRAPPER -->
        <div class="wrapper">

			<?php
				// Mini Cart ( Modal )
				get_template_part('template-parts/header/mini_cart');
				
				// Top Bar
				get_template_part('template-parts/header/header_topbar');
				
				// Main Header
				get_template_part('template-parts/header/main_header');
			?>