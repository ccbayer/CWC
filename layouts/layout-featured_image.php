<?php
	$img = get_sub_field('featured_image');
?>
<h1><?php the_sub_field('headline');?></h1>
	<?php if($img): ?>
	<figure class="featured-image">
		<img src="<?php echo $img['url']; ?>" class="featured-image-featured"/>
		<img src="<?php echo get_template_directory_uri(); ?>/images/made-possible.png" class="featured-image-rotator" data-bottom="transform: rotate(0deg)" data-top="transform: rotate(360deg)"/>				
	</figure>
	<?php endif; ?>
	<article class="main-content">
		<aside><?php the_sub_field('subheadline'); ?></aside>
		<h2><?php the_sub_field('subheading'); ?></h2>
		<p><?php the_sub_field('body_copy'); ?></p>
	</article>