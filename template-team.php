<?php
/**
Template Name: Page - Team Members
 *
 * @package sensible
 */

get_header(); ?>


	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>

    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

		<?php else : ?>

        <header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

	<?php endif; ?>

	<?php $services_columns_number = esc_html( get_theme_mod( 'services_columns_number', '3' )); ?>

	<div id="primary" class="content-area service-page">
		<main id="main" class="site-main" role="main">

        	<div class="grid grid-pad">


			<?php $team_columns_number = esc_html( get_theme_mod( 'team_columns_number', '3' )); ?>


               <?php $the_query = new WP_Query( 'posts_per_page= -1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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


			<div class="content-area col-1-1">

				<?php while ( have_posts() ) : the_post(); ?>


					<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- col-1-1 -->


        </div><!-- grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
