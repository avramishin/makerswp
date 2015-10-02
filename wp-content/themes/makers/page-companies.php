<?php
/**
 * Template Name: Companies
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
        <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
    </div>
  </div>

  <div class="container">
    <article>
      <header>
        <h2>What we have built so far</h2>
        <p>We at Makers most often invest in web/mobile applications with clear monetization models. These are some of the companies we have built so far.</p>
      </header>
      <section class="content">
        <ul class="company-type">
          <li class="active">
            <a href="#" title="All">All</a>
          </li>
        </ul>
        <ul class="companies-grid list-3">
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <img width="210" height="74" src="http://negoto.tvatteriet.se/wp-content/uploads/2015/09/cashboard-210x74.png" class="attachment-company-logo wp-post-image" alt="cashboard" /><p>Lorem ipsum</p>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </article>
  </div>

</main>
<?php get_footer(); ?>