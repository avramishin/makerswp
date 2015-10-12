<?php
/**
 * Template Name: Companies
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
      <section class="page-companies">
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
      </section>
    </article>
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