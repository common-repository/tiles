<?php
/**
 * Right Column Stats.
 *
 * @package Tiles
 */

$content = '
<!-- wp:group {"align":"full","backgroundColor":"tiles-quaternary","textColor":"tiles-mono-light","className":"tiles tiles--right-stats my-0 no-appender"} -->
	<div class="wp-block-group alignfull tiles tiles--right-stats my-0 no-appender has-tiles-mono-light-color has-tiles-quaternary-background-color has-text-color has-background">
		<div class="wp-block-group__inner-container">
			<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide">
					<!-- wp:column {"width":"50%", "className":"empty"} -->
						<div class="wp-block-column empty" style="flex-basis:50%"></div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%","className":"mx-0"} -->
						<div class="wp-block-column mx-0" style="flex-basis:50%">
                                                        <!-- wp:heading {"fontSize":"tiles-md"} -->
                                                                <h2 class="has-tiles-md-font-size">' . esc_html__( 'We design and develop web apps for startups, small, and medium businesses.', 'tiles' ) . '</h2>
                                                        <!-- /wp:heading -->

							<!-- wp:paragraph -->
								<p>' . esc_html__( 'We exist to help all those people with creative ideas stand out and succeed. We create modern applications that enable millions to build a brand, share their stories, and transact with their customers in an impactful and beautiful online presence.', 'tiles' ) . '</p>
							<!-- /wp:paragraph -->
							<!-- wp:spacer {"height":10} -->
								<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

                                                        <!-- wp:heading {"level":3,"textColor":"tiles-quaternary","className":"text-stroke my-0","fontSize":"tiles-xxl"} -->
                                                                <h3 class="text-stroke mb-0 has-tiles-quaternary-color has-text-color has-tiles-xxl-font-size">' . esc_html__( '3,431', 'tiles' ) . '</h3>
                                                        <!-- /wp:heading -->

							<!-- wp:paragraph {"className":"mt-0"} -->
								<p class="mt-0">' . esc_html__( 'Websites and applications built by our top-notch team.', 'tiles' ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:spacer {"height":10} -->
								<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

                                                        <!-- wp:heading {"level":3,"textColor":"tiles-quaternary","className":"text-stroke my-0","fontSize":"tiles-xxl"} -->
                                                                <h3 class="text-stroke mb-0 has-tiles-quaternary-color has-text-color has-tiles-xxl-font-size">' . esc_html__( '1,547', 'tiles' ) . '</h3>
                                                        <!-- /wp:heading -->

							<!-- wp:paragraph {"className":"mt-0"} -->
								<p class="mt-0">' . esc_html__( 'Cups of coffee our team has consumed over the last year.', 'tiles' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
					<!-- /wp:column -->
				</div>
			<!-- /wp:columns -->
		</div>
	</div>
<!-- /wp:group -->
';

return array(
	'title'       => _x( 'Right Column Stats [Tiles]', 'Block pattern title', 'tiles' ),
	'description' => _x( 'A creative way to display statistics on your about page', 'Block pattern description', 'tiles' ),
	'categories'  => array( 'tiles', 'tiles-stats' ),
	'content'     => trim($content),
	'viewportWidth' => 1400,
);
