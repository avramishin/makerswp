<?php
/**
 * Template Name: Join Us - Investor
 * @package WordPress
 */

global $post;

$members = array();
$customList = array('website', 'type', 'description');

$args = array('numberposts' => 100, 'category_name' => 'companies');
$posts = get_posts($args);

$categoriesAll = array();
$firstCategory = null;

foreach ($posts as $post) {
    $custom = get_post_custom($post->ID);
    $featuredImageId = get_post_thumbnail_id($post->ID);
    $image = wp_get_attachment_image_src($featuredImageId, array(261, 191));

    $members[$post->ID] = array(
        'id' => $post->ID,
        'name' => $post->post_title,
        'desc' => $post->post_content,
        'image' => isset($image[0]) ? $image[0] : ''
    );

    foreach ($customList as $cfield) {
        $members[$post->ID][$cfield] = isset($custom[$cfield][0]) ? $custom[$cfield][0] : "";
    }

    if (!empty($members[$post->ID]['type'])) {
        $categories = explode(' ', $members[$post->ID]['type']);
        foreach ($categories as $c) {
            $c = trim($c);
            if (!$c) continue;
            if (empty($categoriesAll)) {
                $firstCategory = $c;
            }
            $categoriesAll[$c] = $c;
        }
    }
}

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
                        <li class="active"><a href="<?php bloginfo('url') ?>/join-us-investor/">Investor</a></li>
                        <li><a href="<?php bloginfo('url') ?>/join-us-founder/">Founder</a></li>
                        <li><a href="<?php bloginfo('url') ?>/join-us-career/">Career</a></li>
                    </ul>
                </nav>
                <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
            </div>
        </div>

        <section class="container">
            <article class="article">
                <header>
                    <h1>Invest in the future of technology</h1>
                    <span class="subline">We build highly profitable companies at lowest costs.</span>
                </header>
                <p class="intro">A startup's success is not only based on a great. market-ready product. but also on a complimentary and experienced team. Therefore we are always looking for entrepreneurial talents to join the MAKERS' team. These are our requirements a potential co-founder should meet:</p>
            </article>
        </section><!-- /section.content -->

        <section class="quote">
            <div class="quote-media" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/founder-2.jpg);">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/founder-2.jpg" alt="Founder 2">
            </div>
            <div class="quote-content">
                <blockquote>
                    <p>MAKERS paved our way to success by actively supporting us to become Germany's robo-advisor No. 1 within less than one year.</p>
                    <cite>Robert Henker, <span>CEO/Founder</span></cite>
                </blockquote>
            </div>
        </section><!-- /section.quote -->

        <section class="container">
            <article class="article">
                <header>
                    <h1>Invest in the future of technology</h1>
                    <span class="subline">We build highly profitable companies at lowest costs.</span>
                </header>
                <p class="intro">A startup's success is not only based on a great. market-ready product. but also on a complimentary and experienced team. Therefore we are always looking for entrepreneurial talents to join the MAKERS' team. These are our requirements a potential co-founder should meet:</p>
            </article>
        </section><!-- /section.content -->

        <section class="ratings">
            <div class="rating">
                <div class="rating-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo-1.png" alt="Logo 1">
                </div>
                <div class="rating-facts">
                    <span class="rating-rank">1st</span>
                    <span class="rating-name">Rising Star 2014</span>
                    <span class="rating-meta">Run@Shop</span>
                </div>
            </div>
            <div class="rating">
                <div class="rating-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo-2.png" alt="Logo 2">
                </div>
                <div class="rating-facts">
                    <span class="rating-rank">1st</span>
                    <span class="rating-name">Rising Star 2014</span>
                    <span class="rating-meta">Run@Shop</span>
                </div>
            </div>
            <div class="rating">
                <div class="rating-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo-3.png" alt="Logo 3">
                </div>
                <div class="rating-facts">
                    <span class="rating-rank">1st</span>
                    <span class="rating-name">Rising Star 2014</span>
                    <span class="rating-meta">Run@Shop</span>
                </div>
            </div>
        </section><!-- /section.ratings -->

        <section class="container">
            <article class="article">
                <header>
                    <h1>Our track record</h1>
                    <span class="subline">Some facts and figures that prove our success.</span>
                </header>
                <p class="intro">Did you know startup's success is not only based on a great. market-ready product. but also on a complimentary and experienced team. Therefore we are always looking for entrepreneurial talents to join the MAKERS' team. These are our requirements a potential co-founder should meet:</p>
            </article>
        </section><!-- /section.content -->

        <section class="facts">
            <div class="facts-inner">
                <div class="facts-box">
                    <div class="facts-content">
                        <h2 class="facts-title">Current cumulated revenue of all portfolio companies:</h2>
                        <span class="facts-num">$50<span class="facts-unit">M</span></span>
                        <span class="facts-desc">Wordwide</span>
                    </div>
                </div>
                <div class="facts-box">
                    <div class="facts-content">
                        <h2 class="facts-title">Geographical activities of our portfolio companies:</h2>
                        <ul class="facts-items">
                            <li class="facts-item">
                                <span class="facts-num">75<span class="facts-unit">%</span></span>
                                <span class="facts-desc">Wordwide</span>
                            </li>
                            <li class="facts-item">
                                <span class="facts-num">12,5<span class="facts-unit">%</span></span>
                                <span class="facts-desc">Europe</span>
                            </li>
                            <li class="facts-item">
                                <span class="facts-num">12,5<span class="facts-unit">%</span></span>
                                <span class="facts-desc">Germany</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- /section.facts -->

        <section class="portfolio">
            <div class="container">
                <h2 class="portfolio-headline">Facts and figures for each of our portfolio companies:</h2>
                <ul class="company-type">
                    <li class="active" data-filter="All" ><a href="javascript: void(0)" title="All">All</a></li>
                    <?php foreach ($categoriesAll as $filter=>$title): ?>
                        <li class="" data-filter="<?php echo htmlspecialchars($filter);?>">
                            <a href="javascript: void(0)" title="<?php echo htmlspecialchars(str_replace('-', ' ', $filter));?>"><?php echo htmlspecialchars(str_replace('-', ' ', $filter));?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="companies-grid list-3">
                    <?php foreach ($members as $m): ?>
                    <li class="All <?php echo $m['type'];?>">
                        <div class="table">
                            <div class="table-cell">
                                <a href="<?php echo $m['website'];?>" title="<?php echo $m['name'];?>" target="_blank">
                                    <img width="261" height="191" src="<?php echo $m['image']; ?>" class="attachment-company-logo wp-post-image" alt="<?php echo $m['name'];?>" />
                                    <p><?php echo $m['description']; ?></p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section><!-- /section.portfolio -->

        <div class="bottom-quote">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bottom-quote-freidrich-neumann.jpg" alt="">

            <div class="bottom-quote-text">
                <div class="container">
                    <h2>
                        <span>„“</span><br>
                        We offer you the opportunity to<br>invest not only in a single startup,<br>but in whole
                        ecosystem.
                    </h2>

                    <p>
                        Freidrich Neumann<br>
                        Founder Makers
                    </p>
                </div>
            </div>
            <h3>Interested in the MAKERS Group? Freidrich Neumann is your contact person.</h3>
        </div>

    </main>
    <script>
        $(function() {
            $('ul.company-type > li').click(function() {
                var el = this;
                $('ul.company-type > li').removeClass('active');
                $(el).addClass('active');
                $('ul.companies-grid > li').addClass('hidden');
                var filter = $(el).attr('data-filter');
                $('ul.companies-grid li.' + filter).removeClass('hidden');
            });
        });
    </script>
<?php get_footer(); ?>
