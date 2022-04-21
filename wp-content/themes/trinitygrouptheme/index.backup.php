<?php get_header(); ?>

<div class="inner-container">

<div class="hero-container">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Hero_Home.jpg" width="100%" style="display: inline-block;"/>
</div>

<div class="home-what-we-do">
    <div class="flex-container">
        <div class="flex-child pad-l">
          <div class="flex-child-inner">
            <h1>WHAT WE DO</h1>
            <h2 class="svg-arrow">Retail Managers + Developers</h2>
            <h2 class="svg-arrow">Residential Managers + Developers</h2>
            <h2 class="svg-arrow">Construction + Design Managers</h2>
            <h2 class="svg-arrow">Strategic Asset Managers</h2>
            <a href="#">LEARN MORE</a>
          </div>
        </div>
        <div class="flex-child">
          <div class="flex-child-inner">
            <h3>25</h3>
            <h4>Years of Experience</h4>
            <h3>35+</h3>
            <h4>Million Square Feet</h4>
            <h3>14</h3>
            <h4>New Urban Projects under development</h4>
          </div>
        </div>
    </div>
</div>

<div class="home-featured-properties">
    <div class="flex-container">
        <div class="flex-child pad-l">
          <div class="flex-child-inner width-full">
            <div class="splide">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Properties_all_10.png"/>
                  </li>
                  <li class="splide__slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Properties_all_10.png" />
                  </li>
                  <li class="splide__slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Properties_all_10.png"/>
                  </li>
                </ul>
                <div class="splide_inner">
                  <div class="splide_inner_copy">
                    <span class="d-block">sdfsdf</span>
                    <span class="d-block">sdfsdf</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="flex-child">
          <div class="flex-child-inner">
            <h1>FEATURED PROPERTIES</h1>
            <p>In the heart of Toronto’s vibrant King Street West, this brand-new, mixed-use development will be home to over 12,000 SF of flagship retail opportunities, including prime restaurant space. Situated on the southeast corner of King Street West and Bathurst Street, the residential component will include 290 residential units, taking advantage of the impressive 97 walk score for this intersection.</p>
            <a href="#">VIEW ALL</a>
          </div> 
        </div>
    </div>
</div>

<div class="home-who-we-are">
  <div class="home-who-we-are-inset">
    <h1>WHO WE ARE</h1>
    <p>The ongoing story of our success continues to make headlines. Learn more about the impact we are making in communities and how our developments represent leading design in our industry.</p>
    <a href="#">LEARN MORE</a>
    

    <div class="grid-container">
      <?php echo do_shortcode('[categoryposts]'); ?>
    </div>
    <div class="vertical-copy">
      <h1>FEATURED NEWS</h1>
    </div>
  </div>
</div>


</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>




