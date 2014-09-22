<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package brokers-sdc
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body id="page" <?php body_class(); ?>>
	<a class="skip-link accessibility" href="#content"><?php _e( 'Skip to content', 'brokers-sdc' ); ?></a>

	<header id="masthead" class="page__head" role="banner">
		<div class="wrapper">
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/brand/site-logo.svg" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>

			<div class="portable-bar" href="#">
				<a class="site-nav-toggle" href="#">
					<span class="accessibility">Toggle navigation</span>
				</a>
			</div>

			<nav id="site-navigation" class="site-nav" role="navigation">
				<?php
					$menuParams = array(
						'theme_location' => 'primary',
						'container' => false,
						'echo' => false,
						'items_wrap' => '%3$s',
						'depth' => 0
					);

					echo strip_tags(wp_nav_menu( $menuParams ), '<a>' );
				?>
				<a href="http://www.sentrilock.com/" class="btn btn--primary ml-"><i class="fa fa-lock"></i> Need a lockbox?</a>
			</nav>
		</div>
	</header>

	<main id="content" class="page__main" role="main">
