<?php if (in_category('blog')) { ?>
	<!-- POST DETAIL -->
<div class="full-width page-wrap">
	<div class="container">
		<div class="page-contents">
			<div class="row">
				<div class="col-md-6">
					<figure class="m0">
						<a href="#">
							<img src="<?php echo wp_get_attachment_image_src(get_field('photo_blog'), 'large')[0];?>" alt="Profile Image" class="img-responsive">
							<div class="overlay"></div>
						</a>
					</figure>
				</div>
				<div class="full_blog">
					<p>	<?php echo get_field('full_blog'); ?> </p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- POST DETAIL -->

<!-- BLOG POSTS -->
<div class="blog-posts">
	<div class="container">
		<h2>Еще статьи по этой теме</h2><br>

		<div class="row">
			
			<?php 
			$query2 = new WP_Query(array( 'category_name' => 'blog', 'post_limits' => 2 , 'post__not_in' => array(get_the_ID())));
			while( $query2->have_posts() ) {
				$query2->the_post();
				get_template_part( 'blog', get_post_format() );
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<!-- BLOG POSTS -->
<?php } ?>

<?php if (!in_category('blog')) {
	$images = "";
	$thumbs = "";
	$photos = get_field('gallery');
	if($photos) {
		foreach(explode(",", $photos) as $id) {
			$thumb = wp_get_attachment_image_src($id, 'thumbnail')[0];
			$large = wp_get_attachment_image_src($id, 'large')[0];
			if($thumb && $large) {
				$images .= '<a href="'.$large.'" class="bigestimg" rel="gal"><img src="'.$thumb.'" class="img-responsive"><div class="overlay"></div></a>';
				$thumbs .= '<a><img src="'.$thumb.'"></a>';
			}
		}
	}
?>

<div class="properties-page property-single">
	<div class="container">
		<div class="row-fluid">
			<!-- PROPERTY SLIDER -->
			<div class="col-md-7 col-sm-6 property-slider nopadding">
				<figure>
					<?php echo $images; ?>
				</figure>
				<div class="thumbnails">
					<?php echo $thumbs; ?>
				</div>
			</div>
			<!-- PROPERTY SLIDER -->

			<!-- PROPERTY DATA -->
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<!-- PROPERTY DATA -->

	<!-- BANNER -->
	<div class="full-width personal-agent">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<figure>
						<img src="<?php echo wp_get_attachment_image_src(get_field('photo_about', 239), 'photo_moto')[0];?>"  alt="Pic" class="img-responsive">
					</figure>
				</div>
				<div class="col-md-8 col-sm-8">
					<article>
						<span>наш <i class="fa fa-level-down" aria-hidden="true"></i></span>
						<h2>подход к работе</h2>
						<p><?php echo get_field('about-us', 239); ?></p>
						<a href="<?php echo get_permalink(239); ?>"><button type="button" class="btn btn-danger">Читать о нас</button></a>
					</article>
				</div>
			</div>
		</div>
	</div>
	<!-- BANNER -->

	<!-- ITEMS GRID -->
	<?php
	$query2 = new WP_Query(array( 'category_name' => get_the_category(get_the_ID())[0]->slug, 'posts_per_page' => 6 , 'post__not_in' => array(get_the_ID())));
	if ($query2->have_posts()) {
		?>
		<div class="blog-posts">
			<div class="container">
				<h2>Похожие работы</h2><br>
				<div class="row">
					<?php
					while( $query2->have_posts() ) {
						$query2->the_post();
						get_template_part( 'goods', get_post_format() );
					}
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<!-- ITEMS GRID -->

</div>


<?php } ?>