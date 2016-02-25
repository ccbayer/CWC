<?php get_header(); ?>



<section class="page-section page-section-first b-lazy bg-fixed" data-src="<?php echo get_template_directory_uri(); ?>/images/hero-1.jpg" id="section-1">
	    <div class="container half-height">
			<div class="grid-container centered full-height">
				<img src="<?php echo get_template_directory_uri(); ?>/images/cwc-logo-round.png" alt="Commonwealth Cure" class="logo vertical-center" id="logo-round" data-center="opacity: 1; transform: scale(1)" data-top="opacity: 0; transform: scale(0)"/>
			</div>
			<div class="grid-container centered full-height" id="intro-text" data-center-top="opacity: 1; transform: scale(1)" data-top="opacity: 0; transform: scale(0)">				
			    <h1>Authentic & Refined.</h1>
		    </div>
	    </div>
    </section>
    <section class="page-section page-section-second b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/images/hero-2.jpg" id="section-2">
    <div class="container full-height padding-1vh">
		<div class="triangle-logo -white"></div>
	    <div class="container centered full-height"  data-center-top="opacity: 1; transform: scale(1)" data-top="opacity: 0; transform: scale(0)" >
			<h1>Hand Crafted & Packed Artisanal Meats.</h1>
	    </div>
    </div>
    <main>
		<header class="fade-in">
		    <nav class="container">
			    <ul class="float-right">
				    <li><a href="#">Product</a></li>
				    <li><a href="#">About</a></li>
				    <li><a href="#">Purchase</a></li>
				    <li><a href="#">Contact</a></li>
			    </ul>
		    </nav>
	    </header>
	    <div class="container-body" id="content-container">
			<div class="container">
				<div class="social-media fade-in">
				    <ul>
					    <li><a href="#">Facebook</a></li>
					    <li><a href="#">Instagram</a></li>
				    </ul>
			    </div>
				<div class="grid-container relative">
					<section class="sub-section relative">				
						<h1>The Goods</h1>
						<?php include(locate_template('layouts/layout-productcolumn.php')); ?>
					</section>
					
					<?php
						// check if the flexible content field has rows of data
						if( have_rows('content_block') ):
							$i = 0;
					
							while ( have_rows('content_block') ) : the_row();
								$id = '';
								$layout = get_row_layout();
								if($layout !== 'list_column'):
									if(get_sub_field('show_in_nav')):
										$id = 'id="'. get_sub_field('nav_label').'"';
									endif;
									echo '<section class="sub-section" '.$id.'>';						
									$i ++;
									$next = $i + 1;
										$template_name = 'layouts/layout-' . get_row_layout();
										include(locate_template($template_name . '.php'));				
									echo '</section>';
								else:
									// render columns
									include(locate_template('layouts/layout-content-columns.php'));
								endif;
							endwhile;
							
						endif;
					?>
					<div class="block-wrapper color-blue equalize">
							<div class="block-50 text-center">
								<strong>Address</strong>
								<p>
									<?php the_field('address', 'option'); ?>
								</p>
							</div>
							<div class="block-50 text-center">
								<strong>Phone</strong>
								<p><?php the_field('phone_number', 'option'); ?></p>
							</div>
							<div class="block-50 text-center">
								<strong>Hours</strong>
								<p>
									<?php the_field('hours', 'option'); ?>
								</p>
							</div>
							<div class="block-50 text-center">
								<strong>Social</strong>
								<?php $social = get_field('social_media', 'option');?>
								<p>
									<?php 
										foreach($social as $s): 
									?>
									<a href="<?php echo $s['social_media_url']; ?>" title="Commonwealth Cure on <?php echo $s['social_media_name']; ?>" target="_blank"><?php echo $s['social_media_name']; ?></a><br/>
									<?php endforeach; ?>
								</p>
							</div>

						</div>
						<form>
							<p>Questions? Comments? Feeling chatty? <br/>
								Please send us an email and we’ll get back to you promptly!</p>
							<fieldset class="fields-50">
								<label for="name" class="visually-hidden">Name</label>
								<input type="text" name="name" placeholder="name" value="name"/>
								<label for="last-name" class="visually-hidden">Last Name</label>
								<input type="text" class="float-right" name="last-name" placeholder="Last Name" value="Last Name"/>
							</fieldset>
							<fieldset class="fields-100">
								<label for="email" class="visually-hidden">Email</label>
								<input type="email" name="email" placeholder="email"/>
								<label for="email-confirm" class="visually-hidden">Email Confirm</label>
								<input type="email" name="email-confirm" placeholder="Confirm Email"/>
								<select name="recipient">
									<option>Sales</option>
									<option>Distribution</option>
									<option>Shop</option>
								</select>
								<textarea placeholder="Message">Message</textarea>
								<label for="captcha" class="float-left">4 + 2 = </label>
								<input type="text" class="inline" name="captcha"/>
								<input type="submit" class="inline float-right" value="submit"/> 
							</fieldset>							
						</form>
					</section>
				</div>
			</div>
<?php get_footer(); ?>