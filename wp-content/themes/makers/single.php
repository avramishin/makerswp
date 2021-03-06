<?php
/**
 * Template Name: Blog Post
 * @package WordPress
 */
get_header(); ?>
    <main class="padding">

        <div class="hero" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero.jpg);">

            <div class="overlay"></div>
            <div class="texture"></div>
            <div class="hero-inner">
                <h2>Our community is our strength.</h2>
                <p>Makers innovates through collaboration and hard work.</p>
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
