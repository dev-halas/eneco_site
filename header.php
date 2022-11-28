<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>

		<?php 
			$logo = get_field('header_logo', 'options');
			$phone = get_field('header_phone', 'options');
			$email = get_field('header_email', 'options');
		?>

		<header class="header">
			<div class="headerInner">
				<a href="<?php echo esc_url(home_url('/')) ?>" class="headerLogo">
					<img src="<?php echo esc_url($logo['url']); ?>" alt="eneco-logo">
				</a>
				<nav class="headerLinks">
					<div class="headerLinks--menu">
						<?php wp_nav_menu(array(
								'theme_location' => 'main_nav'
							));
						?>
					</div>
					<div class="headerContact">
						<span class="headerContact--item">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="32px" height="32px" viewBox="0 0 32 32" version="1.1">
								<defs/>
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
									<g id="icon-3-mail-envelope-closed" sketch:type="MSArtboardGroup" fill="#fff">
										<path d="M5.31500722,9.27391933 C5.12106043,9.45739405 5,9.71770487 5,10.0068455 L5,21.9931545 C5,22.5492199 5.43891776,23 6.00307055,23 L26.9969294,23 C27.55091,23 28,22.5500512 28,21.9931545 L28,10.0068455 C28,9.71711185 27.8808404,9.45596162 27.6868931,9.27226685 L16.5,19 L5.31500722,9.27391933 L5.31500722,9.27391933 L5.31500722,9.27391933 Z M6.00359486,8 C4.89703997,8 4,8.89451376 4,9.99406028 L4,22.0059397 C4,23.1072288 4.88976324,24 6.00359486,24 L26.9964051,24 C28.10296,24 29,23.1054862 29,22.0059397 L29,9.99406028 C29,8.8927712 28.1102368,8 26.9964051,8 L6.00359486,8 L6.00359486,8 Z M16.5,17.7000122 L26.5,9 L6.5,9 L16.5,17.7000122 L16.5,17.7000122 Z" id="mail-envelope-closed" sketch:type="MSShapeGroup"/>
									</g>
								</g>
							</svg>
							<a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a>
						</span>
						<span class="headerContact--item">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 18 18" version="1.1">
								<g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Rounded" transform="translate(-749.000000, -1263.000000)">
										<g id="Communication" transform="translate(100.000000, 1162.000000)">
											<g id="-Round-/-Communication-/-phone" transform="translate(646.000000, 98.000000)">
												<g>
													<polygon id="Path" points="0 0 24 0 24 24 0 24"/>
													<path d="M19.23,15.26 L16.69,14.97 C16.08,14.9 15.48,15.11 15.05,15.54 L13.21,17.38 C10.38,15.94 8.06,13.63 6.62,10.79 L8.47,8.94 C8.9,8.51 9.11,7.91 9.04,7.3 L8.75,4.78 C8.63,3.77 7.78,3.01 6.76,3.01 L5.03,3.01 C3.9,3.01 2.96,3.95 3.03,5.08 C3.56,13.62 10.39,20.44 18.92,20.97 C20.05,21.04 20.99,20.1 20.99,18.97 L20.99,17.24 C21,16.23 20.24,15.38 19.23,15.26 Z" id="🔹Icon-Color" fill="#fff"/>
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
							<a href="tel: <?php echo $phone; ?>"><?php echo $phone; ?></a>
						</span>
					</div>

				</nav>
				<button class="hamburger">
					<span class="hamburger__box">
						<span class="hamburger__inner"></span>
					</span>
				</button>
			</div>
		</header>