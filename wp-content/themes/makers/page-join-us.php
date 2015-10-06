<?php
/**
* Template Name: Join Us
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
          <li><a href="<?php bloginfo('url') ?>/join-us-career/">Career</a></li>
        </ul>
      </nav>
      <?php include __DIR__ . "/common/sub-nav-newsletter.php";?>
    </div>
  </div>

  <div class="container">
    <article>
      <section class="content">
        <h4>Join us</h4>
        <h2>What we are offering</h2>
        <p>We create heterogeneous founding teams, connect you to a network of angel &amp; seed investors, build a complete prototype with market traction, enable coaching &amp; guidance by experienced experts and offer a salary plus a major equity stake.</p>
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
    <div>
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
        <h2 style="text-align: center;">Whom we are looking for</h2>
        <ul class="list-3">
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-number-one.png" alt="icon-cloud" width="56" /></p>
            <p style="text-align: center;">Entrepreneurial people</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-number-two.png" alt="icon-cloud" width="56" /></p>
            <p style="text-align: center;">Out-of-the-box thinkers</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-number-three.png" alt="icon-cloud" width="56" /></p>
            <p style="text-align: center;">Hands-on doers</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-number-four.png" alt="icon-cloud" width="56" /></p>
            <p style="text-align: center;">Inspiring leaders</p>
          </li>
          <li>
            <p style="text-align: center;"><img class="aligncenter wp-image-115 size-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon-number-five.png" alt="icon-cloud" width="56" /></p>
            <p style="text-align: center;">And people who never liked making coffee</p>
          </li>
        </ul>
      </section>
    </article>
  </div>

  <!--<div class="quote">
    <div class="quote-picture">
      <img src="/images/quote-freidrich-neumann.jpg" alt="">
      <div>
        <p>Management</p>
        <h4>Freidrich Neumann,</h4>
        <h5>CEO/Founder</h5>
      </div>
    </div>
    <div class="quote-text">
      <h2>
        <span>„“</span><br />
        Always be yourself, express yourself, have faith in yourself, do not go out and look for a successful personality and duplicate it.
      </h2>
      <p>
        Freidrich Neumann<br />
        Founder Makers
      </p>
    </div>
  </div>-->
  
  <div class="bottom-quote">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bottom-quote-founder-group.jpg" alt="">
    <div class="bottom-quote-text">
      <div class="container right">
        <h2>
        <span>„“</span>
        <br />
          Join us and become a<br>true Maker.
        </h2>
        <p>
          Founders
          <br />
          Makers
        </p>
      </div>
    </div>
  </div>

  <div class="map"><h3>Where to find us?</h3><div id="map_canvas"></div></div>

  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script>
    var visitUsMap = (function () {
      var myLatlng = new google.maps.LatLng(52.532718, 13.398027),
          mapCenter = new google.maps.LatLng(52.532718, 13.398027),
          mapCanvas = document.getElementById('map_canvas'),
          mapOptions = {
            center: mapCenter,
            zoom: 13,
            scrollwheel: false,
            draggable: true,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          },
          map = new google.maps.Map(mapCanvas, mapOptions),
          contentString =
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Makers</h1>'+
            '<div id="bodyContent"'+
            '<p>Invalidenstraße 11, 10115 Berlin, Germany</p>'+
            '</div>'+
            '</div>',
          infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 300
          }),
          marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Makers (Berlin, Germany)'
          });

      return {
        init: function () {
          map.set('styles', [{
            featureType: 'landscape',
            elementType: 'geometry',
            stylers: [
              { hue: '#ffff00' },
              { saturation: 30 },
              { lightness: 10}
            ]}
          ]);

          google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map,marker);
          });
        }
      };
    }());

    visitUsMap.init();
  </script>

</main>
<?php get_footer(); ?>