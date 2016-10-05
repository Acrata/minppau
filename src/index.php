<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php //_e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php //get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
 <!--Hero-->
        <section class="hero">
            <div class="hero__image"></div>
            <div class="hero__caps">
                <h3>Hagamos una vaca</h3>
                <p>Por las hallacas</p>
             </div>
            <div class="hero__btn">
                <span>Enterate aqui</span>
            </div>

        </section>

 <!--Ayuda-->

        <section class="ayuda">
                <span>0800-soyagro</span>
            <header>
                <h3>Queremos ayudarte</h3>
            </header>
            <div class="panels">
                <div class="panel-item"><a href="#">Item1</a></div>
                <div class="panel-item"><a href="#">Item2</a></div>
                <div class="panel-item"><a href="#">Item3</a></div>
                <div class="panel-item"><a href="#">Item4</a></div>
            </div>
        </section>
 <!--Videos-->
        <section class="videos">
            <div class="video-cont">
                <div class="video-list">
                    <div class="video-item"><a href="#">Video 1</a>a</div>
                    <div class="video-item"><a href="">Video 2</a>a</div>
                    <div class="video-item"><a href="">Video 3</a>a</div>
                </div>
                <div class="video-disp">
                </div>
            </div>
        </section>
 <!--Prensa-->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
