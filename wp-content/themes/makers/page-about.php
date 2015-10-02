<?php
/**
* Template Name: About
* @package WordPress
*/
get_header(); ?>
<main class="about">

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
          <li><a href="<?php bloginfo('url') ?>/about-team/">Team</a></li>
          <li><a href="<?php bloginfo('url') ?>/about-process/">Process</a></li>
        </ul>
      </nav>
      <div class="sub-nav-newsletter">
        <label for="email">Don't miss our news</label>
        <input type="email" id="email" placeholder="E-mail address in here">
        <input type="submit" value="Sign up">
      </div>
    </div>
  </div>

  <div class="container">
    <article>
      <section class="content">
        <h4>Mission</h4>
        <h2>Building next generation tech companies</h2>
        <p>Makers strives to be different. We at Makers strongly believe that innovation doesn’t happen by chance. Disruptive products and services are always designed by outstanding teams and founders don’t hesitate to challenge the status quo. Our vision is to provide a platform for entrepreneurs to think ahead and develop products that create true value.</p>
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
    <div>
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-4.jpg" alt="">
    </div>
    <div>
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-text.png" alt="">
      <div class="grid-text">
        <div class="table">
          <div class="table-cell">
            <h3>We get it done.</h3>
            <p>There's a reason we're called Makers.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="grid-item-wide desktop-only">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/grid/about-grid-5.jpg" alt="">
    </div>
  </div>

  <div class="container">
    <article>
      <section class="content">
        <h4>Mission</h4>
        <h2>Makers is your partner in crime</h2>
        <p>Ideas and people are our most valuable assets. At Makers collaboration happens through mutual respect and support, so that ideas can develop and people flourish. Being a part of Makers you will benefit from decades of experiences and expertise. Bring your ideas to life, work with like-minded people, forge strategic partnerships and write your own success story.
At the end of the day, we share the same mission: develop products that people love.</p>
        <ul class="about-grid">
          <li>
            <div class="table">
              <div class="table-cell">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-eco-system.svg" alt="">
                <h4>Eco System</h4>
                <p>The Makers ecosystem allows you to focus on your vision.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-experts.svg" alt="">
                <h4>Experts/<br />Entrepreneurs</h4>
                <p>Our community of experts and entrepreneurs act as your partners in crime.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-bootstrapping.svg" alt="">
                <h4>Bootstrapping</h4>
                <p>Makers follows a super-lean, iterative approach of company building.</p>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </article>
  </div>
</main>
<?php get_footer(); ?>
