<?php include('_header.php'); ?>

<main>

  <div class="hero">
    <img src="/images/hero.jpg" alt="">
    <div class="overlay"></div>
    <div class="texture"></div>
    <div class="hero-inner">
      <h2>Our community is our strength.</h2>
      <p>Makers innovates through collaboration and hard work.</p>
    </div>
  </div>

  <div class="sub-navigation">
    <div class="sub-navigation-inner">
      <div class="sub-nav-newsletter">
        <label for="email">Don't miss our news</label>
        <input type="email" id="email" placeholder="E-mail address in here">
        <input type="submit" value="Sign up">
      </div>
    </div>
  </div>

  <div class="container">
    <article>
      <header class="center">
        <h2>Blog</h2>
        <div class="search">
          <form action="http://negoto.tvatteriet.se/blog/" method="get">
            <label for="search">Search</label>
            <input type="text" id="search" name="s" placeholder="Enter what you are loooking for..." value="">
            <input type="submit" value="Search">
            <input type="hidden" value="post" name="post_type" id="post_type" />
          </form>
        </div>
      </header>
      <section class="content">
        <ul class="categories">
          <li class="current-cat"><a href="#" title="">All</a></li>
          <li><a href="#" title="">People</a></li>
        </ul>
        <ul class="posts">
          <li>
            <a href="#" title="Test post 1">
              <img src="/images/dummies/person1.jpg" alt="" />
            </a>
            <p class="post-category"><a href="http://negoto.tvatteriet.se/blog/category/people/" rel="category tag">People</a></p>
            <h3><a href="http://negoto.tvatteriet.se/blog/test-post-1/" title="Test post 1">Test post 1</a></h3>
            <a href="http://negoto.tvatteriet.se/blog/test-post-1/" title="Test post 1">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo [&hellip;]</p>
            </a>
          </li>
          <li>
            <p class="post-category"><a href="http://negoto.tvatteriet.se/blog/category/uncategorized/" rel="category tag">Uncategorized</a></p>
            <h3><a href="http://negoto.tvatteriet.se/blog/hello-world/" title="Hello world!">Hello world!</a></h3>
            <a href="http://negoto.tvatteriet.se/blog/hello-world/" title="Hello world!">
              <p>Welcome to WordPress. This is your first post. Edit or [&hellip;]</p>
            </a>
          </li>
        </ul>
      </section>
    </article>
  </div>

</main>

<?php include('_footer.php'); ?>