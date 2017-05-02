<?php
$image = wp_get_attachment_image_src(get_field('download_photo'), 'large')[0];

?>
<li>
	<img src="<?php echo $image; ?>" class="img-responsive" />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="detail">
					<div class="white">
						<h2><?php echo nealine(get_the_title()); ?></h2>
						<span class="slide-location"><?php echo get_the_content(); ?></span>
						<div class="bar"></div>
						<?php if(get_field('link')) { ?><span class="slide-price"><a href="<?php echo relink(get_field('link'))[0]; ?>"><?php echo relink(get_field('link'))[1]; ?> <i class="fa fa-link" aria-hidden="true"></i></a></span><?php } ?>
					</div>
					<div class="red">
						<?php echo tes(get_field('tes')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>