<?php
	global $icproducts, $wp_query, $icredux;
	$icproducts_category = $icproducts->categories();
?>

<!-- Pagination -->
	
<?php 
	$per_page = (!empty($icredux['ic-categories-perpaged'])) ? $icredux['ic-categories-perpaged'] : 20;
	$icproducts -> pagination($icproducts_category -> found_posts, $per_page);
	wp_reset_postdata();
?>
<!-- /Pagination -->

