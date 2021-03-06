<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage wp foundation
 * @since wp foundation 0.7 
 */

get_header(); ?>

	<div class="row">
		<div class="large-8 columns" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'wp_foundation' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp_foundation' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- .large-8 .columns -->
		
		<div class="large-4 columns">
			<?php get_sidebar(); ?>
		</div><!-- .large-4 .columns -->
	</div><!-- .row -->

<?php get_footer(); ?>