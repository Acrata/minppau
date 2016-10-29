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
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
            <span>Texto que intriduce a la sección</span>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php //the_content(); ?>

<?php $args_tax = array(
	'show_option_all'    => '',
	'show_option_none'   => '',
	'option_none_value'  => '-1',
	'orderby'            => 'ID',
	'order'              => 'ASC',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'child_of'           => 0,
	'exclude'            => '',
	'include'            => '',
	'echo'               => 1,
	'selected'           => 0,
	'hierarchical'       => 0,
	'name'               => 'sedes',
	'id'                 => '',
	'class'              => 'postform',
	'depth'              => 0,
	'tab_index'          => 0,
	'taxonomy'           => 'sedes',
	'hide_if_empty'      => false,
	'value_field'	     => 'term_id',
); ?>

            <div class="contact-social">
                <div class="contact-social-card">
                <div class="social-minppau">
                    <h3>Redes Sociales</h3>
                    <ul>
                        <li><a href=""><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                </div>
                <div class="contact-social-select">
                    <div class="inner-social-select">
                        <h3>¿Donde estas?</h3>
                        <?php wp_dropdown_categories($args_tax); ?>
                        <button><span>Encontrar Sede</span></button>
                    </div>
                </div>
                <div class="contact-social-phone">
                    <div class="inner-social-phone">
                        <h3>Llamanos al</h3>
                        <span class="alpha-dial">0800-soyagro</span>
                        <span class="num-dial">0800-7692476</span>
                    </div>
                </div>
            </div>

                <div class="ciara">
                    <div class="ciara-map">
                        <div class="ciara-map-item">
                            <img src="http://satyr.io/150x200" alt="Mapa">
                        </div>
                        <div class="ciara-map-item">
                        <h3>Fundación ciara</h3>
                        <p>Piso 1- Atención al soberano</p>
                        <p>Av. Mexico, Esquina La Guia.</p>
                        <p>Torre Bellas Artes</p>
                    </div>
                    </div>
                    <div class="ciara-newsletter">
<?php get_sidebar(); ?>
                    </div>

                    <div class="minppau-contact-form">
                    <?php echo do_shortcode('[formidable id=3]')?>
                    </div>
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
</div>
<?php get_footer(); ?>
