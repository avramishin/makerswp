<?php
/**
 * Template Name: Blog Posts
 * @package WordPress
 */

$search = @$_GET['s'];

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
                <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
            </div>
        </div>

        <div class="container">
            <article>
                <header class="center">
                    <h2>Blog</h2>
                </header>
<!--                <section class="section-categories">-->
<!--                    <ul class="blog-categories">-->
<!--                        <li class="cat-item current-cat" data-category="all">-->
<!--                            <a class="name" href="javascript: void(0)">All</a>-->
<!--                        </li>-->
<!--                        --><?php
//                        $cat = get_query_var('cat');
//
//                        foreach(get_categories('parent=0&exclude=3,4') as $category) {
//                            echo '<li class="cat-item" data-category="' . $category->slug . '"><a class="name" href="javascript: void(0)">' . htmlspecialchars($category->name).'</a></li>';
//                        }
//                        ?>
<!--                    </ul>-->
<!--                </section>-->
                <section class="content">
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
<!--<script>-->
<!--    $(function() {-->
<!--        $('ul.blog-categories > li').click(function() {-->
<!--            var el = this;-->
<!--            $('ul.blog-categories > li').removeClass('current-cat');-->
<!--            $(el).addClass('current-cat');-->
<!--            var slug = $(el).attr('data-category');-->
<!--            if (slug == 'all') {-->
<!--                $('ul.posts > li').removeClass('hidden');-->
<!--                return;-->
<!--            }-->
<!--            var cls = 'category-' + slug;-->
<!--            $('ul.posts > li').addClass('hidden');-->
<!--            $('ul.posts > li.' + cls).removeClass('hidden');-->
<!--        });-->
<!--    });-->
<!--</script>-->
<?php get_footer(); ?>
