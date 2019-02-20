<?php

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
<?php get_footer();
