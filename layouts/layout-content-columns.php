<?php
	
	$side = get_sub_field('column_side');
	$class = $side === "right" ? "content-column-alt" : "";
?>
<div class="content-column <?php echo $class; ?>">								
	<?php
		include(locate_template('layouts/layout-content-column.php'));					
	?>
</div>
