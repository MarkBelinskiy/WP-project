<?php 
$image = wp_get_attachment_image_src(get_field('photo_full_about'), 'large')[0];
 ?>

<!-- CONTENTS -->
<div class="full-width page-header">
	<div class="container">
		<div class="page-contents">
			<div class="row">
				<div class="col-md-5 col-sm-6">
					<figure class="m0">
						<a href="#">
							<img src="<?php  echo $image; ?>" alt="Profile Image" class="img-responsive">
							<div class="overlay"></div>
						</a>
					</figure>
				</div>
				<div class="full_blog">
					<?php echo get_field('full_text_about'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTENTS -->

	<!-- BANNER  -->
	<div class="full-width history">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo get_field('second_block_about'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- BANNER -->
</div>