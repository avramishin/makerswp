<?php
/**
 * Template Name: Blog Posts
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
                <header class="center">
                    <h2>Blog</h2>

                    <div class="search">
                        <form action="http://negoto.tvatteriet.se/blog/" method="get">
                            <label for="search">Search</label>
                            <input type="text" id="search" name="s" placeholder="Enter what you are loooking for..."
                                   value="">
                            <input type="submit" value="Search">
                            <input type="hidden" value="post" name="post_type" id="post_type"/>
                        </form>
                    </div>
                </header>
                <section class="content">
                    <ul class="categories">
                        <li class="current-cat"><a href="#" title="">All</a></li>
                        <li><a href="#" title="">People</a></li>
                    </ul>
                    <ul class="posts">
                        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged=' . get_query_var('paged')); ?>

                        <?php if (have_posts()): ?>

                            <?php while (have_posts()): the_post(); ?>

                                <li id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>

                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                    <?php the_excerpt(__('...','example')); ?>

                                </li><!-- /#post-<?php get_the_ID(); ?> -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </section>
            </article>
        </div>

    </main>
<?php get_footer(); ?>