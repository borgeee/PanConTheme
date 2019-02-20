<?php
/*
  Template Name: Industry Sectors Page
 */
get_header(); ?>

<article>
	<section class="section1">

		<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>

					<h3 class="h3-title"><?php the_title(); ?></h3>
					
					<section class="post">
						<?php the_content(); ?>
					</section>
			<?php endwhile;

			else :
				echo '<p>Content Not Found</p>';
			endif;
		?>
	</section>
	
	<!--industry sector showcase-->	
			<section class="section2">
				<div class="industrysector-box row">
	
					<div class="col-md-4"> <!-- aviation -->
				   		<div class="ih-item square effect3 bottom_to_top">
					    	<a>
					        	<div class="img"><img src="<?php echo get_theme_file_uri('img/aviationsupplies-services.jpg');?>" alt="Aviation Supplies &amp; Services"></div>
						        <div class="info">
						          <h3>Aviation Supplies &amp; Services</h3>
						           <p>&nbsp;</p>
						        </div>
						    </a>
						</div>
				    </div><!-- /aviation -->

				   <div class="col-md-4">
				    
				    <div class="ih-item square effect3 bottom_to_top">
				    	<a>
				        	<div class="img"><img src="<?php echo get_theme_file_uri('img/groundsupport-suppliesservices.jpg');?>" alt="Ground support &amp; Supplies & Services"></div>
					        <div class="info">
					          <h3>Ground Support Supplies &amp; Services</h3>
					           <p>&nbsp;</p>
					        </div>
					    </a>
					</div>
				    <!-- end normal -->
				   </div>

				    <div class="col-md-4">
				    <!-- normal -->
				    <div class="ih-item square effect3 bottom_to_top">
				    	<a>
				        	<div class="img"><img src="<?php echo get_theme_file_uri('img/civilprotection-safety.jpg');?>" alt="Civil Protection & Safety"></div>
					        <div class="info">
					          <h3>Civil Protection &amp; Safety</h3>
					           <p>&nbsp;</p>
					        </div>
					    </a>
					</div>
				    <!-- end normal -->
				   </div>

				    <div class="col-md-4">
				    <!-- normal -->
				    <div class="ih-item square effect3 bottom_to_top">
				    	<a>
				        	<div class="img"><img src="<?php echo get_theme_file_uri('img/securitysystem-itsolution.jpg');?>" alt="Security &amp; IT Solution"></div>
					        <div class="info">
					          <h3>Security System &amp; IT Solutions</h3>
					           <p>&nbsp;</p>
					        </div>
					    </a>
					</div>
				    <!-- end normal -->
				   </div>

				   <div class="col-md-4">
				    <!-- normal -->
				    <div class="ih-item square effect3 bottom_to_top">
				    	<a>
				        	<div class="img"><img src="<?php echo get_theme_file_uri('img/agro.jpg');?>" alt="Environmental &amp; Agricultural"></div>
					        <div class="info">
					          <h3>Environmental &amp; Agricultural</h3>
					           <p>&nbsp;</p>
					        </div>
					    </a>
					</div>
				    <!-- end normal -->
				   </div>

				    <div class="col-md-4">
				    <!-- normal -->
				    <div class="ih-item square effect3 bottom_to_top">
				    	<a>
				        	<div class="img"><img src="<?php echo get_theme_file_uri('img/medical.jpg');?>" alt="Medical Supplies"></div>
					        <div class="info">
					          <h3>Medical Supplies</h3>
					          <p>&nbsp;</p>
					        </div>
					    </a>
					</div>
				    <!-- end normal -->
				   </div>
				</div>
			</section><!--/industry sector showcase-->

<?php get_footer();
