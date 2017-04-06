<?php
	global $icako_product, $post;
	$productInfo = $icako_product->icakocart_get_productinfo($post->ID);
	
?>
<div class="form-group required">
	<select name="product_size" id="productSize" onchange="icakocart_productsize('<?php echo $productInfo['price'];?>','<?php echo $productInfo['oldprice'];?>')">
		<option data-price="<?=$productInfo['price'];?>" value="">[ Изберете ]</option>
		<?php foreach($productInfo['variations_array'] as $varID=>$var) : if($var['qty'] > 0) : ?>
		<option value="<?php echo $varID;?>" data-qty="<?php echo $var['qty'];?>" data-varid="<?=$varID;?>" data-price="<?php echo $var['price'];?>">- <?php echo $var['size'];?></option>
		<?php endif; endforeach; ?>
	</select>
</div>