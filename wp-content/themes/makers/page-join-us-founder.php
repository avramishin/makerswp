<?php
/**
 * Template Name: Join Us - Founder
 * @package WordPress
 */
get_header(); ?>
    <main>

    <div class="hero">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hero.jpg" alt="">

        <div class="overlay"></div>
        <div class="texture"></div>
        <div class="hero-inner">
            <h2>Our community is our strength.</h2>

            <p>Makers innovates through collaboration and hard work.</p>
        </div>
    </div>

    <div class="sub-navigation">
        <div class="sub-navigation-inner">
            <nav>
                <ul class="sub-navigation-menu">
                    <li><a href="<?php bloginfo('url') ?>/join-us-investor/">Investor</a></li>
                    <li class="active"><a href="<?php bloginfo('url') ?>/join-us-founder/">Founder</a></li>
                    <li><a href="<?php bloginfo('url') ?>/join-us-career/">Career</a></li>
                </ul>
            </nav>
            <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
        </div>
    </div>

    <div class="container">
        <article>
            <section class="content">
                <h4>Be smart</h4>

                <h2>Develop your ideas and shape the future</h2>

                <p>MAKERS offers an incredible package of technological expertise, all-round support and great terms all
                    in exchange for your presence and open mind. We know that ideas gain bits and pieces as they bounce,
                    and we cannot wait to hear about your exciting new project! Apply today and start acting on your
                    ideas.</p>
            </section>
        </article>
    </div>

    <div class="bottom-quote">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bottom-quote-benjamin-libor.jpg" alt="">

        <div class="bottom-quote-text">
            <div class="container right">
                <h2>
                    <span>„“</span><br/>
                    Let's join our forces to build<br/>products that people love. </h2>

                <p>
                    Benjamin Libor<br/>
                    Founder Labs </p>
            </div>
        </div>
        <h3>Interested in the MAKERS Group. Benjamin Libor is your contact person.</h3>
    </div>

    </main>
<?php get_footer(); ?>