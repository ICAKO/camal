<!-- PAGE -->
<section class="page-section">
    <div class="container">

        <div class="row product-single">
            
            <?php
				// Images
				get_template_part('template-parts/products/single/images');
			?>
            
            <div class="col-md-6">
                <h2 class="product-title"><?php the_title(); ?></h2>
                
                <div class="product-availability">Наличност: <strong>В наличност</strong></div>
                
                <hr class="page-divider small">

                <div class="product-price">
                	<?php
                		// Product Price
						get_template_part('template-parts/products/single/price');
                	?>
                </div>

                <hr class="page-divider">

                <div class="product-text">
                    <?php the_content(); ?>
                </div>
                
                <hr class="page-divider">

               <?php
               		
               		// Product Info
					get_template_part('template-parts/products/single/select-size');
					
					// Product Info
					get_template_part('template-parts/products/single/form');
				?>


            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->