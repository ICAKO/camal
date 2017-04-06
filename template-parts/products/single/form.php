<?php
	global $ic_cart;
	$ic_cart->form_open();
?>

<div>
	Бройки:
	<?php 
		$ic_cart->product_qty_input('input-text qty');
		$ic_cart->product_button_addtocart(array('class' => 'btn', ));
	?>
</div>

<?php
	$ic_cart->form_close();
?>