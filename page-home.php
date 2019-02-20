<?php
/*
  Template Name: Main Page
 */
get_header(); 
?>
<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
		<article><!--Dynamic Content-->
			<section class="intro-section1 row">
				<div class="col-sm-3 intro-photo fadeInRight animated">
					<img class="img-fluid" alt="Our Office" src="<?php echo get_template_directory_uri(); ?>/img/office1.jpg" alt="">
				</div>

				<div class="col-sm-6 intro-about animated fadeIn sl0">
					<h2><?php the_title();?></h2>
					<hr>
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
					<br><br>
				</div>

				<div class="col-sm-3 intro-about animated fadeIn sl0 news">

						<?php if ( is_active_sidebar( 'news_events' ) ) : ?>
						    <?php dynamic_sidebar( 'news_events' ); ?>
						<?php endif; ?>

					<br><br>
				</div>
			</section>

			<section class="clear intro-section2 row"><!--Industry Sectors-->
				<div class="intro-sectors pansub col-sm-6">
					<h2 class="animated fadeIn">Industry Sectors</h2>
						<ul class="list-unstyled">
						  <li class="media animated fadeIn sl1">
						    <img class="align-self-center mr-3 img-responsive" src="<?php echo get_template_directory_uri();?>/img/aviation.jpg" alt="General Aviation">
						    <div class="media-body">
						      <h5>General Aviation and the Supply and <br> Marketing of Aviation Ground Support Equipment.</h5>
						    </div>
						  </li>
						  <li class="media my-4 animated fadeIn sl2">
						    <img class="align-self-center mr-3 img-responsive" src="<?php echo get_template_directory_uri();?>/img/business.jpg" alt="Property Management">
						    <div class="media-body">
						      <h5><!--Wealth Advisory and Investment Management. <br>--> Property Management and Real estate Marketing</h5>
						    </div>
						  </li>
						  <li class="media animated fadeIn sl3">
						    <img class="align-self-center mr-3 img-responsive" src="<?php echo get_template_directory_uri();?>/img/firefigthing.jpg" alt="Defense and Military products">
						    <div class="media-body">
						      <h5>Training in Defense and Military products.</h5>
						    </div>
						   </li>
						</ul>

						 <div class="btn-sml s3">
								<a href="http://panoply-consultancy.com/industry-sectors/">View all Sectors</a>
						</div>
				</div><!--End Industry Sectors-->
				
				<!--Our Vision-->
				<div class="intro-vision pansub center fadeInUp col-sm-6">
					<h2>Our Vision</h2>
					<p>“ Is to be the regional standard in the provision of business services, offering our clients, quality and value across the spectrum of our capabilities and to exceed the expectations of our valued customers.”</p>

					<div class="row">
						<div class="col-sm-6">
							<figure class="right">
								<a href="http://www.traceinternational.org/" target="_blank">
									<img title="TRACE International, Inc." src="<?php echo get_template_directory_uri();?>/img/tracelogo.png" class="img-responsive mr-3">
								</a>
								<figcaption>TRACE Certification ID: TC2174-6826</figcaption>
							</figure>
						</div>
						<div class="col-sm-6">
							<figure class="left">
								<a href="https://www.fac.org.uk/" target="_blank">
									<img title="Farnborough Aerospace Consortium (FAC)" src="<?php echo get_template_directory_uri();?>/img/faclogo.jpg" alt="FAC" class="img-responsive mr-3">
								</a>
								<figcaption>&nbsp;</figcaption>
							</figure>
						</div>

					<div>
						
					</div>
				</div>
				</div>

				
			</section>

<?php get_footer(); ?>
