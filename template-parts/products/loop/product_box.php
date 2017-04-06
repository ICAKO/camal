<?php
	global $prd, $icako_product, $post;
	$productInfo = $icako_product->icakocart_get_productinfo($post->ID);
?>
<div class="col-md-4 col-sm-6">
    <div class="thumbnail no-border no-padding">
        <div class="media">
            <a class="media-link" href="<?php the_permalink(); ?>">
            	<?php if(has_post_thumbnail($post->ID)) { ?>
                <img src="<?php echo $productInfo['images']['medium'][0];?>" alt="<?php the_title(); ?>">
                <span class="icon-view">
                    <strong><i class="fa fa-eye"></i></strong>
                </span>
                <?php } ?>
            </a>
        </div>
        <div class="caption text-center">
            <h4 class="caption-title"><?php the_title(); ?></h4>
            
            <div class="price">
            	<ins><?php echo $productInfo['price'];?> лв</ins>
            	
            	<?php if($productInfo['ispromote'] == 1) { ?>
            		<del><?php echo $productInfo['oldprice'];?> лв</del>
            	<?php } ?>
            	
            </div>
            <div class="buttons">
            	<a class="btn btn-theme btn-theme-transparent btn-icon-left" href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i><?php _e('Купи','camal'); ?></a>
            </div>
        </div>
    </div>
</div>