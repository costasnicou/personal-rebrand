<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dromosexelixis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d495971c43.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dromosexelixis' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="top-header">
			<nav>
				<div class="top-header__left">
					<div class="box phone"><p><i class="fa-solid fa-phone"></i><strong>Have any questions?</strong> 96 916096</p></div>
					<div class="box location"><p><i class="fa-sharp fa-solid fa-location-dot"></i>Filias 6 Arakapas</p></div>
					<div class="box hours"><p><i class="fa-solid fa-clock"></i><strong>Mon-Friday: </strong>18:00 - 22:00 / <strong>Sat-Sun: </strong>9:00 - 22:00</p></div>
				</div>

				<div class="top-header__right">
					<div class="social">
						<p>Follow Me On: </p>
						<a href="https://www.instagram.com/cnicou.tech/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
						<a href="https://www.facebook.com/costas.nicou.3/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
						<a href="https://www.linkedin.com/in/cnicou/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
						
						
					</div>
				</div>
			</nav>

		</div>
		<nav class="bottom-header" >
			<i class="fa-solid fa-computer brand-logo"></i>
			<!-- <ul class="main-menu">
				<li class="list-item"><a href="" class="link-item">Home</a></li>
				<li class="list-item"><a href="" class="link-item">About Us</a></li>
				<li class="list-item"><a href="" class="link-item">Service</a></li>
				<li class="list-item"><a href="" class="link-item">Blog</a></li>
				<li class="list-item"><a href="" class="link-item">Pages</a></li>
				<li class="list-item"><a href="" class="link-item">Contact</a></li>
			</ul> -->
			<div class="menu-wraper">
				<label for="toggle">&#9776;</label>
                <input type="checkbox" name="checkbox" id="toggle">
				<?php
					wp_nav_menu([
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'main-menu',
					'fallback_cb'    => false,
					'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
					'link_before'    => '<span class="link-item">',
					'link_after'     => '</span>',
					]);
				?>
								

				<a href="<?php echo esc_url( home_url('/') . '#contact' ); ?>" class="quota">Get a Quota</a>
			</div>
		</nav>
	</header><!-- #masthead -->
