<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>

<div class="main-container contact-container">
      <div class="inner-container">

        <section class="contact-hero-container hero-container">
          <img src="<?php bloginfo('template_url'); ?>/images/heros/Contact_Page_Hero.jpg" width="100%" style="display: inline-block;"/>
        </section>


        <section class="contact-grid">
          <div class="grid-container">
            <div class="grid-child">
            <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <img src="<?php bloginfo('template_url'); ?>/images/toronto_map.jpg"/>
                    <br>
                    <br>
                    <p class="p13">TORONTO OFFICE<br><br></p>
                    <p class="p14">77 Bloor Street West, 16th Floor, Suite 1601</p>
                    <p class="p14">Toronto, ON M5S 1M2</p>
                    <br>
                    <p class="p14">t: 416.255.8800</p>
                    <p class="p14">f: 416.255.8355</p>
                    <p class="p14">e: info@trinity-group.com<br><br></p>
                    <p class="p14">f (HR Confidential): 647.245.2320</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <img src="<?php bloginfo('template_url'); ?>/images/ottawa_map.jpg"/>
                    <br>
                    <br>
                    <p class="p13">OTTAWA OFFICE<br><br></p>
                    <p class="p14">359 Kent Street, Suite 400</p>
                    <p class="p14">Ottawa, ON K2P 0R6</p>   
                    <br>
                    <p class="p14">t: 613.565.5864</p>
                    <p class="p14">f: 613.565.6380</p>
                    <p class="p14">e: info@trinity-group.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>