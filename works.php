<?php 
$image_m = wp_get_attachment_image_src(get_field('photo_works'), 'thumbnail')[0];
$category = get_the_category(); 
$cat_name = $category[0]->name;
?>
<div class="col-md-4 col-sm-6 gitem <?php echo get_the_category()[0]->slug; ?>">
	<div class="item">
		<div class="item-header clearfix">
			<h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
		</div>
		<figure>
			<img src="<?php echo $image_m; ?>" alt="" class="img-responsive">
			<!--<span class="label sale">Sell</span>-->
			<div class="overlay">
				<a href="<?php echo get_the_permalink(); ?>" class="btn btn-detail">Подробно</a>
			</div>
		</figure>
		<div class="item-detail">
			<div class="left">
				<span class="place"><i class="fa fa-info-circle" aria-hidden="true"></i><?php  echo $cat_name; ?></span>
			</div>
			<div class="right">
				<span class="area"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo num2word(get_field('days'), array('день', 'дня', 'дней')) ?></span>
			</div>
		</div>
	</div>
</div>