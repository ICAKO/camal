 <!-- Header top bar -->
<div class="top-bar">
    <div class="container">
    	<?php
    		wp_nav_menu(array(
				'theme_location' => 'top',
				'container'	=>	'div',
				'container_class' => 'top-bar-right',
				'menu_class' => 'list-inline'
			));
		?>
    </div>
</div>
<!-- /Header top bar -->