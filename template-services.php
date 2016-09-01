<?php
/**
Template Name: Page - Services
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

					<?php
					// the query
					$the_query = new WP_Query( 'posts_per_page= -1' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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

              							<?php the_title( '<h5>','</h5>' ); ?></a>
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
						<p><?php __( 'Sorry, no tours have been added yet!', 'bldr' ); ?></p>
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
