<?php 
/*
	Template Name:Front Page
*/
$service_1 = ot_get_option('service_1');
$service_1_ = ot_get_option('service_1_');
$service_2 = ot_get_option('service_2');
$service_2_content = ot_get_option('service_2_content');
$service_3 = ot_get_option('service_3');
$service_3_content = ot_get_option('service_3_content');
$service_4 = ot_get_option('service_4');
$service_4_content = ot_get_option('service_4_content');

get_header();?>
<section>
	<div class="section-content">
		<div class="container">
			<div class="section-header onscroll-animate" data-animation="fadeInLeft">
    			<h1>Find Your Dream Home</h1>
                <h4>Looking for a good place to sleep try our search engine, we guarnatee you will find what you need.</h4>
    		</div>
    		<?php if(dynamic_sidebar('sidebar-1'))?>
		</div>
	</div>
</section>
<section id="citation-section" class="section-contrast">
	<div class="bg-image bg-pattern bg-cover parallax-background">
        <div class="section-content onscroll-animate" data-animation="fadeInUp">
        	<?php the_excerpt();?>
        </div>
   	</div>
</section>
<section>
	<div class="section-content">
		<div class="container">
			<div class="section-header onscroll-animate" data-animation="fadeInLeft">
    			<h1>Recent Listings</h1>
                <h4>See our recent listings here, you will find all kinds of homes.</h4>
    		</div>
    		<div class="row">
    			<?php if(dynamic_sidebar('property-sidebar'));?>
    		</div>
		</div>
	</div>
</section>
<div class="margin-30 visible-lg-block visible-md-block"></div>
<section id="mobile-section" class="section-contrast">
	<div class="bg-image bg-pattern bg-cover bg-fixed">
		<div class="section-content no-offset">
			<div class="margin-30"></div>
			<div class="container">
				<div class="row">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', 'page' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
								endwhile; // End of the loop.
							?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="section-content">
		<div class="container">
			<div class="section-header onscroll-animate" data-animation="fadeInLeft">
				<h1>OUR GREAT AGENTS</h1>
				<h4>See our great agents and they will help you find your homes.</h4>
			</div>
			<div class="onscroll-animate">
				<div id="agents-slider">
					<?php echo do_shortcode('[agent_home_shortcode]');?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-dark">
	<div class="section-content">
		<div class="container">
			<div class="section-header onscroll-animate" data-animation="fadeInLeft">
				<h1>SERVICES</h1>
	            <h4>Some of our main services.</h4>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-6 onscroll-animate" data-animation="fadeInUp">
							<div class="icon-box">
								<div class="icon-box-icon">
									<i class="fa fa-signal"></i>
								</div>
								<h3><?php echo $service_1;?></h3>
								<?php echo $service_1_;?>
								<div class="read-more-link-container">
                                	<a href="#" class="read-more-link">Read more</a>
                                </div>
							</div>
						</div>
						<div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
							<div class="icon-box">
								<div class="icon-box-icon">
									<i class="fa fa-home"></i>
								</div>
								<h3><?php echo $service_2;?></h3>
								<?php echo $service_2_content;?>
								<div class="read-more-link-container">
                                	<a href="#" class="read-more-link">Read more</a>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
							<div class="icon-box">
								<div class="icon-box-icon">
									<i class="fa fa-building"></i>
								</div>
								<h3><?php echo $service_3;?></h3>
								<?php echo $service_3_content;?>
								<div class="read-more-link-container">
                                	<a href="#" class="read-more-link">Read more</a>
                                </div>
							</div>
						</div>
						<div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
							<div class="icon-box">
								<div class="icon-box-icon">
									<i class="fa fa-th"></i>
								</div>
								<h3><?php echo $service_4;?></h3>
								<?php echo $service_4_content?>
								<div class="read-more-link-container">
                                	<a href="#" class="read-more-link">Read more</a>
                                </div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>