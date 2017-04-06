<?php
	get_header();
	
	global $icproducts, $wp_query, $icredux;
	$icproducts_category = $icproducts->categories();
?>
	
<div class="content-area">
			
	<?php
		// BreadCrumbs
		get_template_part('template-parts/breadcrumbs');
	?>
	
    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar">
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">
                    
                    <?php if($icproducts_category->have_posts()) : ?>
	
                        <!-- Products grid -->
                        <div class="row products grid">
							<?php
								while ($icproducts_category -> have_posts()) :
									$icproducts_category -> the_post();
									
									// Product Box
									get_template_part('template-parts/products/loop/product_box');
									
								endwhile;
                            ?>
                        </div>
                        <!-- /Products grid -->

                    <?php
                    	// Pagination
						get_template_part('template-parts/products/loop/pagination');
                    ?>
					<?php else: ?>
						<p><?php _e('Няма намерени продукти.','camal'); ?></p>
					<?php endif; ?>
                </div>
                <!-- /CONTENT -->
                
                <?php
                	get_sidebar();
                ?>

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->
	<br /><br />
	
	<?php
		// Boxes
		get_template_part('template-parts/home/boxes');
	?>

</div>

<?php
	get_footer();
?>