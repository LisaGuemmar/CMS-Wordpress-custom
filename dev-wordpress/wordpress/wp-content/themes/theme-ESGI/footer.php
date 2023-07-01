		<footer id="site-footer" class="col-md-6 offset-3">

					<?php
			if (has_nav_menu('footer-menu')) {
			wp_nav_menu(array(
				'theme_location' => 'footer-menu',
				'container' => 'nav',
				'container_class' => 'footer-menu',
			));
			}
			?>


						
			<?php
			if (is_active_sidebar('footer-widget-area')) {
			dynamic_sidebar('footer-widget-area');
			}
			?>



			<div class="container">
				©2023 LISA
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>