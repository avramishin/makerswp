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

        <section class="container">
            <article class="article">
                <header>
                    <h1>We are looking for outstanding entrepreneurial talents</h1>
                    <p class="subline">That share our vision to build next generation tech companies.</p>
                </header>
                <p class="intro">A startup's success is not only based on a great. market-ready product. but also on a complimentary and experienced team. Therefore we are always looking for entrepreneurial talents to join the MAKERS' team. These are our requirements a potential co-founder should meet:</p>
            </article>
        </section>

        <section class="boxes">
            <div class="container">
                <ul class="">
                    <div class="boxes-row">
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-cloud.png" alt="icon-cloud"> Entrepreneurial minded people</li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-chemistry.png" alt="icon-chemistry"> Out-of-the-box thinkers</li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-thumbsup.png" alt="icon-thumbsup"> Hands-on doers</li>
                    </div>
                    <div class="boxes-row">
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-lightbulb.png" alt="icon-lightbulb"> lnspiring leaders</li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-star.png" alt="icon-star"> People who never liked making coffee </li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-star.png" alt="icon-star"> Pioneers who think big </li>
                    </div>
                </ul>
            </div>
        </section>

        <section class="quote">
            <div class="quote-media" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/founder-1.jpg);">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/founder-1.jpg" alt="Founder 1">
            </div>
            <div class="quote-content">
                <blockquote>
                    <p>MAKERS paved our way to success by actively supporting us to become Germany's robo-advisor No. 1 within less than one year.</p>
                    <cite>Robert Henker, <span>CEO/Founder</span></cite>
                </blockquote>
            </div>
        </section>

        <section class="container">
            <article class="article">
                <header>
                    <h1>We are looking for outstanding entrepreneurial talents</h1>
                    <span class="subline">That share our vision to build next generation tech companies.</span>
                </header>
                <p class="intro">A startup's success is not only based on a great. market-ready product. but also on a complimentary and experienced team. Therefore we are always looking for entrepreneurial talents to join the MAKERS' team. These are our requirements a potential co-founder should meet:</p>
            </article>
        </section>

        <section class="boxes">
            <div class="container">
                <ul class="">
                    <div class="boxes-row">
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-cloud.png" alt="icon-cloud"> Entrepreneurial minded people</li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-chemistry.png" alt="icon-chemistry"> Out-of-the-box thinkers</li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-thumbsup.png" alt="icon-thumbsup"> Hands-on doers</li>
                    </div>
                    <div class="boxes-row">
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-lightbulb.png" alt="icon-lightbulb"> lnspiring leaders</li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-star.png" alt="icon-star"> People who never liked making coffee </li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/icon-star.png" alt="icon-star"> Pioneers who think big </li>
                    </div>
                </ul>
            </div>
        </section>

        <div class="bottom-quote">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bottom-quote-benjamin-libor.jpg" alt="">

            <div class="bottom-quote-text">
                <div class="container right">
                    <h2>
                        <span>„“</span><br>
                        Let's join our forces to build<br>products that people love. </h2>

                    <p>
                        Benjamin Libor<br>
                        Founder Labs </p>
                </div>
            </div>
            <h3>Interested in the MAKERS Group. Benjamin Libor is your contact person.</h3>
        </div>

    </main>
<?php get_footer(); ?>