<?php
/**
 * Template Name: Home page
 * @package WordPress
 */

get_header(); ?>
<main>
    <div class="hero" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero-home.jpg);">
        <div class="overlay"></div>
        <div class="texture"></div>
        <div class="hero-inner">
            <h2>Europe's product-centric company builder</h2>
            <a href="<?php bloginfo('url') ?>/about/" class="button">Learn more about it</a>
        </div>
    </div>

    <div class="main-actions">
        <ul>
            <li>
                <a href="<?php bloginfo('url') ?>/join-us-investor/" title="You want to invest?">
                    <div class="table-cell">
                        <p>Investors</p>
                        <h4>Invest in the future of digital!</h4>
                        <i class="arrow arrow-right"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php bloginfo('url') ?>/join-us-founder/" title="Want to start a company?">
                    <div class="table-cell">
                        <p>Entrepreneurs/Founder</p>
                        <h4>Start acting on your ideas!</h4>
                        <i class="arrow arrow-right"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php bloginfo('url') ?>/join-us-career/" title="You want to join the team?">
                    <div class="table-cell">
                        <p>Jobseekers</p>
                        <h4>Join our revolution!</h4>
                        <i class="arrow arrow-right"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="container">
        <article>
            <header class="center">
                <h4>What are these guys doing?</h4>
                <h2>We turn visions into reality. Makers seeks to build products that people love.</h2>
            </header>
        </article>
    </div>

    <div class="steps">
        <div class="steps-step steps-step--labs">
            <div class="steps-intro">
                <a href="<?php bloginfo('url') ?>/labs/" title="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-labs.jpg" alt="" class="steps-image">
                    <div class="overlay"></div>
                    <h3>Labs</h3>
                </a>
            </div>
            <div class="steps-item">
                <a href="<?php bloginfo('url') ?>/labs/" title="">
                    <div class="steps-icon">
                        <div class="steps-icon-inner">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-identify.svg" alt="">
                            <h4>1. Identify</h4>
                        </div>
                    </div>
                    <div class="steps-text">
                        <div class="steps-text-inner">
                            We scrutinize the process of identifying a product/market fit. We execute fearlessly with an iterative, product-oriented approach and stride towards shipping minimum viable products.
                            <p class="steps-more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="steps-item">
                <a href="<?php bloginfo('url') ?>/labs/" title="">
                    <div class="steps-icon">
                        <div class="steps-icon-inner">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-test.svg" alt="">
                            <h4>2. Test</h4>
                        </div>
                    </div>
                    <div class="steps-text">
                        <div class="steps-text-inner">
                            An idea that sounds innovative and convincing in theory may not necessarily work in practice. That is why we believe they should always be complemented by analytics and numbers, although we are advocates of entrepreneurs’ instincts.
                            <p class="steps-more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="steps-step steps-step--makers">
            <div class="steps-intro">
                <a href="<?php bloginfo('url') ?>/makers/" title="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-makers.jpg" alt="" class="steps-image">
                    <div class="overlay"></div>
                    <h3>Makers</h3>
                </a>
            </div>
            <div class="steps-item">
                <a href="<?php bloginfo('url') ?>/makers/" title="">
                    <div class="steps-icon">
                        <div class="steps-icon-inner">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-build.svg" alt="">
                            <h4>3. Build</h4>
                        </div>
                    </div>
                    <div class="steps-text">
                        <div class="steps-text-inner">
                            Our experience with building highly profitable companies such as Run a Shop and IconPeak convinced us of the power of bootstrapping. Making things work at low cost can test the commitment of the founders and the potential of the idea.
                            <p class="steps-more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="steps-item">
                <a href="<?php bloginfo('url') ?>/makers/" title="">
                    <div class="steps-icon">
                        <div class="steps-icon-inner">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-scale.svg" alt="">
                            <h4>4. Scale</h4>
                        </div>
                    </div>
                    <div class="steps-text">
                        <div class="steps-text-inner">
                            Acting as partners in crime, we support founders of our portfolio companies to scale their business in various ways: They benefit from strategic guidance in fundraising, legal issues or human resources processes, as well as our expertise and insights.
                            <p class="steps-more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
