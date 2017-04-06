<?php
	global $wp_query;
?>
<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h1><?php echo $wp_query -> get_queried_object() -> name; ?></h1>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo esc_url(bloginfo('home'));?>">Начало</a></li>
            <li class="active"><?php echo $wp_query -> get_queried_object() -> name; ?></li>
        </ul>
    </div>
</section>
<!-- /BREADCRUMBS -->