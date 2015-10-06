<?php
/**
 * Template Name: Blog Posts
 * @package WordPress
 */

$search = @$_GET['s'];

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
                <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
            </div>
        </div>

        <div class="container">
            <article>
                <header class="center">
                    <h2>Blog</h2>

                    <div class="search">
                        <form action="<?php bloginfo('url') ?>/blog/"" method="get">
                        <label for="search">Search</label>
                        <input type="text" id="search" name="s" placeholder="Enter what you are loooking for..."
                               value="<?php echo htmlspecialchars(get_query_var('s'))?>"/>
                        <input type="submit" value="Search">
                        <input type="hidden" value="post" name="post_type" id="post_type"/>
                        </form>
                    </div>
                </header>
                <section class="content">
                    <ul class="categories">
                        <?php
                        $args = array(
                            'show_option_all'    => __( 'All' ),
                            'orderby'            => 'name',
                            'order'              => 'ASC',
                            'style'              => 'list',
                            'show_count'         => 0,
                            'hide_empty'         => 1,
                            'use_desc_for_title' => 1,
                            'child_of'           => 0,
                            'feed'               => '',
                            'feed_type'          => '',
                            'feed_image'         => '',
                            'exclude'            => '3,4',
                            'exclude_tree'       => '',
                            'include'            => '',
                            'hierarchical'       => 1,
                            'title_li'           => null,
                            'show_option_none'   => __( '' ),
                            'number'             => null,
                            'echo'               => 1,
                            'depth'              => 0,
                            'current_category'   => 0,
                            'pad_counts'         => 0,
                            'taxonomy'           => 'category',
                            'walker'             => null
                        );
                        wp_list_categories( $args );
                        ?>
                        <!--                        <li class="current-cat"><a href="#" title="">Search</a></li>-->
                        <!--                        <li><a href="#" title="">People</a></li>-->
                    </ul>
                    <ul class="posts">
                        <?php
                            global $query_string;
                            query_posts($query_string . '&cat=-3,-4');
                        ?>

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
                <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
            </article>
        </div>

    </main>
<script>
    $(function() {
        $('li.cat-item-all').addClass('current-cat');
    });
</script>
<?php get_footer(); ?>