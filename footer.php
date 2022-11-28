	<?php wp_footer(); ?>

	<?php 
		$logo = get_field('footer_logo', 'options');
		$col1 = get_field('footer_col_first', 'options');
		$col2 = get_field('footer_col_two', 'options');
		$col3 = get_field('footer_col_third', 'options');
	?>
	<footer class="footer">
		<div class="footerInner">
			<div class="footerContent container">
				<div class="footerContent--4">
					<div class="footerLogo">
						<img src="<?php echo esc_url($logo['url'])?>" alt="eneco-logo">
					</div>
					<h2 class="footerTitle">ENECO POLSKA Sp. z o.o.</h2>
					<div class="footerText">
						<?php echo $col1; ?>
					</div>
				</div>
				<div class="footerContent--4">
					<div class="footerIcon">
						<img src="<?php echo THEME_URL; ?>_dev/img/clock.png" alt="godziny-otwarcia">
					</div>
					<h2 class="footerTitle">Godziny otwarcia</h2>
					<div class="footerText">
						<?php echo $col2; ?>
					</div>
					<img src="<?php echo THEME_URL; ?>_dev/img/footerApp.png" alt="footerApp" class="footerApp">
				</div>
				<div class="footerContent--2">
					<div class="footerIcon">
						<img src="<?php echo THEME_URL; ?>_dev/img/call.png" alt="numer-telefonu">
					</div>
					<h2 class="footerTitle">Kontakt</h2>
					<div class="footerText">
						<?php echo $col3; ?>
					</div>
				</div>
			</div>
		</div>
	

	</footer>
	    
	<!-- Javascript-->
	<script src="<?php echo THEME_URL ?>public/bundle.js"></script>
	<script src="<?php echo THEME_URL ?>public/map.js"></script>
	<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSPaL8-8q4GI_Uk8QvIb_fRHxVX3LpMEY&callback=initMap"></script>
</body>

