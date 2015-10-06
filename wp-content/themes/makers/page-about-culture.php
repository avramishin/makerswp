<?php
/**
 * Template Name: About Culture
 * @package WordPress
 */
get_header(); ?>
  <main class="about-culture">

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
          <li class="active"><a href="<?php bloginfo('url') ?>/about-culture/">Culture</a></li>
          <li><a href="<?php bloginfo('url') ?>/about-team/">Team</a></li>
          <li><a href="<?php bloginfo('url') ?>/about-process/">Process</a></li>
        </ul>
      </nav>
        <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
    </div>
  </div>

  <div class="container">
    <article>
      <section class="content">
        <h2 style="text-align: center;">6 principles that makes you a Maker</h2>
        <ul class="list-3">
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-message.png" alt="icon-message" height="45px" width="45px" /></p>
            <p style="text-align: center;">Be a team player. Share, help and communicate</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-chemistry.png" alt="icon-chemistry" height="45px" width="45px" /></p>
            <p style="text-align: center;">Innovate through experimentation</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-thumbsup.png" alt="icon-thumbsup" height="45px" width="45px" /></p>
            <p style="text-align: center;">Do the right thing right</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-lightbulb.png" alt="icon-lightbulb" height="45px" /></p>
            <p style="text-align: center;">Challenge the status quo</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-heart.png" alt="icon-heart" height="45px" width="45px" /></p>
            <p style="text-align: center;">Build products that people love</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-star.png" alt="icon-star" height="45px" width="45px" /></p>
            <p style="text-align: center;">We get things done</p>
          </li>
        </ul>
      </section>
    </article>
  </div>

  <div class="grid">
    <div class="desktop-only">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-1.jpg" alt="">
    </div>
    <div class="grid-item-wide">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-2.jpg" alt="">
    </div>
    <div class="desktop-only">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-3.jpg" alt="">
    </div>
    <div class="desktop-only">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-4.jpg" alt="">
    </div>
    <div class="desktop-only">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-text.png" alt="">
      <div class="grid-text">
        <div class="table">
          <div class="table-cell">
            <h3>We get it done.</h3>
            <p>There's a reason we're called Makers</p>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-item-wide">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-5.jpg" alt="">
    </div>
  </div>

  <div class="bottom-container">
    <div class="container">
      <article>
        <section class="content">
          <h4>Location</h4>
          <h2>Many people have asked us why we focus on Berlin and highlighted at the opportunities elsewhere, with more talents and capitals.</h2>
          <p>Granted, but companies like SoundCloud, Rocket Internet, ResearchGate, Wunderlist and Wooga have already attracted big VC firms and proven that Berlin is more than capable of building great products and services that can conquer the world. We also believe in the superpower of a relatively small, yet compact network of talented individuals when properly nurtured. And yes, Berlin certainly possesses plenty of comparative strengths to boast about: lower costs, the explosive creative energy of the European creative hub, not to mention the Europe's most pulsating nightlife and relaxed lifestyle.</p>
        </section>
      </article>
    </div>
  </div>

</main>
<?php get_footer(); ?>