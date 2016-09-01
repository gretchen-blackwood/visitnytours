<?php
/**
 * The template part for displaying home tours
 *
 * @package sensible-wp
 */
?>


		<div class="home-services">

				<?php if ( get_theme_mod( 'services_text' ) ) : ?>

        			<div class="grid grid-pad">
            			<div class="col-1-1">
                        	<h6 class="wow animated fadeIn">
								<?php echo wp_kses_post(get_theme_mod( 'services_text' )); ?>
                            </h6>
                        </div>
            		</div><!-- grid -->

				<?php endif; ?>


				<?php $services_columns_number = esc_html( get_theme_mod( 'services_columns_number', '3' )); ?>
                <?php $services_number_display = esc_html( get_theme_mod( 'services_number_display', '6' )); ?>

                <div class="grid grid-pad no-top">

				<?php
				// the query
				$services_query = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => $services_number_display,
					'tax_query' =>
					array(
						array(
      					'taxonomy' => 'post_format',
      					'field' => 'slug',
      					'terms' => 'post-format-status',
    			)))); ?>

				<?php if ( $services_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>

                		<?php if ( has_post_format( 'status' )) : ?>


								<div class="col-1-<?php echo esc_html( $services_columns_number ); ?> mt-column-clear wow animated fadeIn" data-wow-delay="0.25s">
    								<div class="service">


                        <!--				<?php if (get_post_meta( $post->ID, '_sn_primary_icon_url', true ) ): ?>

                    						<a href="<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_icon_url', true ); echo $text; ?>">

										<?php endif; ?>


                        				<?php if (get_post_meta( $post->ID, '_sn_primary_icon', true ) ): ?>

               								<i class="fa <?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_icon', true ); echo $text; ?>"></i>

                            			<?php endif; ?>


                       					<?php if (get_post_meta( $post->ID, '_sn_primary_icon_url', true ) ): ?>

                    						</a>

										<?php endif; ?>
-->
<a href="<?php echo esc_url( get_permalink()) ?>">
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>

              							<?php the_title( '<h5>','</h5>' ); ?>
													</a>
														<?php echo "hi"; ?>
                                        <?php the_excerpt(); ?>
																				<a href="<?php echo esc_url( get_permalink()) ?>" class="featured-link">



																				<button class="wow animated fadeIn">Tour Details </button>



																				</a>

                               		</div><!-- member -->
								</div><!-- col-1-3 -->

                        <?php endif; ?>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

            	<?php else : ?>
					<p><?php __( 'Sorry, no tours have been added yet!', 'sensible' ); ?></p>
				<?php endif; ?>

                </div><!-- grid -->
								<?php if ( get_theme_mod( 'services_cta' ) ) : ?>

			<?php endif; ?>

                <?php if ( get_theme_mod( 'service_button_text' ) ) : ?>

                    <?php if ( get_theme_mod( 'service_button_url' ) ) : ?>

                    	<a href="<?php echo esc_url( get_page_link( get_theme_mod('service_button_url'))) ?>" class="featured-link">

					<?php endif; ?>

                    	<button class="wow animated fadeIn">

              				<?php esc_html( get_theme_mod( 'service_button_text' )); ?>

                        </button>

                    <?php if ( get_theme_mod( 'service_button_url' ) ) : ?>

                    	</a>

                    <?php endif; ?>


				<?php endif; ?>


			</div><!-- home-tours -->
