<?php
/**
 * Template Name: Join Us - Career
 * @package WordPress
 */
get_header(); ?>
    <main>

        <div class="hero" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero.jpg);">

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
                        <li><a href="<?php bloginfo('url') ?>/join-us-founder/">Founder</a></li>
                        <li class="active"><a href="<?php bloginfo('url') ?>/join-us-career/">Career</a></li>
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

                    <p>MAKERS offers an incredible package of technological expertise, all-round support and great terms
                        all in exchange for your presence and open mind. We know that ideas gain bits and pieces as they
                        bounce, and we cannot wait to hear about your exciting new project! Apply today and start acting
                        on your ideas.</p>
                </section>
            </article>
        </div>

        <div class="bottom-quote">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bottom-quote-marius-schulze.jpg"
                 alt="">

            <div class="bottom-quote-text">
                <div class="container right">
                    <h2>
                        <span>„“</span><br/>
                        Become part of a talented
                        <br>
                        group of Makers.
                    </h2>

                    <p>
                        Marius Schulze<br/>
                        Founder Run a Shop</p>
                </div>
            </div>
        </div>

        <div class="container">
            <article>
                <header class="center">
                    <h2>Jobs</h2>
                </header>
                <section class="content">
                    <div>
                        <!-- Place this exact code where you want the Jobscore job widget to appear on the page.  The widget will expand to the size of the containing div -->
                        <div class='jobscore-jobs' data-group-by='department' >
                            <div class='js-fallback' style='color:#888'><a style='color:#888;text-decoration:underline;' href='https://careers.jobscore.com/jobs/makersdo'>Makers.do jobs</a> powered by <a style='color:#888' href='https://www.jobscore.com/'><img style='padding:0;' align='bottom' src='https://careers.jobscore.com/images/new/jobscore_logo_embed.png' alt='Applicant Tracking, Social Recruiting and Software Hiring Solution - JobScore'></a></div>
                        </div><!-- /jobscore-jobs -->
                    </div>

                </section>
            </article>
        </div>

    </main>
<?php get_footer(); ?>
