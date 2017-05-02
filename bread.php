<!-- BREADCRUMBS-->
<div class="full-width page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('<i class="fa fa-angle-right" aria-hidden="true"></i>'); ?>
				</div>
				<h2 class="page-title"><?php echo get_the_title(); ?></h2>
				<p class="single-post-meta">
					<span><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></span>
					<span class="sep">|</span>
					<span><i class="fa fa-user"></i><?php echo get_the_author(); ?></span>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- BREADCRUMBS -->