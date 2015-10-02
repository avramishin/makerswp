<?php
/**
 * Template Name: About Team
 * @package WordPress
 */
get_header(); ?>
<main>

  <div class="hero">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero.jpg" alt="">
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
        <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
    </div>
  </div>

  <div class="container">
    <article>
      <header>
        <h2>Meet the Makers</h2>
        <p>Our team consists of professionals with a wide range of expertise and entrepreneurial minds. And we're in for the same mission: We challenge the status quo and build products that people want and need.</p>
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
          <li>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dummies/person1.jpg" width="524" height="524" alt="">
            <div class="team-hover">
              <div class="table">
                <div class="table-cell">
                  <h4>Test Person</h4>
                  <p>Founder, Co-Founder</p>
                  <p>marius@makers.do</p>
                  <ul class="social">
                    <li class="facebook"><a href="http://www.facebook.com" title="facebook">facebook</a></li>
                    <li class="linkedin"><a href="http://www.linkedin.com" title="linkedin">linkedin</a></li>
                    <li class="twitter"><a href="http://www.twitter.com" title="twitter">twitter</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </article>
  </div>

</main>
<?php get_footer(); ?>