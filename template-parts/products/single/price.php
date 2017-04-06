<?php
	global $icako_product, $post, $icproducts;
	$productInfo = $icako_product->icakocart_get_productinfo($post->ID);
	
?>
<div class="price-wrap">
	
	<?php if(!empty($productInfo['oldprice'])) : ?>
		<span class="full-price"><?=$productInfo['price'];?> лв </span>
		<span class="p-price"><?=$productInfo['oldprice'];?> лв</span>
    <?php else: ?>
    	<span class="full-price"><?=$productInfo['price'];?> лв </span>
    <?php endif; ?>
    <?php if(!empty($productInfo['oldprice'])) :
		$procent = 100-(round($productInfo['price']/$productInfo['oldprice']*100));
	 ?>
    	<span class="price-off">- <?=$procent;?>%</span>
    <?php endif; ?>
</div>