<?php
/**
 * Large Image Caption Below.
 *
 * @package Tiles
 */

$content = '
<!-- wp:group {"align":"full","backgroundColor":"tiles-senary","textColor":"tiles-mono-light","className":"tiles tiles--join-our-team my-0 no-appender"} -->
	<div class="wp-block-group alignfull tiles tiles--join-our-team my-0 no-appender has-tiles-mono-light-color has-tiles-senary-background-color has-text-color has-background">
		<div class="wp-block-group__inner-container">
			<!-- wp:columns {"align":"wide" ,"className":"mt-0"} -->
				<div class="wp-block-columns alignwide mt-0">
					<!-- wp:column {"width":"55%"} -->
						<div class="wp-block-column" style="flex-basis:55%">
							<!-- wp:heading {"level":1,"fontSize":"tiles-xl"} -->
								<h1 class="has-tiles-xl-font-size">' . esc_html__( 'Join our team', 'tiles' ) . '</h1>
							<!-- /wp:heading -->
							<!-- wp:paragraph -->
								<p>' . esc_html__( 'We work hard, play harder, but never really play it safe... and we\'re always looking for talented folks to join our ever growing team.', 'tiles' ) . '</p>
							<!-- /wp:paragraph -->
						</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"45%","className":"empty"} -->
						<div class="wp-block-column empty" style="flex-basis:45%"></div>
					<!-- /wp:column -->
				</div>
			<!-- /wp:columns -->
			<!-- wp:spacer {"height":10} -->
				<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide">
					<!-- wp:column {"width":"85%"} -->
						<div class="wp-block-column" style="flex-basis:85%">
							<!-- wp:image {"align":"wide","id":null,"sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image alignwide size-full">
									<img src="' . Tiles()->get_asset( '4x3-1' ) . '" alt="' . Tiles()->get_alt_text(). '"/>
								</figure>
							<!-- /wp:image -->
						</div>
					<!-- /wp:column -->
				</div>
			<!-- /wp:columns -->
			<!-- wp:spacer {"height":10} -->
				<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide">
					<!-- wp:column {"width":"60%","className":"empty"} -->
						<div class="wp-block-column empty" style="flex-basis:60%"></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"40%"} -->
						<div class="wp-block-column" style="flex-basis:40%">
							<!-- wp:paragraph -->
								<p>' . esc_html__( 'We believe that great results are best delivered by highly creative and diverse teams working in unison. Does that sound good to you?', 'tiles' ) . '</p>
							<!-- /wp:paragraph -->
							<!-- wp:buttons -->
								<div class="wp-block-buttons">
                                                                        <!-- wp:button {"className":"is-style-outline"} -->
                                                                                <div class="wp-block-button is-style-outline">
                                                                                        <a class="wp-block-button__link">' . esc_html__( 'Careers', 'tiles' ) . '</a>
                                                                                </div>
                                                                        <!-- /wp:button -->
								</div>
							<!-- /wp:buttons -->
						</div>
					<!-- /wp:column -->
				</div>
			<!-- /wp:columns -->
		</div>
	</div>
<!-- /wp:group -->
';

return array(
	'title'       => _x( 'Large Image Caption Below [Tiles]', 'Block pattern title', 'tiles' ),
	'description' => _x( 'A large image area perfect for team or about pages. ', 'Block pattern description', 'tiles' ),
	'categories'  => array( 'tiles', 'tiles-team' ),
	'content'     => trim($content),
	'viewportWidth' => 1400,
);
