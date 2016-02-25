<?php

$column_list_left = array();
$column_list_right = array();
$cols = get_field('product_column');
if($cols):

// loop over all content to divide into left / right columns
foreach($cols as $c):
	if($c['column_side'] === "left"):
		array_push($column_list_left, $c);
	else:
		array_push($column_list_right, $c);
	endif;
	
endforeach;

// loop over column arrays
?>
<div class="content-column">								
	<?php
		foreach($column_list_left as $col):
			$template_name = 'layouts/layout-cols-'.$col['acf_fc_layout'];
			include(locate_template($template_name . '.php'));					
		endforeach;
	?>
</div>

<div class="content-column content-column-alt">								
	<?php
		foreach($column_list_right as $col):
			$template_name = 'layouts/layout-cols-'.$col['acf_fc_layout'];
			include(locate_template($template_name . '.php'));					
		endforeach;
	?>
</div>


<?php
endif;
	
?>