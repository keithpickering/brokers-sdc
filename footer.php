<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package brokers-sdc
 */
?>

	</main>

	<footer id="colophon" class="page__foot" role="contentinfo">
		<div class="wrapper">
			<div class="layout">
				<div class="layout__item desk-1/2">
					<?php if ( is_page( 'Home' ) ) : ?>*Depending on price.<?php endif; ?>
				</div>
				<div class="layout__item desk-1/2 text--right">
					&copy;<?php echo date("Y"); ?> Associated Brokers /SDC. All rights reserved. CA DRE #00576436
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
