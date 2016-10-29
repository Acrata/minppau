<?php get_header(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <div class="header--single--img" style="background:url(<?php echo the_post_thumbnail_url(); ?>
) fixed center; background-size:cover; height:30vh;"></div>			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php //the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
<div class="page-wrapper">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
