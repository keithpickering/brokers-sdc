<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package brokers-sdc
 */

if ( !is_page( 'Home') ) : ?>

<div class="page__title">
	<div class="wrapper">
		<h1 class="wow fadeIn">
			<?php the_title(); ?>
		</h1>
	</div>
</div>

<?php endif;

the_content(); ?>
