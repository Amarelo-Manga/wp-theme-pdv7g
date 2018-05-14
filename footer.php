<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Neat
 */
?>
<footer class="aa_footer">
	<div class="container">
		<div class="row">
			<div id="logo" class="col-sm-8 col-md-4 col-lg-4 col-xl-3">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
					        echo '<h1><a href="'.get_home_url().'" title="'.get_bloginfo( 'name' ).'" alt="'.get_bloginfo( 'name' ).'"><img src="'. esc_url( $logo[0] ) .'" title="'.get_bloginfo( 'name' ).'" alt="'.get_bloginfo( 'name' ).'"></a> </h1>';
					} else {
					        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
				?>
			</div>

			<div class="col-sm-4 col-md-4 col-lg-4 col-xl-7 remove-padding">
				<nav class="navbar navbar-expand-xl navbar-light">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				 	 </button>
					<div class="collapse navbar-collapse" aria-expanded="false" id="navbarNav">
						<?php
						    echo str_replace( 'class="menu-item', 'class="nav-item menu-item',
						        wp_nav_menu(
						            array(
						                'theme_location'    => 'primary',
						                'menu_id' 			=> 'primary-menu',
						                'container'         => false,
						                'items_wrap'        => '<ul class="navbar-nav mr-auto">%3$s</ul>',
						                'depth'             => 1,
						                'echo'              => false
						            )
						        )
						    );
						?>
					</div>
				</nav>
			</div>
			<div id="social" class="widget-top col-sm-12 col-md-4 col-lg-4 col-xl-2 remove-padding">
				<?php 
					if ( is_active_sidebar( 'header-top' ) ) {
						dynamic_sidebar( 'header-top' );
					};
				?>
			</div>
		</div><!-- Row -->
	</div><!-- Container -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
