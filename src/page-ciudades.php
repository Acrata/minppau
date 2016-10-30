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
<h3>#Ciudades</h3>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="card-politica conucos">
                    <div class="card-icon-container">
                        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/ciudades/conucos.png" alt=""></div>
                        <div class="card-icon-btn"><button>Action</button></div>
                    </div>
                    <div class="card-action">
                        <div class="card-title">
                            <h2>Conucos Escolares</h2>
                        </div>
                        <div class="card-desc">
                        </div>
                        <div class="card-action-btn"><button>Saber más</button></div>
                    </div>
                </div>
                <div class="card-politica convocatoria">
                    <div class="card-icon-container">
                        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/ciudades/convocatorias.png" alt=""></div>
                        <div class="card-icon-btn"><button>Saber más</button></div>
                    </div>
                    <div class="card-action">
                        <div class="card-title">
                            <h2>Convocatoria Pública</h2>
                        </div>
                        <div class="card-desc">
                            <p>21 semanas y 1/2 por las hallacas.</p>
                        </div>
                        <div class="card-action-btn"><button>Saber más</button></div>
                    </div>
                </div>
                <div class="card-politica clap">
                    <div class="card-icon-container">
                        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/ciudades/clap.png" alt=""></div>
                        <div class="card-icon-btn"><button>Action</button></div>
                    </div>
                    <div class="card-action">
                        <div class="card-title">
                            <h2>CLAP</h2>
                        </div>
                        <div class="card-desc">
                            <p>Activación productiva de los CLAP en la
Agricultura Urbana</p>
                        </div>
                        <div class="card-action-btn"><button>Action</button></div>
                    </div>
                </div>
                <div class="card-politica convenios">
                    <div class="card-icon-container">
                        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/ciudades/convenios.png" alt=""></div>
                        <div class="card-icon-btn"><button>Action</button></div>
                    </div>
                    <div class="card-action">
                        <div class="card-title">
                            <h2>Convenios Productivos</h2>
                        </div>
                        <div class="card-desc">
                            <p>Alimento balanceado para animales
a cambio del arrime seguro
de carne en p</p>
                        </div>
                        <div class="card-action-btn"><button>Action</button></div>
                    </div>
                </div>
                <div class="card-politica zamora">
                    <div class="card-icon-container">
                        <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/ciudades/zamora.png" alt=""></div>
                        <div class="card-icon-btn"><button>Action</button></div>
                    </div>
                    <div class="card-action">
                        <div class="card-title">
                            <h2>Red de insumos Zamoranos</h2>
                        </div>
                        <div class="card-desc">
                            <p>Producción de insumos para el
suministro de los productores agrícolas
urbanos</p>
                        </div>
                        <div class="card-action-btn"><button>Action</button></div>
                    </div>
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
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
