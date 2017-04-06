<?php
	global $icako_product, $post;
	$productInfo = $icako_product->icakocart_get_productinfo($post->ID);
	$thumbnails = new Attachments( 'attachments' ); 
?>

<div class="col-md-6">
	<?php if($productInfo['icpromo'] == 1) { ?>
    <div class="badges">
        <div class="hot">Промоция</div>
    </div>
    <?php } ?>
    
    <div class="image">
		<a href="<?php echo $productInfo['images']['full'][0];?>" class="fancybox" rel="product">
			<img src="<?=$productInfo['images']['full'][0];?>" class="img-responsive">
		</a>
	</div>
	
	<?php if( $thumbnails->exist() ) { ?>
	<div class="images">
		<div id="product-thumbnails" class="owl-carousel">
			<?php while( $thumbnails->get() ) : ?>
				<div class="item"><a href="<?=$thumbnails->url();?>" class="fancybox" rel="product"><img src="<?=$thumbnails->url();?>" class="img-responsive" alt=""></a></div>				
			<?php endwhile; ?>
		</div>
	</div>
	<?php } // thumbnails ?>
	
</div>