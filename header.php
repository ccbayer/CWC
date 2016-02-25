<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	  <!-- OPEN GRAPH meta data -->
	  <meta property="og:title" content="<?php
	  	  $title =  get_field('page_title');
	  if($title) {
		  echo $title;
	  } else {
	      if( ! is_home() ):
	        wp_title( '|', true, 'right' );
	      endif;
	      bloginfo( 'name' );		  
	  }
	    ?>">
	<meta property="og:site_name" content="Marin County Bicycle Coalition"/>
	<meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"/>
	<meta property="og:description" content="<?php the_field('meta_description'); ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/mcbc-logo.gif"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php the_field('meta_keywords'); ?>"/>
	<meta name="description" content="<?php the_field('meta_description'); ?>"/>
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6255894/6770952/css/fonts.css" />
    <script src="<?php echo get_stylesheet_directory_uri();?>/_build/bower_components/modernizr/modernizr.js"></script>
	<title>
    <?php
	  $title =  get_field('page_title');
	  if($title) {
		  echo $title;
	  } else {
	      if( ! is_home() ):
	        wp_title( '|', true, 'right' );
	      endif;
	      bloginfo( 'name' );		  
	  }
    ?>
  </title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
</head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->