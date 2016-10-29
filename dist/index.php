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
        <section id="hero" class="hero">
            <div class="hero__image"></div>
            <div class="hero__caps">
                <h3 id="hero-text" >Hagamos una vaca</h3>
                <p>Por las hallacas</p>
             </div>
            <div class="hero__btn">
                <span>Enterate aqui</span>
            </div>

        </section>

 <!--Ayuda-->

        <section class="ayuda">
            <header>
                <h3>Queremos ayudarte</h3>
            </header>
                <span>0800-soyagro</span>
            <div id="panels" class="panels">
                <div class="panel-item"><a href="#">Cursos</a></div>
                <div class="panel-item"><a href="#">Acompañamientos</a></div>
                <div class="panel-item"><a href="#">Herramientas</a></div>
                <div class="panel-item"><a href="#">Semillas</a></div>
            </div>
        </section>
 <!--Videos-->
        <section class="videos" id="videos-minppau">
        <h3>Lo que estamos haciendo</h3>
            <div class="video-cont">
                <div class="video-list">
                    <h4>Más Videos</h4>
                    <div class="video-item"><a href="#">Video 1</a>a</div>
                    <div class="video-item"><a href="">Video 2</a>a</div>
                    <div class="video-item"><a href="">Video 3</a>a</div>
                </div>
                <div class="video-disp">
                    <img src="http://satyr.io/1200x16:9" alt="">
                </div>
            </div>
        </section>
 <!--Prensa-->
        <section class="prensa">
            <h3>Notas de prensa</h3>
            <div class="news-list">
                <div class="news-item">
                    <img src="http://satyr.io/1200x16:9" alt="">
                        <h2>Sit impedit dolor.</h2>
                    <p>Elit lorem perspiciatis neque debitis aliquam in vel, ipsa. Libero unde minus quae et quam est sequi libero voluptates. Dicta.</p>
                </div>
                <div class="news-item">
                    <img src="http://satyr.io/1200x16:9" alt="">
                    <h2>Sit eos similique.</h2>
                    <p>Sit dolore facere quam aliquam praesentium esse dignissimos eos reiciendis beatae itaque explicabo sapiente sapiente. Impedit a similique possimus nostrum.</p>
                </div>
                <div class="news-item">
                    <img src="http://satyr.io/1200x16:9" alt="">
                    <h2>Lorem a pariatur.</h2>
                    <p>Ipsum laudantium excepturi saepe nihil quasi ab. Numquam similique corrupti magnam unde ducimus. Similique totam obcaecati autem corporis nulla. Consequatur.</p>
                </div>
            </div>
        </section>
 <!--Prensa-->
        <section class="newsletter">
                    <div class="newsletter-cont">
                        <h4>¿Quieres seguir de cerca la actividad del MinPPau?</h4>
                        <form action="">
                            <input id="newsletter-mail" type="text" name="newsletter">
                            <input type="button" value="Enviar">
                        </form>
                    </div>
        </section>


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
