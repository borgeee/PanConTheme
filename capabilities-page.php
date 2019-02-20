<?php
/*
  Template Name: Capabilities Page
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
	
	<section class="section2 row">
		<div class="strategy-text col-sm-6">
			<h2>Company Strategy</h2>
			<p>Whilst headquartered in Dubai much of Panoply Consulting’s business remains in the Kingdom of Saudi Arabia, our primary market. Riyadh continues to be the mainstay of our expertise for our business and will continue for the foreseeable future to be the focus of our efforts. This traditional market will be provided with resources, domiciled employees and whatever is necessary to continue to service and develop our existing client’s KSA opportunities.</p>

			<p>Panoply Consultancy recognises the need to maintain operational offices in Dubai, Riyadh and representation in the U.K. for European and U.S. business. We recognize the importance of continued dialogue with our clients, we make every effort to understand their objectives, provide reporting and thus offer a worldwide strategic reach.</p>

			<p>The establishment of a dynamic corporate structure in the UAE reflects the future development potential in the GCC region for our existing clients and customers, where we see a huge potential for our own business and the business of our clients.</p>

			<p>We are committed to on-going engagement with our clients and understanding their needs, offering realistic, achievable and ethical solutions, with the right partners to achieve our joint objectives.</p>
		</div>

		<div class="strategy-photo col-sm-6">
			<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/office2.jpg" alt="Panoply Office"/>
		</div>
	</section>
<?php get_footer();
