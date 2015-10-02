<?php
/**
 * Template Name: Blog Post
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
                <div class="sub-nav-newsletter">
                    <label for="email">Don't miss our news</label>
                    <input type="email" id="email" placeholder="E-mail address in here">
                    <input type="submit" value="Sign up">
                </div>
            </div>
        </div>

        <div class="container">
            <article>
                <?php while (have_posts()) : the_post(); ?>
                    <header class="center">
                        <h2><?php the_title() ?></h2>
                    </header>
                    <section class="content">
                        <?php
                        the_content();
                        ?>
                    </section>
                <?php endwhile; ?>

            </article>
        </div>

    </main>
<?php get_footer(); ?>