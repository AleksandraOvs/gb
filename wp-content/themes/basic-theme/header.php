<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/Organization">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<link rel="icon" href="images/favicons/favicon.ico"> <!-- 32×32 -->
	<link rel="icon" href="images/favicons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="images/favicons/favicon.png"> <!-- 180×180 -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<!-- <div class="show-temp"><?php //echo get_current_template(); 
								?> </div>        -->

	<?php wp_body_open(); ?>
	<div class="site-container">
		<header class="header">
			<div class="fixed-container">

				<a href="/" class="site-header__logo">
					<?php
					$header_logo = get_theme_mod('header_logo');
					$img = wp_get_attachment_image_src($header_logo, 'full');
					if ($img) : echo '<img src="' . $img[0] . '" alt="">';
					endif;
					?>
				</a>

				<div class="header__right">
					<div class="header__right__links">
						<a href="/" class="button fill">Заказать звонок</a>
						<a class="header__link" href="/">Вход для партнеров</a>
					</div>
					<div class="header__right__contacts">

						<ul class="header__menu__messengers">

							<?php
							if ($contacts = carbon_get_theme_option('contacts')) {
							?>

								<?php
								foreach ($contacts as $contact) {
								?>
									<li class="social__item">
										<a href="<?php echo $contact['crb_contact_link']; ?>" class="social__link">
											<?php
											$thumb_contact = wp_get_attachment_image_url($contact['crb_contact_image'], 'full');
											?>
											<img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact['crb_contact_name']; ?>">
											<span>
												<?php echo $contact['crb_contact_name']; ?>
											</span>
										</a>
									</li>


								<?php
								}
								?>


							<?php
							}
							?>
							<?php
							if ($address = carbon_get_theme_option('crb_address')) {
							?>
								<li class="social__item">
									<?php
									$address_thumb_url = wp_get_attachment_image_url($address_i = carbon_get_theme_option('crb_address_icon'), 'full');

									?>
									<img class="social__img" width="25" height="25" src="<?php echo $address_thumb_url; ?>" alt="Адрес" />
									<span>
										<?php echo $address; ?>
									</span>
								</li>
							<?php
							}
							?>
						</ul>
					</div>

				</div>

				<button class="header__burger burger js-toggle-menu" type="button">
					<span class="burger__line"></span>
					<span class="sr-only">open/close menu</span>
				</button>
			</div>

			<div class="fixed-container head_menu">
				<?php
				$main_menu = wp_nav_menu(
					array(
						'theme_location' => 'menu-header',
						'container' => 'nav',
						'menu_class' => 'header__menu',
					)
				);
				?>
			</div>


			<div class="mobile-toggle__menu">
				<div class="fixed-container">
					<?php
					$main_menu = wp_nav_menu(
						array(
							'theme_location' => 'mobile-header',
							'container' => false,
							'menu_class' => 'mobile__menu',
						)
					);
					?>

					<div class="mobile-toggle__links">
						<a href="/" class="button fill">Заказать звонок</a>
						<a class="header__link" href="/">Вход для партнеров</a>
					</div>

					<ul class="mobile__menu__messengers">

						<?php
						if ($contacts = carbon_get_theme_option('contacts')) {
						?>

							<?php
							foreach ($contacts as $contact) {
							?>
								<li class="social__item">
									<a href="<?php echo $contact['crb_contact_link']; ?>" class="social__link">
										<?php
										$thumb_contact = wp_get_attachment_image_url($contact['crb_contact_image'], 'full');
										?>
										<img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact['crb_contact_name']; ?>">
										<span>
											<?php echo $contact['crb_contact_name']; ?>
										</span>
									</a>
								</li>


							<?php
							}
							?>


						<?php
						}
						?>
						<?php
						if ($address = carbon_get_theme_option('crb_address')) {
						?>
							<li class="social__item">
								<?php
								$address_thumb_url = wp_get_attachment_image_url($address_i = carbon_get_theme_option('crb_address_icon'), 'full');

								?>
								<img class="social__img" width="25" height="25" src="<?php echo $address_thumb_url; ?>" alt="Адрес" />
								<span>
									<?php echo $address; ?>
								</span>
							</li>
						<?php
						}
						?>
					</ul>

				</div>
			</div>



		</header>

		<main class="main">