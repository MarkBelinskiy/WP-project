<?php get_header(); ?>

<?php if(is_home()) { ?>
<!-- SLIDER -->
<div class="flexslider" id="slider">
	<div class="container sdots">
		<div class="row" style="position:relative">
			<div class="col-sm-12 fordots">
			</div>
		</div>
	</div>
	<ul class="slides">
		<?php 
		$query = new WP_Query(array( 'category_name' => 'slider', 'post_limits' => 5 ));
		if(have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				get_template_part( 'slider' );
			}
			wp_reset_postdata();
		}
		?>
	</ul>
</div>
<!-- SLIDER -->


<!-- ITEMS GRID -->
<div class="container">
	<div class="filter">
		<h2>Последние работы</h2>
		<a class="fil-btn" href="<?php echo get_category_link(5); ?>"><button type="button" class="btn btn-danger">Все работы</button></a>

		<div class="row">
			<?php 
			$query = new WP_Query(array( 'category_name' => 'goods', 'post_limits' => 6 ));
			if(have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					get_template_part( 'goods' );
				}
				wp_reset_postdata();
			}
			?>
		</div>
	</div>
</div>
<!-- ITEMS GRID -->


<!-- FACTS -->
<div class="facts_wrap animated">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="clearfix row">
					<?php 
					$query = new WP_Query(array( 'category_name' => 'stat', 'post_limits' => 4 ));
					if(have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							get_template_part( 'stat' );
						}
						wp_reset_postdata();
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- FACTS -->

<!-- BANNER -->
<div class="full-width-white design">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5">
				<article>
					<h2><?php echo get_the_title(213); ?></h2>
					<p><?php echo get_field('short-story', 213); ?></p>
					<!-- <button type="button" class="btn btn-danger">Читать далее</button> -->
				</article>
			</div>
			<div class="col-md-7 col-sm-7">
				<figure>

					<img src="<?php echo wp_get_attachment_image_src(get_field('photo_moto', 213), 'photo_moto')[0]; ?>" alt="Image">
				</figure>
			</div>
		</div>
	</div>
</div>
<!-- BANNER -->

<!-- BLOG -->
<div class="full-width home-posts blog-posts">
	<div class="container">
		<h2>Новинки в блоге</h2><br>
		<div class="row">
			<?php 
		$query = new WP_Query(array( 'category_name' => 'blog', 'post_limits' => 2 ));
		if(have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				get_template_part( 'blog' );
			}
			wp_reset_postdata();
		}
		?>
		</div>
	</div>
</div>
<!-- BLOG -->

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

<!-- REVIEWS
<div class="full-width rewiews">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar1.png" alt="Avatar" class="img-responsive">
				<h6>Иванка Иванова</h6>
				<p>Совсем необязательно латинский алфавит, могут возникнуть. Латыни и демонстрации внешнего вида контента просмотра. То и на название, не имеет никакого отношения...</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar2.png" alt="Avatar" class="img-responsive">
				<h6>Инна павловна</h6>
				<p>Совсем необязательно латинский алфавит, могут возникнуть. Латыни и демонстрации внешнего вида контента просмотра. То и на название, не имеет никакого отношения...</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/avatar3.png" alt="Avatar" class="img-responsive">
				<h6>Игнат Лозов</h6>
				<p>Совсем необязательно латинский алфавит, могут возникнуть. Латыни и демонстрации внешнего вида контента просмотра. То и на название, не имеет никакого отношения...</p>
			</div>
		</div>
	</div>
</div> -->
<?php } ?>


<?php if (is_category('blog') || is_category('goods') || is_category('works')) { ?>
	<div class="full-width page-wrap properties-page">

		<!-- BREADCRUMBS-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumbs">
						<div class="breadcrumbs">
							<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('<i class="fa fa-angle-right" aria-hidden="true"></i>'); ?>
						</div>
					</div>
					<h2 class="page-title"><?php echo get_queried_object()->name;  ?></h2>
				</div>
			</div>
		</div>
		<!-- BREADCRUMBS -->
<?php } ?>

<?php if (is_category('blog')) { ?>
		<!-- BLOG POSTS -->
		<div class="container blog-posts">
			<div class="row">

				<?php
				if ( have_posts() ){
					while ( have_posts() ) { 
						the_post();
						get_template_part( 'blog', get_post_format() );

					}
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
						) );
				} else {
					get_template_part( 'template-parts/content', 'none' );
				}
			?>
		</div>
	</div>
	</div>
<?php } ?>

<?php if (is_category('works')) { ?>
		<!-- BLOG POSTS -->
		<div class="container blog-posts">
			<div class="row">
				<div class="col-sm-12">
					<div class="row grid">
					<?php
					if ( have_posts() ){
						while ( have_posts() ) { 
							the_post();
							get_template_part( 'works', get_post_format() );

						}
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (is_category('goods')) { ?>
		<!-- BLOG POSTS -->
		<div class="container blog-posts">
			<div class="row">
				<div class="col-sm-12">
					<div class="property-filter">
						<?php
						$categories = get_categories( array(
							'orderby' => 'name',
							'parent'  => 5
						));
						echo '<a href="#" filter="*" class="fitem active">Все</a>';
						if( $categories ){
							foreach( $categories as $cat ){
								echo '<a href="#" filter=".'.$cat->slug.'" class="fitem">'.$cat->name.'</a>';
							}
						}
						?>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row grid">
					<?php
					if ( have_posts() ){
						while ( have_posts() ) { 
							the_post();
							get_template_part( 'goods', get_post_format() );

						}
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'twentysixteen' ),
							'next_text'          => __( 'Next page', 'twentysixteen' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
							) );
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>



<!-- BLOG POSTS -->

<!-- 	PAGINATION
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="pagination">
				<a href="#" class="prev"><i class="fa fa-angle-left"></i>Previous</a>
				<a href="#">1</a>
				<span>2</span>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#" class="next">Next<i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div> -->
	<!-- PAGINATION -->



	<?php if ((in_category('blog') && is_single()) || (!in_category('blog') && is_single()) || is_page()) {  
		if ( have_posts() ){
			while ( have_posts() ) { 
				the_post();
				if (is_single()) {
					get_template_part( 'bread');
					get_template_part( 'post');
				}
				if (is_page(239)) {
					get_template_part( 'bread');
					get_template_part( 'about_us' );

				}
				if (is_page(254)) {
					get_template_part( 'bread');
					get_template_part( 'contacts' );

				}
			}
		}
	} 
	?>

<!-- REVIEWS -->
<?php get_footer(); ?>