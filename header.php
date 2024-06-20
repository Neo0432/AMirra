<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMirra
 */

?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<nav>
		<section class="nav_logo">
			<a href=""><img src="wp-content/themes/amirra/assets/images/nav/logo.svg" alt="logo"></a>
		</section>
		<section class="nav_sect">
			<section class="nav_leftGroup">
				<div class="dropdownButton">
					<button class="nav_leftGroup_menuBut buttonAnimation">
						<p>Меню</p>
						<img src=<?= get_template_directory_uri() . '/assets/images/nav/arrow_drop_down.svg'?> alt="">
					</button>
					<div class="dropdown-content hidden">
						<a href="#">Ссылка 1</a>
						<a href="#">Ссылка 2</a>
						<a href="#">Ссылка 3</a>
					</div>
				</div>
				<button class="nav_leftGroup_eyeBut buttonAnimation">
					<img src="wp-content/themes/amirra/assets/images/nav/visibility.svg?1" alt="">
				</button>
				<p class="nav_leftGroup_location"><?php echo get_field('location', 'option');?></p>
			</section>
			<section class="nav_rightGroup">
				<section class="nav_rightGroup_phonesGroup">
					<p class="nav_rightGroup_phoneNumber">
						<?php echo get_field('phone_one', 'option');?>
					</p>
					<section class="nav_rightGroup_phonesGroup_createLine"></section>
					<p class="nav_rightGroup_phoneNumber">
						<?php echo get_field('phone_two', 'option');?>
					</p>
				</section>
				<button class="nav_rightGroup_phoneBut buttonAnimation">
					<img src="wp-content/themes/amirra/assets/images/nav/call.svg" alt="">
				</button>
			</section>
		</section>
	</nav>
</header>