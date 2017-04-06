<?php
	global $ic_cart, $icredux;
?>

<!-- Popup: Shopping cart items -->
<div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="container">
            <div class="cart-items">
            	<div class="cart-items-inner">
	            	<?php if($ic_cart->cart_count() == 0) { ?>
	            	<div class="media"><?php _e('Няма намерени продукти в количката.','camal'); ?></div>
	            	<div class="media"> 
	                        <div class="media-body">
	                            <div>
	                                <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal"><?php _e('Затвори','camal'); ?></a>
	                            </div>
	                        </div>
	                   </div>
	        		<?php } else { ?>
	        			
	        			<?php foreach($ic_cart->cart_items() as $product) { ?>
	                    <div class="media">
	                        <a class="pull-left" href="<?php echo esc_url(get_the_permalink($product->productid));?>"><img class="media-object item-image" src="<?php echo $product['featured']; ?>" alt="<?php echo $product['title'];?>"></a>
	                        <p class="pull-right item-price"><?php echo $product['price']*$product['productQty'];?> лв</p>
	                        <div class="media-body">
	                            <h4 class="media-heading item-title">
	                            	<a href="<?php echo esc_url(get_the_permalink($product->productid));?>"><?php echo $product['productQty'];?>x <?php echo $product['title'];?></a>
	                            </h4>
	                            <p class="item-desc"></p>
	                        </div>
	                    </div>
	                    <?php } ?>
	                    
	                    <div class="media">
	                        <p class="pull-right item-price"><?php echo $ic_cart->cart_total(); ?> лв</p>
	                        <div class="media-body">
	                            <h4 class="media-heading item-title summary">Общо:</h4>
	                        </div>
	                    </div>
	                    <div class="media"> 
	                        <div class="media-body">
	                            <div>
	                                <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal"><?php _e('Затвори','camal'); ?></a>
	                                <?php if(!empty($icredux['ic-cart-cartpage'])) { ?>
										<a href="<?php echo get_the_permalink($icredux['ic-cart-cartpage']); ?>" class="btn btn-theme btn-theme-transparent btn-call-checkout"><?php _e('Виж количка','camal'); ?></a>
	                            	<?php } ?>
	                            </div>
	                        </div>
	                    </div>
	                <?php } ?>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- /Popup: Shopping cart items -->