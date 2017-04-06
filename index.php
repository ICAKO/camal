<?php
	get_header();
	
?>
    <!-- CONTENT AREA -->
    <div class="content-area">

		<?php
			
			// Slider
			get_template_part('template-parts/home/slider');
		
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
			
			// Boxes
			get_template_part('template-parts/home/boxes');
		?>

    </div>
    <!-- /CONTENT AREA -->
    
<?php
	get_footer();
?>