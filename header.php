<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hometastic
 */
$sample_text = ot_get_option('sample_text');
$mobile = ot_get_option('mobile')

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.png" type="image/png">

<?php wp_head(); ?>
<style>
	#theme-customizer {
		font-size: 15px;
		position: fixed;
		background-color: #FFF;
		width: 290px;
		left: -290px;
		top: 50px;
		color: #000;
		-webkit-transition: left 0.7s ease-out;
		-moz-transition: left 0.7s ease-out;
		-o-transition: left 0.7s ease-out;
		transition: left 0.7s ease-out;
		font-style: italic;
		text-align: center;
		padding: 0 5px 5px 5px;
		z-index: 99999;
		border: 1px #e1e1e1 solid;
		border-left: none;
	}
	
	#theme-customizer.active {
		left: 0;
	}
	
	#theme-customizer .customizer-heading {
		font-size: 20px;
		margin: 25px 0;
	}
	
	#theme-customizer .customizer-info {
		color: #969696;
		font-size: 13px;
	}
	
	#theme-customizer hr {
		margin: 20px auto;
		height: 1px;
		width: 80%;
		background-color: #e8e8e8;
	}
	
	#theme-customizer-trigger {
		position: absolute;
		background-color: #FFF;
		width: 50px;
		height: 50px;
		right: -50px;
		top: -1px;
		font-size: 27px;
		line-height: 50px;
		text-align: center;
		cursor: pointer;
		border: 1px #e1e1e1 solid;
		border-left: none;
	}
	
	.theme-setting {
		width: 54px;
		height: 54px;
		display: inline-block;
		margin: 0px 2px;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		border-radius: 50%;
		border: 2px #FFF solid;
		-webkit-transition: border 0.2s ease-out;
		-moz-transition: border 0.2s ease-out;
		-o-transition: border 0.2s ease-out;
		transition: border 0.2s ease-out;
		cursor: pointer;
	}
	
	.theme-setting.theme-pattern {
		border-color: #E1E1E1;
	}
	
	.theme-setting:hover {
		border-color: #B1B1B1;
	}
	
	.theme-setting.active {
		border-color: #B1B1B1;
	}
	</style>
</head>

<body <?php body_class(); ?>>
	<div id="theme-customizer">
    	<div id="theme-customizer-trigger">
        	<i class="fa fa-gears"></i>
        </div>
        <p class="customizer-heading">Live Customizer</p>
        <hr>
        <p>Color Changer</p>
        <div class="theme-setting theme-stylesheet active" style="background-color:#51bbe5" data-stylesheet="<?php echo get_template_directory_uri()?>/css/styles/main.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#336699" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/dark-blue.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#8cc739" data-stylesheet="<?php echo get_template_directory_uri()?>/css//skins/light-green.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#ba6222" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/brown.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#cc0000" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/red.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#ff717e" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/pink.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#7aba7a" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/dark-green.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#84596b" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/purple.css"></div>
        <div class="theme-setting theme-stylesheet" style="background-color:#ff9900" data-stylesheet="<?php echo get_template_directory_uri()?>/css/skins/orange.css"></div>
    	<hr>
        <p>Pattern/Background Changer</p>
        <div class="theme-setting theme-pattern active" style="background:#FFF" data-background="#FFF"></div>
        <div class="theme-setting theme-pattern" style="background:url('<?php echo get_template_directory_uri()?>/images/patterns/1.jpg')" data-background="url('<?php echo get_template_directory_uri()?>/images/patterns/1.jpg')"></div>
        <div class="theme-setting theme-pattern" style="background:url('<?php echo get_template_directory_uri()?>/images/patterns/2.jpg')" data-background="url('<?php echo get_template_directory_uri()?>/images/patterns/2.jpg')"></div>
        <div class="theme-setting theme-pattern" style="background:url('<?php echo get_template_directory_uri()?>/images/patterns/3.jpg')" data-background="url('<?php echo get_template_directory_uri()?>/images/patterns/3.jpg')"></div>
        <div class="theme-setting theme-pattern" style="background:url('<?php echo get_template_directory_uri()?>/images/patterns/4.jpg')" data-background="url('<?php echo get_template_directory_uri()?>/images/patterns/4.jpg')"></div>
        <hr>
        <p class="customizer-info">New skins can be easily made by changing few variables in less stylesheet so it can fit for example your logo colors.</p>
    </div>
    <div id="page-loader">
    	<div class="centered-columns">
        	<div class="centered-column">
            	<img alt="loader" src="<?Php echo get_template_directory_uri()?>/images/loader.gif">
            </div>
        </div>
    </div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'hometastic' ); ?></a>

	<header id="header-section" class="site-header" role="banner">
		<div class="site-top">
			<div class="container clearfix">
				<div class="pull-left">
					<span class="site-top-item">
                        <a href="#"><i class="fa fa-envelope"></i> <?php if($sample_text){echo $sample_text;}else{echo 'info@hometastic.com';}?></a>
                    </span>
                    <span class="site-top-item">
                        <i class="fa fa-phone"></i> <?php if($mobile){echo $mobile;}else{echo '0 800 55 55 123';}?>
                    </span>
				</div>
				<div class="pull-right">
                	<?php 
						$defaults = array(
							'theme_location'  => 'top',
							'menu'            => '',
							'container'       => '',
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
							//'walker'          => new wp_bootstrap_navwalker(),
						);
						
						wp_nav_menu( $defaults );
					?>
                </div>
			</div>
		</div><!--site top-->
		<div class="main-menu">
			<div class="container">
				<a href="<?php echo site_url();?>">
					<img src="<?php echo get_template_directory_uri()?>/images/logo.png" class="pull-left main-logo" alt="<?php echo bloginfo('name');?>">
				</a>
				<div class="menu-button"><i class="fa fa-reorder"></i></div>
				<nav class="menu-container underscore-container menu-container-fade">
					<?php 
						if( is_user_logged_in() ) {
							$menu = 'logged-in';
						} 
						else {
							$menu = 'Menu 1';
						}

						$defaults = array(
							'theme_location'  => 'primary',
							'menu'            => $menu,
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
							//'walker'          => new wp_bootstrap_navwalker(),
						);
						wp_nav_menu( $defaults );
					?>
					<div class="underscore"><div class="underscore-inner"></div></div>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
