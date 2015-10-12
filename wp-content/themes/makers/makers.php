<?php
/**
 * Template Name: Makers
 * @package WordPress
 */
get_header(); ?>
<main class="process-makers">

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
        <h2>Two Steps to Grow</h2>
      </header>
    </article>
  </div>

  <div id="build" class="grid process">
    <div class="process-build grid-item-wide">
      <h3>1. Build</h3>
      <div class="process-content">
        <h4>Explenation of the word like in some kind of dictionary</h4>
        <p>
          Once an idea has been tested successfully, we start looking for the right people. This may be a combination of external founders, Makers experts and new recruits with complementary skill sets. While recruiting may be time-consuming for others, Makers' dedicated HR experts and network of founders can accelerate this process dramatically. Founders are entitled to a major equity stake as well as a monthly salary. Founders are a significant part of the Makers community from day one. They get space in our office in Berlin-Mitte and are supported by our team of experts. We nurture their creativity, support their ideas and encourage collaboration.
          <br>
          <br>
          Our experience with building highly profitable companies such as Run a Shop and IconPeak convinced us of the power of bootstrapping. Making things work at low cost can test the commitment of the founders and the potential of the idea. For that reason, we encourage and enable our portfolio companies to gain user traction and first revenues before they approach potential investors.
        </p>
      </div>
    </div>
    <div class="grid-item-wide">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-3.jpg" alt="" />
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-3.jpg" alt="" />
    </div>
  </div>
  <div id="scale" class="grid process">
    <div class="grid-item-wide">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-4.jpg" alt="" />
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-4.jpg" alt="" />
    </div>
    <div class="process-scale grid-item-wide">
      <h3>2. Scale</h3>
      <div class="process-content">
        <h4>Explenation of the word like in some kind of dictionary</h4>
        <p>
          With Benjamin Libor, Felipe Ogibowski, Friedrich A. Neuman and Marius Schulze, Makers is managed by experienced entrepreneurs who have successfully (co-)founded market-leading companies on their own. Even established startups can benefit from their network of investors and business partners as well as from their depth of experiences.
          <br>
          <br>
          Acting as partners in crime, we support founders of our portfolio companies to scale their business in various ways:  They benefit from strategic guidance in fundraising, legal issues or human resources processes, as well as our expertise and insights.
          <br>
          <br>
          Having built companies such as BidderPlace, Run a Shop or IconPeak which are active in more 20 countries on four continents, we have outstanding knowledge in internationalizing and adapting existing business models too.
        </p>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>
