<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<main>
    <div class="hero">
        <img width="1440" height="750" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero-home.jpg" alt="Makers">
        <div class="overlay"></div>
        <div class="texture"></div>
        <div class="hero-inner">
            <h2>Europe's product-centric company builder</h2>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/about.php" class="button">Learn more about it</a>
        </div>
    </div>

    <div class="main-actions">
        <ul>
            <li>
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>//join-us.php" title="Want to start a company?">
                    <div class="table-cell">
                        <p>Entrepreneurs/Founder</p>
                        <h4>Start acting on your ideas!</h4>
                        <i class="arrow arrow-right"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/join-us.php" title="You want to invest?">
                    <div class="table-cell">
                        <p>Investors</p>
                        <h4>Invest in the future of digital!</h4>
                        <i class="arrow arrow-right"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/join-us.php" title="You want to join the team?">
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

    <div class="grid">
        <div class="labs">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-labs.jpg" alt="">
            <div class="overlay"></div>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/labs.php" title="">
                <div class="table">
                    <div class="table-cell">
                        <h3>Labs</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="makers">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-makers.jpg" alt="">
            <div class="overlay"></div>
            <a href="makers.php" title="">
                <div class="table">
                    <div class="table-cell">
                        <h3>Makers</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="identify hover-item">
            <a href="#" title="">
                <div class="icon">
                    <div class="table">
                        <div class="table-cell">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-identify.svg" alt="">
                            <h4>1. Identify</h4>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="table">
                        <div class="table-cell">
                            <strong>Looking for the one good idea</strong><br />
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            <p class="more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="test hover-item">
            <a href="#" title="">
                <div class="icon">
                    <div class="table">
                        <div class="table-cell">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-test.svg" alt="">
                            <h4>2. Test</h4>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="table">
                        <div class="table-cell">
                            <strong>Looking for the one good idea</strong><br />
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            <p class="more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="build hover-item">
            <a href="#" title="">
                <div class="icon">
                    <div class="table">
                        <div class="table-cell">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-build.svg" alt="">
                            <h4>3. Build</h4>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="table">
                        <div class="table-cell">
                            <strong>Looking for the one good idea</strong><br />
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            <p class="more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="scale hover-item">
            <a href="#" title="">
                <div class="icon">
                    <div class="table">
                        <div class="table-cell">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/action-scale.svg" alt="">
                            <h4>4. Scale</h4>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="table">
                        <div class="table-cell">
                            <strong>Looking for the one good idea</strong><br />
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            <p class="more">
                                <span>Read more</span>
                                <i class="arrow arrow-icon-red"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>
