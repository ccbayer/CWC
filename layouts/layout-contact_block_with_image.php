<h1><?php the_sub_field('headline'); ?></h1>
	<article class="main-content">
	<aside><?php the_sub_field('subheadline'); ?></aside>
	<h2><?php the_sub_field('subheading'); ?></h2>
	<p><?php the_sub_field('body_copy'); ?></p>
</article>
<?php
	$img = get_sub_field('image');
	if($img):
?>
<div class="featured-image">
	<img src="<?php echo $img['url'] ?>" class="featured-image-featured"/>
</div>
<?php
	endif;	
?>