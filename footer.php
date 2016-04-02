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

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hometastic' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'hometastic' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hometastic' ), 'hometastic', '<a href="https://www.github.com/rajadileepkumar" rel="designer">Raja Dileep Kumar</a>' ); ?>
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
    });
</script>
</body>
</html>
