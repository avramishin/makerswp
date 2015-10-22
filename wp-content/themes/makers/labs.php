<?php
/**
 * Template Name: Labs
 * @package WordPress
 */
get_header(); ?>
<main class="process-labs">

  <div class="sub-navigation">
    <div class="sub-navigation-inner">
        <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
    </div>
  </div>

  <div class="container">
    <article>
      <header class="center">
        <h2>Two Steps to Get Started</h2>
      </header>
    </article>
  </div>

  <div id="identify" class="grid process">
    <div class="process-identify grid-item-wide">
      <h3>1. Identify</h3>
      <div class="process-content">
        <h4>Explenation of the word like in some kind of dictionary</h4>
        <p>
          Did you know that most startups fail during the first six months? The main obstacles here include ineffecient teams, a lack of resources or failure to identify product-market fit. While success/failure of startups is oftentimes beyond our control, we believe the chances of failure should not be a stumbling block that constrains an entrepreneur’s imagination. Instead, we see it as a stepping stone to success.
          <br>
          <br>
          So we built Labs, a lean startup labaratory where ideas materialise through iteration, testing and experimentation. We seek to minimize the financial risks, while maximizing efficiency by cutting down on the feedback cycles. Labs plays a crucial part of Makers by constantly providing new ideas and insights into different markets, as well as connecting entrepreneurs to the company.
          <br>
          <br>
          One of the key questions we ask ourselves is “how can startups minimize the risks of failure?”. So we scrutinize the process of identifying a product/market fit. Once given a go-ahead, however, we execute fearlessly with an iterative, product-oriented approach and stride towards shipping minimum viable products.
        </p>
        <a href="<?php bloginfo('url') ?>/join-us-career/" class="button">See open positions</a>
      </div>
    </div>
    <div class="grid-item-wide">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-1.jpg" alt="" />
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-1.jpg" alt="" />
    </div>
  </div>
  <div id="test" class="grid process">
    <div class="grid-item-wide">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-2.jpg" alt="" />
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/square-2.jpg" alt="" />
    </div>
    <div class="process-test grid-item-wide">
      <h3>2. Test</h3>
      <div class="process-content">
        <h4>Explenation of the word like in some kind of dictionary</h4>
        <p>
          An idea that sounds innovative and convincing in theory may not necessarily work in practice. That is why we believe they should always be complemented by analytics and numbers, although we are advocates of entrepreneurs’ instincts.
          <br>
          <br>
          Our team at Labs consists of product managers, developers, designers as well as marketing managers who are specialists in developing and shipping MVPs. MVPs allow us to test market acceptance for unfledged business ideas, as well as helping us identify room for improvement.
          <br>
          <br>
          With Labs, we are not only able to reduce the risks of investments, but also gain tons of valuable insights through research during the process of development. The early iteration and lean company-building practices definitely set Makers apart others, and enables us to scientifically measure what others can only guess at.
        </p>
        <a href="<?php bloginfo('url') ?>/join-us-career/" class="button">See open positions</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
