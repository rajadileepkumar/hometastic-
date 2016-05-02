<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hometastic
 */
$social_links = ot_get_option('social_links',array());
$copyright = ot_get_option('copyright');
$date = date('Y');

?>

	</div><!-- #content -->

	<footer id="footer-section" class="site-footer" role="contentinfo">
 		<a href="#header-section" class="scroll-to" id="to-top"></a>
 			<div class="container footer-info">
 				<div class="row">
 					<div class="col-md-6">
 						<div class="row">
 							<div class="col-sm-6 footer-column onscroll-animate">
 								<h4>
 									<img src="http://localhost/home/wp-content/uploads/2016/04/logo.png" alt="<?php echo bloginfo('name');?>">
 								</h4>
								<?php 
									if(dynamic_sidebar('footer-sidebar1')) 
								?>
 							</div>
 							<div class="col-sm-6 footer-column onscroll-animate" data-delay="400">
								<?php if(dynamic_sidebar('footer-sidebar2'));?>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-6">
 						<div class="col-sm-6 footer-column font-normal onscroll-animate" data-delay="600">
							<?php if(dynamic_sidebar('footer-sidebar3'));?>
 						</div>
 						<div class="col-sm-6 footer-column onscroll-animate" data-delay="800">
 							<?php if(dynamic_sidebar('footer-sidebar3'));?>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="main-menu-alt">
 				<div class="container">
 					<div class="menu-button"><i class="fa fa-reorder"></i></div>
 					<nav class="menu-container menu-container-slide" id="bottom-menu">
 						<div class="underscore-container">
	 						<?php 
								$defaults = array(
									'theme_location'  => 'primary',
									'menu'            => '',
									'container'       => 'ul',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
								);
								wp_nav_menu($defaults);
							?>
							<div class="underscore"><div class="underscore-inner"></div></div>
						</div>
 					</nav>
 				</div>
 			</div>                                                                                                                                     
 			<div class="site-info">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-6 onscroll-animate" data-animation="fadeInLeft">
	 						<p>
	 							<?php echo $date;?> &copy; <?php echo $copyright;?> <i class="red fa fa-heart-empty"></i> by
	 							<a title="<?php echo bloginfo('name');?>" data-toggle="tooltip" href="https://www.github.com/rajadileepkumar"><em>Raja Dileep Kumar</em></a>
	 						</p>
						</div>
						<div class="col-xs-6 text-right onscroll-animate" data-animation="fadeInRight">
							<div class="socials-wrapper">
								<?php 
									if(!empty($social_links)){
										foreach($social_links as $social){
											echo '<div id="' . $social['title'] .'" class="social-round-container">';
												echo '<a  href="' . $social['href'] . '"/>';
													echo '<i class="fa fa-'. $social['name'] . '"></i>';
												echo '</a>';
											echo '</div>';
										}
									}
								?>
							</div>
						</div>	
 					</div>
 				</div>
			</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(e) {
		var main_stylesheet = $('#main-stylesheet');
		var theme_customizer = $('#theme-customizer');
		var theme_stylesheets = $('.theme-stylesheet');
		var theme_patterns = $('.theme-pattern');
		$('#theme-customizer-trigger').on('click', function(e) {
			theme_customizer.toggleClass('active');
		});

		theme_stylesheets.on('click', function(e) {
			theme_stylesheets.removeClass('active');
			main_stylesheet.attr('href', $(this).data('stylesheet'));
			$(this).addClass('active');
		});
		theme_patterns.on('click', function(e) {
			theme_patterns.removeClass('active');
			$('body').css('background', $(this).data('background'));
			$(this).addClass('active');
		});
		$('fadeIn > ul').addClass('list-links-simple');
    });
</script>
</body>
</html>
