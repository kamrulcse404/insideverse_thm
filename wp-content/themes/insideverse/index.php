<?php

/**
 * Template Name: home
 **/
get_header();

?>




<!-- ========== Section Banner ========== -->
<section class="section-banner">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.png" alt="">
</section><!-- .section-banner -->


<!-- ========== Section About ========== -->
<section class="section-about">
    <div class="container">
        <div class="about">

            <div class="about__content">
                <div class="about__text-box">
                    <h3 class="heading-tertiary">Welcome to Sid Vishnu's Gaming Universe</h3>
                    <p>Hello! I'm Sid Vishnu, a game designer based in the UK. I’m a narrative designer and story writer I specialize in creating stories and designing games that take players on unforgettable journeys.</p>
                    <p> Here, you'll discover a collection of my projects, each one a blend of captivating stories and interactive gameplay. From epic adventures to intimate experiences, every game is a unique world waiting to be explored.</p>
                    <a href="#portfolio" class="button-btn btn-color-blue-lotus">View My Works</a>
                </div>
                <div class="about__img-box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-img.png" alt="Sidvishnu picture">
                </div>
            </div>

            <div class="services__content">
                <h2 class="heading-secondary color-white">What I Do</h2>
                <div class="border-blue-lotus"></div>

                <div class="services__box">
                    <div class="services__box-item">
                        <h4>Narrative Design</h4>
                        <p>As a narrative designer, I specialize in shaping immersive worlds and compelling stories within games. Let's collaborate to create unforgettable journeys that leave a lasting impact.

                        </p>
                    </div>
                    <div class="services__box-item">
                        <h4>Game Designer</h4>
                        <p>I'm used to working with different teams to translate design ideas into reality. So I've got a solid grasp of design, but I'm also a great team player!</p>
                    </div>
                    <div class="services__box-item">
                        <h4>World Builder</h4>
                        <p>To build a consistent world with unique characters is my container goal every time I want to give life to a new narrative
                            project.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- .section-about -->


<section class="section-portfolio" id="portfolio">
    <div class="container">
        <div class="portfolio">
            <h2 class="heading-secondary color-black">My Portfolio</h2>
            <div class="border-blue-lotus"></div>
            <ul class="portolio-filter">
                <li class="mixitup-control-active" data-filter="all">All</li>
                <li data-filter=".three-d-work">3d Works </li>
                <li data-filter=".game-prototype">Game Prototypes</li>
                <li data-filter=".narrative-works">Narrative Works </li>
            </ul>

            <div class="portfolio__content">
                <div class="portfolio__box">
                    <div class="portfolio__box-item mix three-d-work">
                        <div class="portfolio__text-box">
                            <h4><a href="single-portfolio-name.html">Architectural Marvels: 3D Environments for Virtual Worlds</a></h4>
                            <p>Step into a world where architectural wonders come to life in stunning 3D. Explore intricately detailed buildings, from ancient ruins to futuristic megastructures.</p>
                            <a href="single-portfolio-name.html" class="btn-underline">View Details</a>
                        </div>
                        <div class="portfolio__img-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/portfolio/portfolio-1.png" alt="Portolio image">
                        </div>
                    </div>

                    <div class="portfolio__box-item mix game-prototype">
                        <div class="portfolio__text-box">
                            <h4><a href="single-portfolio-name.html">Architectural Marvels: 3D Environments for Virtual Worlds</a></h4>
                            <p>Step into a world where architectural wonders come to life in stunning 3D. Explore intricately detailed buildings, from ancient ruins to futuristic megastructures.</p>
                            <a href="single-portfolio-name.html" class="btn-underline">View Details</a>
                        </div>
                        <div class="portfolio__img-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/portfolio/portfolio-2.png" alt="Portolio image">
                        </div>
                    </div>

                    <div class="portfolio__box-item mix narrative-works three-d-work">
                        <div class="portfolio__text-box">
                            <h4><a href="single-portfolio-name.html">Architectural Marvels: 3D Environments for Virtual Worlds</a></h4>
                            <p>Step into a world where architectural wonders come to life in stunning 3D. Explore intricately detailed buildings, from ancient ruins to futuristic megastructures.</p>
                            <a href="single-portfolio-name.html" class="btn-underline">View Details</a>
                        </div>
                        <div class="portfolio__img-box">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/portfolio/portfolio-3.png" alt="Portolio image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- .section-portfolio -->


<?php
get_footer();
?>