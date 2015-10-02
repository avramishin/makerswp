<?php
/**
 * Template Name: Join Us - Career
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
          <li><a href="<?php bloginfo('url') ?>/join-us-investor/">Investor</a></li>
          <li><a href="<?php bloginfo('url') ?>/join-us-founder/">Founder</a></li>
          <li class="active"><a href="<?php bloginfo('url') ?>/join-us-career/">Career</a></li>
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
        <h4>Be smart</h4>
        <h2>Develop your ideas and shape the future</h2>
        <p>MAKERS offers an incredible package of technological expertise, all-round support and great terms all in exchange for your presence and open mind. We know that ideas gain bits and pieces as they bounce, and we cannot wait to hear about your exciting new project! Apply today and start acting on your ideas.</p>
      </section>
    </article>
  </div>

  <div class="bottom-quote">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bottom-quote-marius-schulze.jpg" alt="">
    <div class="bottom-quote-text">
      <div class="container right">
        <h2>
        <span>„“</span><br />
        Let's join our forces to build<br />products that people love.            </h2>
        <p>
          Benjamin Libor<br />
        Founder Labs            </p>
      </div>
    </div>
  </div>

  <div class="container">
    <article>
      <header class="center">
        <h2>Jobs</h2>
        <div class="search">
          <form action="<?php bloginfo('url') ?>/join-us-career/" method="get">
            <label for="search">Search</label>
            <input type="text" id="search" name="s" placeholder="Enter what you are loooking for..." value="">
            <input type="submit" value="Search">
            <input type="hidden" value="jobs" name="post_type" id="post_type" />
          </form>
        </div>
      </header>
      <section class="content">
        <ul class="categories">
          <li class="active"><a href="#" title="All">All</a></li>
          <li><a href="#" title="Big Data">Big Data</a></li>
          <li><a href="#" title="Education">Education</a></li>
        </ul>
        <ul class="posts jobs">
          <li>
            <div class="table">
              <div class="table-cell">
                <a href="#" title="Business Development Manager International">
                  <h4>Business Development Manager International</h4>
                  <p class="post-job-category">
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/big-data/" rel="tag">Big Data</a>
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/education/" rel="tag">Education</a>
                  </p>
                </a>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <a href="#" title="Business Development Manager International">
                  <h4>Business Development Manager International</h4>
                  <p class="post-job-category">
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/big-data/" rel="tag">Big Data</a>
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/education/" rel="tag">Education</a>
                  </p>
                </a>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <a href="#" title="Business Development Manager International">
                  <h4>Business Development Manager International</h4>
                  <p class="post-job-category">
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/big-data/" rel="tag">Big Data</a>
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/education/" rel="tag">Education</a>
                  </p>
                </a>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <a href="#" title="Business Development Manager International">
                  <h4>Business Development Manager International</h4>
                  <p class="post-job-category">
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/big-data/" rel="tag">Big Data</a>
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/education/" rel="tag">Education</a>
                  </p>
                </a>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <a href="#" title="Business Development Manager International">
                  <h4>Business Development Manager International</h4>
                  <p class="post-job-category">
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/big-data/" rel="tag">Big Data</a>
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/education/" rel="tag">Education</a>
                  </p>
                </a>
              </div>
            </div>
          </li>
          <li>
            <div class="table">
              <div class="table-cell">
                <a href="#" title="Business Development Manager International">
                  <h4>Business Development Manager International</h4>
                  <p class="post-job-category">
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/big-data/" rel="tag">Big Data</a>
                    <a href="http://negoto.tvatteriet.se/join-us/career-category/education/" rel="tag">Education</a>
                  </p>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </article>
  </div>

</main>
<?php get_footer(); ?>