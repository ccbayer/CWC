<?php
	$img = get_sub_field('image');
	if($img):
?>
<img src="<?php echo $img['url']; ?>" class="sub-section-heading-image"/>
<h1 class="sub-section-pull-up"><?php the_sub_field('headline'); ?></h1>
<article class="main-content">
	<p><?php the_sub_field('body_copy');?></p>
</article>
<?php
	endif;	
?>