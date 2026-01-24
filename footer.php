<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dromosexelixis
 */

?>

		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<p class="copyright">&copy; Copyright  <span class="year"></span> - Designed & Developed by <strong>Costas Nicou</strong></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon --><!-- #page -->

	</div>
	
	<script>
		const yearHtml = document.querySelector('.year');
		const date = new Date();
		const year = date.getFullYear();
		yearHtml.innerText = year;
	</script>
	<?php wp_footer(); ?>
	</body>
</html>
