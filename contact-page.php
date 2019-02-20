<?php
/*
  Template Name: Contact Page
 */
get_header(); 

?>

<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<article>
		<section class="section1">

			<h3 class="h3-title"><?php the_title(); ?></h3>

			<div class="bg-grey">
				<div class="row">
					<div class="col-sm-6"><!--content-->	
						<?php
							if (have_posts()) :
								while (have_posts()) : the_post(); 

								// Include the page content template.
								get_template_part( 'content', 'page' );

						?>
								<?php the_content(); ?>

						<?php endwhile;
							else :
								echo '<p>Content Not Found</p>';
							endif;
						?>
					</div><!--/content-->	

					<div class="col-sm-6"><!--contact widget-->
						<?php if ( is_active_sidebar( 'contact-panoply' ) ) : ?>
						    <?php dynamic_sidebar( 'contact-panoply' ); ?>
						<?php endif; ?>
					</div><!--/contact widget-->

				</div><!--/row-->
			</div><!--/bg grey-->

		</section>

<?php get_footer(); ?>
