<?php
	get_header();
	if(have_posts()) : while(have_posts()) : the_post();
?>

<div class="content-area">
	
	<?php
		// Product Info
		get_template_part('template-parts/products/single/product');
	?>

</div>

<?php
	endwhile; endif;
	get_footer();
?>