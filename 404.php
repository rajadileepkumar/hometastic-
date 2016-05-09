<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hometastic
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<div class="margin-50 visible-lg-block visible-md-block"></div>
			<section class="error-404 not-found">
				<div class="error_pagenotfound">
					<strong><?php _e('404','home');?></strong>
					<br />
					<b><?php _e('Oops... Page Not Found!','home');?></b>

					<em><?php _e('Sorry the Page Could not be Found here.','home');?></em>

					<p><?php _e('Try using the button below to go to main page of the site','home');?></p>

					<div class="clearfix margin_top3"></div>

					<a href="javascript:window.history.back()" class="but_goback"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; <?php _e('Go Back','home');?></a>
				</div><!-- end error page notfound -->
			</section><!-- .error-404 -->
			<div class="margin-50 visible-lg-block visible-md-block"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
