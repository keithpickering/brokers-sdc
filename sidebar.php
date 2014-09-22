<?php
/**
* The about area on every page.
*
* @package brokers-sdc
*/
?>

<div class="strip strip--about" role="complementary">
	<div class="wrapper">
		<div class="layout layout--large">
			<div class="layout__item desk-2/3">
				<div class="title-inline">
					<h2 class="title-inline__title">About us</h2>
					<?php if ( !is_page( 'About Us' ) ) : ?>
						<a href="<?php echo get_permalink ( get_page_by_title( 'About' ) ); ?>" class="btn btn--secondary btn--small">More info</a>
					<?php endif; ?>
				</div>
				<div class="media media--responsive mb">
					<img class="media__img about-img img--frame img--round" src="<?php echo get_template_directory_uri(); ?>/images/ed-nancy.jpg">

					<div class="media__body">
						<p>Ed and Nancy Pickering have been licensed real estate brokers in North County, California since 1976 and 1981, respectively. Since then, they have provided their clients with honest, personable, top-quality service at discount prices.</p>

						<p>Nancy and Ed have saved their clients hundreds of thousands of dollars in commissions over almost 40 years. They can save you thousands too!</p>
				</div>
			</div>
		</div>
		<div class="layout__item desk-1/3">
			<h2 id="contact">Contact info</h2>
			<ul class="list-block">
				<li class="list-block__item">
					<i class="fa fa-fw fa-phone"></i>
					<span class="accessibility">Phone:</span>
					760-740-2555
				</li>
				<li class="list-block__item">
					<i class="fa fa-fw fa-envelope"></i>
					<span class="accessibility">Email:</span>
					<a href="mailto:ednancy@cox.net">ednancy@cox.net</a>
				</li>
				<li class="list-block__item">
					<i class="fa fa-fw fa-file-text"></i>
					<a href="<?php echo get_permalink ( get_page_by_title( 'Contact' ) ); ?>">Contact form</a>
				</li>
			</ul>
		</div>
	</div>
</div>
