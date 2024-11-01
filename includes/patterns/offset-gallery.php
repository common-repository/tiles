<?php
/**
 * Offset Gallery.
 *
 * @package Tiles
 */

$content = '
<!-- wp:group {"align":"full","className":"tiles tiles--offset-gallery my-0 pl-0 pr-0 has-background no-appender"} -->
	<div class="wp-block-group alignfull tiles tiles--offset-gallery my-0 pl-0 pr-0 has-background no-appender">
		<div class="wp-block-group__inner-container">
			<!-- wp:group {"align":"full","backgroundColor":"tiles-mono-dark","className":"clipped p-0 my-0 no-caption"} -->
				<div class="wp-block-group alignfull clipped p-0 my-0 no-caption has-tiles-mono-dark-background-color has-background">
					<div class="wp-block-group__inner-container">
						<!-- wp:image {"align":"center","id":null,"sizeSlug":"full","linkDestination":"none"} -->
							<div class="wp-block-image">
								<figure class="aligncenter size-full">
									<img src="' . Tiles()->get_asset( '3x4-1' ) . '" alt="' . Tiles()->get_alt_text(). '"/>
								</figure>
							</div>
						<!-- /wp:image -->
					</div>
				</div>
			<!-- /wp:group -->
		</div>
	</div>
<!-- /wp:group -->
';

return array(
	'title'       => _x( 'Offset Gallery [Tiles]', 'Block pattern title', 'tiles' ),
	'description' => _x( 'An interesting photo gallery for landing pages', 'Block pattern description', 'tiles' ),
	'categories'  => array( 'tiles', 'tiles-gallery' ),
	'content'     => trim($content),
	'viewportWidth' => 1400,
);
