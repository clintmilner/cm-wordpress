<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package B2W - CM
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,300|Lato:300,400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<header class="site-header" role="banner">
		<!-- NAV BAR -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" alt="B2W Logo"/>
						</a>
					</div>

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'    =>  'primary',
                                'container'         =>  'nav',
                                'container_class'   =>  'navbar-collapse collapse',
                                'menu_class'        =>  'nav navbar-nav navbar-right'
                            )
                        )
                    ?>
				</div>
			</div>
		</div>
	</header>
