<?php
/**
 * The template part for displaying home team
 *
 * @package sensible-wp
 */
?>


		<div class="home-team">

        	<?php if ( get_theme_mod( 'team_text' ) ) : ?>

                <div class="grid grid-pad">
            		<div class="col-1-1">
                        <h6 class="wow animated fadeInRight"><?php echo wp_kses_post(get_theme_mod( 'team_text' )); ?></h6>
                    </div><!-- col-1-1 -->
            	</div><!-- grid -->

			<?php endif; ?>


            <?php $team_columns_number = esc_html( get_theme_mod( 'team_columns_number', '3' )); ?>
            <?php $team_number_display = esc_html( get_theme_mod( 'team_number_display', '6' )); ?>

        	<div class="grid grid-pad no-top">

               <?php
				// the query
				$team_query = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => $team_number_display,
					'tax_query' =>
					array(
						array(
      					'taxonomy' => 'post_format',
      					'field' => 'slug',
      					'terms' => 'post-format-chat',
    			)))); ?>

				<?php if ( $team_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>

                		<?php if ( has_post_format( 'chat' )) : ?>

                        	<div class="col-1-<?php echo esc_html( $team_columns_number ); ?> mt-column-clear wow animated fadeInLeft" data-wow-delay="0.15s">

    							<div class="member">

                                    <?php the_post_thumbnail(); ?>
              						<?php the_title( '<h5>','</h5>' ); ?>
                                    <?php the_content( '<p class="member-description">', '</p>' ); ?>

																		<?php if (get_post_meta( $post->ID, '_sn_primary_tripadvisor', true ) ): ?>
                                        <a href="<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_tripadvisor', true ); echo $text; ?>" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                                    <?php endif; ?>

                                    <?php if (get_post_meta( $post->ID, '_sn_primary_facebook', true ) ): ?>
                                        <a href="<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_facebook', true ); echo $text; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <?php endif; ?>

                                    <?php if (get_post_meta( $post->ID, '_sn_primary_twitter', true ) ): ?>
                                        <a href="<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_twitter', true ); echo $text; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <?php endif; ?>

                                    <?php if (get_post_meta( $post->ID, '_sn_primary_linkedin', true ) ): ?>
                                        <a href="<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_linkedin', true ); echo $text; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <?php endif; ?>

                            		<?php if (get_post_meta( $post->ID, '_sn_primary_google', true ) ): ?>
                                        <a href="<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_google', true ); echo $text; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <?php endif; ?>

                    				<?php if (get_post_meta( $post->ID, '_sn_primary_email', true ) ): ?>
                    					<a href="mailto:<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_email', true ); echo $text; ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    				<?php endif; ?>


                               	</div><!-- member -->
							</div><!-- col-1-3 -->

                        <?php endif; ?>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

            	<?php else : ?>
					<p><?php __( 'Sorry, no Team Members have been added yet!', 'sensible' ); ?></p>
				<?php endif; ?>


            </div><!-- grid -->


            <?php if ( get_theme_mod( 'team_button_text' ) ) : ?>

            	<?php if ( get_theme_mod( 'team_button_url' ) ) : ?>

                     <a href="<?php echo esc_url( get_page_link( get_theme_mod('team_button_url'))) ?>" class="featured-link">

				<?php endif; ?>


                    	<button class="wow animated fadeInLeft">

              				<?php echo esc_html( get_theme_mod( 'team_button_text' )); ?>

                        </button>

                    </a>

				<?php endif; ?>

        </div><!-- home-team -->
