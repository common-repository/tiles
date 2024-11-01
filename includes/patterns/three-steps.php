<?php
/**
 * Three Steps.
 *
 * @package Tiles
 */

$content = '
<!-- wp:group {"align":"full","backgroundColor":"tiles-secondary","textColor":"tiles-mono-light","className":"tiles tiles\u002d\u002dthree-steps"} -->
        <div class="wp-block-group alignfull tiles tiles--three-steps has-tiles-mono-light-color has-tiles-secondary-background-color has-text-color has-background">
                <div class="wp-block-group__inner-container">
                        <!-- wp:columns {"align":"wide"} -->
                                <div class="wp-block-columns alignwide">
                                        <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:paragraph {"textColor":"tiles-secondary","className":"text-stroke","fontSize":"tiles-xxxl"} -->
                                                                <p class="text-stroke has-tiles-secondary-color has-text-color has-tiles-xxxl-font-size">1</p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:heading {"level":3,"fontSize":"tiles-md"} -->
                                                                <h3 class="has-tiles-md-font-size">' . esc_html__( 'Explore', 'tiles' ) . '</h3>
                                                        <!-- /wp:heading -->

                                                        <!-- wp:paragraph -->
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis.</p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph -->
                                                                <p><a href="#">' . esc_html__( 'Sign up', 'tiles' ) . '</a></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                        <!-- /wp:column -->

                                        <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:spacer {"height":30} -->
                                                                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                                                        <!-- /wp:spacer -->

                                                        <!-- wp:paragraph {"textColor":"tiles-secondary","className":"text-stroke","fontSize":"tiles-xxxl"} -->
                                                                <p class="text-stroke has-tiles-secondary-color has-text-color has-tiles-xxxl-font-size">2</p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:heading {"level":3,"fontSize":"tiles-md"} -->
                                                                <h3 class="has-tiles-md-font-size">' . esc_html__( 'Discover', 'tiles' ) . '</h3>
                                                        <!-- /wp:heading -->

                                                        <!-- wp:paragraph -->
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis.</p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph -->
                                                                <p><a href="#">' . esc_html__( 'Sign up', 'tiles' ) . '</a></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                        <!-- /wp:column -->

                                        <!-- wp:column -->
                                                <div class="wp-block-column">
                                                        <!-- wp:spacer {"height":60} -->
                                                                <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
                                                        <!-- /wp:spacer -->

                                                        <!-- wp:paragraph {"textColor":"tiles-secondary","className":"text-stroke","fontSize":"tiles-xxxl"} -->
                                                                <p class="text-stroke has-tiles-secondary-color has-text-color has-tiles-xxxl-font-size">' . esc_html__( '3', 'tiles' ) . '</p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:heading {"level":3,"fontSize":"tiles-md"} -->
                                                                <h3 class="has-tiles-md-font-size">' . esc_html__( 'Lead', 'tiles' ) . '</h3>
                                                        <!-- /wp:heading -->

                                                        <!-- wp:paragraph -->
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis.</p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph -->
                                                                <p><a href="#">' . esc_html__( 'Sign up', 'tiles' ) . '</a></p>
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
	'title'       => _x( 'Three Steps [Tiles]', 'Block pattern title', 'tiles' ),
	'description' => _x( 'Display next steps for your about or landing page', 'Block pattern description', 'tiles' ),
	'categories'  => array( 'tiles', 'tiles-stats', 'tiles-content' ),
	'content'     => trim($content),
	'viewportWidth' => 1400,
);
