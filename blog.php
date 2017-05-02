<div class="col-md-6">
	<div class="post clearfix">
		<figure>
			<a href="<?php echo get_permalink(); ?>"><img src="<?php echo wp_get_attachment_image_src(get_field('photo_blog'), 'photo_blog')[0]; ?>" alt="" class="img-responsive" ></a>
		</figure>
		<article>
			<span class="date"><?php echo get_the_date(); ?></span>
			<h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			<p><?php echo get_field('short_blog'); ?></p>
		</article>
	</div>
</div>


