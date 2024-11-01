<?php
/**
 * Heading Call to Action.
 *
 * @package Tiles
 */

$content = '
<!-- wp:group {"align":"full","backgroundColor":"tiles-mono-dark","textColor":"tiles-mono-light","className":"tiles tiles--fullwidth-cta no-group-appender"} -->
	<div class="wp-block-group alignfull tiles no-group-appender has-tiles-mono-light-color has-tiles-mono-dark-background-color has-text-color has-background">
		<div class="wp-block-group__inner-container">
			<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide">

					<!-- wp:column {"width":"5%","className":"empty"} -->
						<div class="wp-block-column empty" style="flex-basis:5%"></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"90%","className":"mx-0"} -->
						<div class="wp-block-column mx-0" style="flex-basis:90%">

							<!-- wp:heading {"textAlign":"center","fontSize":"tiles-xl"} -->
								<h2 class="has-text-align-center has-tiles-xl-font-size">' . esc_html__( 'Everything you need for your next big adventure', 'tiles' ) . '</h2>
							<!-- /wp:heading -->

							<!-- wp:buttons {"contentJustification":"center","align":"wide"} -->
								<div class="wp-block-buttons alignwide is-content-justification-center">
									<!-- wp:button {"textColor":"tiles-mono-light","className":"is-style-outline"} -->
										<div class="wp-block-button is-style-outline">
											<a class="wp-block-button__link has-tiles-mono-light-color has-text-color">' . esc_html__( 'Get Started', 'tiles' ) . '</a>
										</div>
									<!-- /wp:button -->
								</div>
							<!-- /wp:buttons -->
						</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"5%","className":"empty"} -->
						<div class="wp-block-column empty" style="flex-basis:5%"></div>
					<!-- /wp:column -->

				</div>
			<!-- /wp:columns -->
		</div>
	</div>
<!-- /wp:group -->
';

return array(
	'title'         => _x( 'Fullwidth Call to Action [Tiles]', 'Block pattern title', 'tiles' ),
	'description'   => _x( 'Call to action with a heading and a button', 'Block pattern description', 'tiles' ),
	'categories'    => array( 'tiles', 'tiles-cta' ),
	'content'       => trim($content),
	'viewportWidth' => 1400,
);
