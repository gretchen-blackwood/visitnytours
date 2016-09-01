<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sensible
 */
?>

	</section><!-- #content -->

    <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?>

    	<?php if ( is_active_sidebar('footer-social-widget') ) : ?>

        	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>

            	<div class="footer-icons">
        			<div class="social-bar">

        	<?php else : ?>

            	<div class="footer-icons">
        			<div class="social-bar-none">

        	<?php endif; ?>

        		<div class="grid grid-pad">
        			<div class="col-1-1">

                	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>

        			  	<span class="wow animated fadeIn">

							<?php echo get_theme_mod( 'footer_social_text' ); ?>

                        </span>

					<?php endif; ?>

                    	<div class="wow animated fadeIn">

    						<?php dynamic_sidebar('footer-social-widget'); ?>

                   		</div>

                	</div><!-- col-1-1 -->
        		</div><!-- grid -->

            <?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
            		</div>
        		</div><!-- social-bar -->
        	<?php else : ?>
        			</div>
        		</div><!-- social-bar -->
        	<?php endif; ?>

        <?php endif; ?>

	<?php endif; ?>


    <?php if( get_theme_mod( 'active_footer_contact' ) == '') : ?>

    	<div class="footer-contact">
        	<div class="grid grid-pad">


            	<?php if ( get_theme_mod( 'footer_title_text' ) ) : ?>

                    <div class="col-1-1">
            			<h6><?php echo wp_kses_post( get_theme_mod( 'footer_title_text' )); // footer title ?></h6>
    				 </div><!-- col-1-1 -->

				<?php endif; ?>


                <div class="col-1-3">
            		<div class="footer-block">

                    	<?php if ( get_theme_mod( 'bottom_footer_icon_1' ) ) : ?>

    						<i class="fa <?php echo esc_html( get_theme_mod( 'bottom_footer_icon_1', __( 'fa-map-marker', 'sensible' ) )); // first icon ?>"></i>

						<?php endif; ?>

                        <?php if ( get_theme_mod( 'first_text' ) ) : ?>

    						<h5><?php echo wp_kses_post( get_theme_mod( 'first_text' )); // first icon ?></h5>

						<?php endif; ?>

                        <?php if ( get_theme_mod( 'sensible_footer_first' ) ) : ?>

    						<p><?php echo wp_kses_post( get_theme_mod( 'sensible_footer_first' )); // first icon ?></p>

						<?php endif; ?>

            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->

            	<div class="col-1-3">
            		<div class="footer-block">

                        <?php if ( get_theme_mod( 'bottom_footer_icon_2' ) ) : ?>

                            <i class="fa <?php echo esc_html( get_theme_mod( 'bottom_footer_icon_2', __( 'fa-mobile', 'sensible' ) )); // second icon ?>"></i>

						<?php endif; ?>

                        <?php if ( get_theme_mod( 'second_text' ) ) : ?>

                            <h5><?php echo wp_kses_post( get_theme_mod( 'second_text' )); // second icon ?></h5>

						<?php endif; ?>

                        <?php if ( get_theme_mod( 'sensible_footer_second' ) ) : ?>

                            <p><?php echo wp_kses_post( get_theme_mod( 'sensible_footer_second' )); // second icon ?></p>

						<?php endif; ?>

            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->

            	<div class="col-1-3">
            		<div class="footer-block">

                        <?php if ( get_theme_mod( 'bottom_footer_icon_3' ) ) : ?>

                            <i class="fa <?php echo esc_html( get_theme_mod( 'bottom_footer_icon_3', __( 'fa-envelope-o', 'sensible' ) )); // third icon ?>"></i>

						<?php endif; ?>

                        <?php if ( get_theme_mod( 'third_text' ) ) : ?>

                            <h5><?php echo wp_kses_post( get_theme_mod( 'third_text' )); // third icon ?></h5>

						<?php endif; ?>

                        <?php if ( get_theme_mod( 'sensible_footer_third' ) ) : ?>

                            <p><?php echo wp_kses_post( get_theme_mod( 'sensible_footer_third' )); // third icon ?></p>

						<?php endif; ?>

            		</div><!-- footer-block -->
    			</div><!-- col-1-3 -->

    	</div><!-- grid -->
    </div><!-- footer-contact -->

    <?php endif; ?>
	<?php // end if ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">

        	<?php if ( 'option2' == sensible_sanitize_index_content( get_theme_mod( 'sensible_footer_home' ) ) ) : ?>


				<?php if ( is_active_sidebar('contact-form') ) : ?>


					<div class="site-info col-1-1">
            			<div class="footer-form">

							<?php dynamic_sidebar('contact-form'); ?>

                		</div>
					</div><!-- .site-info -->


            	<?php endif; ?>


			<?php else : ?>


            	<?php if ( is_home() || is_front_page() || is_page_template( 'page-home.php' ) || is_page_template( 'page-home-video.php' ) || is_page_template( 'page-home-image-bg.php' ) || is_page_template( 'page-home-fullscreen.php' ) ) : ?>


        			<?php if ( is_active_sidebar('contact-form') ) : ?>


						<div class="site-info col-1-1">
            				<div class="footer-form">

								<?php dynamic_sidebar('contact-form'); ?>

                			</div>
						</div><!-- .site-info -->


            		<?php endif; ?>

                <?php endif; ?>


			<?php endif; ?>



			<div class="site-info col-1-1">

				<?php if ( get_theme_mod( 'sensible_footerid' ) ) : ?>

					<?php echo wp_kses_post( get_theme_mod( 'sensible_footerid' )); // footer id ?>

				<?php else : ?>

					<?php printf( __( '© 2016 Visit New York Tours', 'sensible' )); ?>

				<?php endif; ?>

            </div><!-- .site-info -->


		</div><!-- grid -->
    </footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
