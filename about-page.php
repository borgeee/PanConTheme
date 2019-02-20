<?php
/*
  Template Name: About Page
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

		<div class="showcase">
			<div class="box">
				<h4>Our Vision</h4>
					<hr class="box-hr">
				<p>Is to be the regional standard in the provision of business services, offering our clients, quality and value across the spectrum of our capabilities and to exceed the expectations of our valued customers.</p>
			</div>

			<div class="box">
				<h4>Mission Statement</h4>
					<hr class="box-hr">
				<p>Success through the pursuit of innovation and knowledge.</p>
			</div>

			<div class="box">
				<h4>Our Core Values</h4>
					<hr class="box-hr">
				<ul>
					<li>We believe in treating both our customers and employees with respect and faith.</li>
					<li>We grow through creativity, intelligent market assessment and understanding our customer’s needs.</li>
					<li>We believe that honesty, integrity and ethics must be at the core of an effective business operation.</li>
				</ul>
			</div>
		</div>

	</section>
	
	

	<section class="section2">



				<h3 class="h3-title">Our Goals</h3>
				<div class="goal">
					<p>The expansion of our proven track record in Consultancy Services, through a process of “continuous improvement “, seeking new business opportunities both in our existing markets and throughout the GCC, thus developing a strong and successful client base of market leading companies.</p>

					<p>Increase the assets and investments of the company to support the development of these services and capabilities.</p>

					<p>Develop and grow our emerging capabilities in new industry sectors establishing an excellent reputation as the “Service Provider” and “Teaming Partner” of choice.</p>

					<p>We will maintain and continue to develop ethical policies, which flow down to all employees and company representatives benchmarking the best of European practices.</p>
				</div>
			</section>
<?php get_footer();
