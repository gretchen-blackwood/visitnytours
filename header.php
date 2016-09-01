<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sensible
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sensible' ); ?></a>


		<?php if( get_theme_mod( 'active_secondary' ) == '' ) : ?>


        	<?php if ( is_active_sidebar('header-widget-area') || is_active_sidebar('header-social-area') || get_theme_mod( 'active_secondary' ) == '' ) : ?>

          		<div class="secondary-header">
      				<div class="grid grid-pad">


               		<?php if ( is_active_sidebar('header-widget-area') ) : ?>

                    	<div class="col-1-2">

							<?php dynamic_sidebar('header-widget-area'); ?>

                       	</div>

                	<?php endif; ?>



                    <?php if( get_theme_mod( 'active_header_social' ) == '') : ?>

                        <div class="col-1-2 push-right no-pad">

                        	<?php if ( is_active_sidebar('header-social-area') ) : ?>
            					<?php dynamic_sidebar('header-social-area'); ?>
                        	<?php endif; ?>

                		</div>

                   	<?php endif; ?>


        			</div>
    			</div>


         	<?php endif; ?>

    	<?php endif; ?>


    <?php if ( is_active_sidebar('header-widget-area') || is_active_sidebar('header-social-area') ) : ?>

        <?php if( get_theme_mod( 'active_secondary' ) == '' ) : ?>
			<header id="masthead" class="site-header site-header-secondary" role="banner">
        <?php else : ?>
        	<header id="masthead" class="site-header" role="banner">
        <?php endif; ?>

    <?php else : ?>

    	<header id="masthead" class="site-header" role="banner">

    <?php endif; ?>


            <div class="grid grid-pad head-overflow">
				<div class="site-branding">


					<?php if ( get_theme_mod( 'sensible_logo' ) ) : ?>

                    	<div class="site-logo">

                        	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'sensible_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size', __( '200', 'sensible' ) )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>

                    	</div><!-- site-logo -->

					<?php else : ?>

                    	<hgroup>

                        	<h1 class='site-title'>
                            	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
                            </h1>

                    	</hgroup>

					<?php endif; ?>

            	</div><!-- site-branding -->


                <div class="navigation-container">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle toggle-menu menu-right push-body">
							<i class="fa fa-bars"></i>
							<?php echo esc_html( get_theme_mod( 'sensible_menu_name', __( 'Menu', 'sensible' )  )); ?>
        				</button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
        		</div><!-- navigation-container -->

        	</div><!-- grid -->

    <?php if ( is_page_template( 'page-home.php' ) || is_page_template( 'page-home-fullscreen.php' ) ) : ?>

		</header><!-- #masthead -->

    <?php else : ?>

    	</header><!-- #masthead -->

    <?php endif; ?>



    	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
			<h3><?php echo esc_html( get_theme_mod( 'sensible_menu_name', __( 'Menu', 'sensible' )  )); ?></h3>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>



	<section id="content" class="site-content">
