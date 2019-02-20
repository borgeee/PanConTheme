<?php

get_header(); ?>

<article>
	<section class="section1">

		<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>

					<h4 class="h4-post-title"><?php the_title(); ?></h4>
					
					<section class="post">
						<?php the_content(); ?>
					</section>
			<?php endwhile;

			else :
				echo '<p>Content Not Found</p>';
			endif;
		?>

</section>
<?php get_footer();
