<?php
/**
 *  Template part for displaying a message that posts cannot be found
 */

?>

<section class="no-results not-found">

    <?php if (! is_search() ): ?>
        <header class="page-header">
            <h1 class="page-title"><?php _e( 'Nothing Found', "bnw-theme" ); ?></h1>
        </header>
	<?php endif; ?>
	
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
		?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', "bnw-theme" ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', "bnw-theme" ); ?></p>
			<?php
				get_search_form();

		endif;
		?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
