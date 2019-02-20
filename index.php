<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php get_header(); ?>

<article>
	<section class="section1">
		<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1><?php get_bloginfo('description'); ?></h1>
						</header>
					<?php endif; ?>

				<div class="pansub">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>

				<section class="post">
					<?php the_content(); ?>
				</section>
			<?php endwhile;

			else :
				echo '<p>Content Not Found</p>';
			endif;
		?>
	</section>
<?php get_footer(); ?>
</article>
