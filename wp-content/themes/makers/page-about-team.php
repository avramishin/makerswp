<?php
/**
 * Template Name: About Team
 * @package WordPress
 */


global $post;

$members = array();
$customList = array('role', 'email', 'facebook', 'linkedin', 'twitter', 'filterCategory');

$args = array('numberposts' => 10, 'category_name' => 'teammembers');
$posts = get_posts($args);

foreach ($posts as $post) {
    $custom = get_post_custom($post->ID);
    $featuredImageId = get_post_thumbnail_id($post->ID);
    $image = wp_get_attachment_image_src($featuredImageId, array(524, 524));

    $members[$post->ID] = array(
        'id' => $post->ID,
        'name' => $post->post_title,
        'desc' => $post->post_content,
        'image' => isset($image[0]) ? $image[0] : ''
    );

    foreach ($customList as $cfield) {
        $members[$post->ID][$cfield] = isset($custom[$cfield][0]) ? $custom[$cfield][0] : "";
    }
}

# print_r($members);
# exit();

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
                        <li><a href="<?php bloginfo('url') ?>/about-culture/">Culture</a></li>
                        <li class="active"><a href="<?php bloginfo('url') ?>/about-team/">Team</a></li>
                        <li><a href="<?php bloginfo('url') ?>/about-process/">Process</a></li>
                    </ul>
                </nav>
                <?php include __DIR__ . "/common/sub-nav-newsletter.php"; ?>
            </div>
        </div>

        <div class="container">
            <article>
                <header>
                    <h2>Meet the Makers</h2>

                    <p>Our team consists of professionals with a wide range of expertise and entrepreneurial minds. And
                        we're in for the same mission: We challenge the status quo and build products that people want
                        and need.</p>
                </header>
                <section class="content">
                    <ul class="categories">
                        <li class="active">
                            <a href="#" title="All">All</a>
                        </li>
                        <li>
                            <a href="#" title="Founder">Founder</a>
                        </li>
                    </ul>
                    <ul class="posts">
                        <?php foreach ($members as $m): ?>
                            <li class="all <?php echo $m['filterCategory'] ?>">
                                <img src="<?php echo $m['image'] ?>" width="524" height="524" alt="">

                                <div class="team-hover">
                                    <div class="table">
                                        <div class="table-cell">
                                            <h4><?php echo $m['name'] ?></h4>

                                            <p><?php echo $m['role'] ?></p>

                                            <p>
                                                <a href="mailto:<?php echo $m['email'] ?>"><?php echo $m['email'] ?></a>
                                            </p>
                                            <ul class="social">
                                                <li class="facebook"><a href="<?php echo $m['facebook'] ?>"
                                                                        title="facebook">facebook</a></li>
                                                <li class="linkedin"><a href="<?php echo $m['linkedin'] ?>"
                                                                        title="linkedin">linkedin</a></li>
                                                <li class="twitter"><a href="<?php echo $m['twitter'] ?>"
                                                                       title="twitter">twitter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </article>
        </div>

    </main>
<?php get_footer(); ?>