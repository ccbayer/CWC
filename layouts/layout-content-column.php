<?php
	$list = get_sub_field('list_content');	
	$numbers = get_sub_field('display_number_next_to_label') ? true : false;
	$n = 1;
?>
<h2 class="list-label"><?php the_sub_field('list_label');?></h2>
<article>
	<div class="blue-bar blue-bar-left" data-top-top="top: 45px;" data-bottom-top="top: 500px;"></div>
	<?php foreach($list as $l): ?> 
	<h3>
		<?php if($numbers): ?>
		<span class="color-gold"><?php echo $n; ?></span>
		<?php 
			$n++;		
		endif;
		echo $l['list_item_name'];
		?>
	</h3>
	<p><?php echo $l['list_item_description']; ?></p>
	<?php endforeach; ?>
</article>

	<?php if(get_sub_field('blockquote')): ?>
		<blockquote><?php the_sub_field('blockquote'); ?></blockquote>
	<?php endif ?>