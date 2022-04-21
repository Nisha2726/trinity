<?php get_header(); ?>
<div class="main-container home-container">

<div class="inner-container">

      <section>
        <div class="home-hero-container">
              <video id="Vid" autoplay playsinline muted>
                <source src="<?php bloginfo('template_url'); ?>/videos/trinity_main.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
              </video>
        </div>
      </section>


      <section class="home-what-we-do" id="home-what-we-do">   

        <div class="grid-container">
          <div class="grid-child">
            <div class="grid-child-inner">
              <h1>WHAT WE Do</h1>
              <h2 class="svg-arrow">
                <svg width="21px" height="22px" viewBox="0 0 21 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Trinity_Website_Desktop_Home" transform="translate(-69.000000, -1165.000000)" fill="#F40054">
                      <g id="What-we-Do" transform="translate(0.000000, 902.000000)">
                        <polygon id="Triangle" transform="translate(79.500000, 273.863636) rotate(-270.000000) translate(-79.500000, -273.863636) " points="79.5 263.363636 90.0208132 284.363636 68.9791868 284.363636"></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>Retail Managers + Developers</span>
              </h2>
              <h2 class="svg-arrow">
                <svg width="21px" height="22px" viewBox="0 0 21 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Trinity_Website_Desktop_Home" transform="translate(-69.000000, -1165.000000)" fill="#F40054">
                      <g id="What-we-Do" transform="translate(0.000000, 902.000000)">
                        <polygon id="Triangle" transform="translate(79.500000, 273.863636) rotate(-270.000000) translate(-79.500000, -273.863636) " points="79.5 263.363636 90.0208132 284.363636 68.9791868 284.363636"></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>Residential Managers + Developers</span>
              </h2>
              <h2 class="svg-arrow">
                <svg width="21px" height="22px" viewBox="0 0 21 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Trinity_Website_Desktop_Home" transform="translate(-69.000000, -1165.000000)" fill="#F40054">
                      <g id="What-we-Do" transform="translate(0.000000, 902.000000)">
                        <polygon id="Triangle" transform="translate(79.500000, 273.863636) rotate(-270.000000) translate(-79.500000, -273.863636) " points="79.5 263.363636 90.0208132 284.363636 68.9791868 284.363636"></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>Construction + Design Managers</span>
              </h2>
              <h2 class="svg-arrow">
                <svg width="21px" height="22px" viewBox="0 0 21 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Trinity_Website_Desktop_Home" transform="translate(-69.000000, -1165.000000)" fill="#F40054">
                      <g id="What-we-Do" transform="translate(0.000000, 902.000000)">
                        <polygon id="Triangle" transform="translate(79.500000, 273.863636) rotate(-270.000000) translate(-79.500000, -273.863636) " points="79.5 263.363636 90.0208132 284.363636 68.9791868 284.363636"></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
                <span>Strategic Asset Managers</span>
              </h2>
              <p class="blue-link"><a href="/trinitySite/what-we-do/"><u>LEARN MORE</u></a></p>
            </div>
          </div>
          <div class="grid-child">
            <div class="grid-child-inner">
              <p class="p5">25</p>
              <p class="p4">Years of Experience</p>
              <p class="p5">35+</p>
              <p class="p4">Million Square Feet</p>
              <p class="p5">14</p>
              <p class="p4">New Urban Projects under development</p>
            </div>
          </div>
        </div>
        
      </section>
      


      <section class="home-carousel carousel" id="home-carousel">       
        <div class="grid-container">
          <div class="grid-child">
            <div class="grid-child-inner">
              <div id="splide-vert" class="splide">
              <!-- <div class="splide__progress">
                <div class="splide__progress__bar"></div>
              </div>  -->
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php echo do_shortcode('[featuredproperties]'); ?>
                  </ul>
                  <div class="splide_inner">
                    <div class="splide_inner_copy">
                      <p class="p3">
                        <svg width="46px" height="23px" viewBox="0 0 46 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Trinity_Website_Desktop_Home" transform="translate(-98.000000, -2281.000000)" fill="#88012F">
                              <g id="Feat.-Properties" transform="translate(1.000000, 1669.000000)">
                                <g id="Group-2" transform="translate(97.000000, 0.000000)">
                                  <rect id="Rectangle" x="0" y="612" width="46" height="23"></rect>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <span id="featured_property_location"></span>
                      </p>
                      <span>
                        <svg width="71px" height="23px" viewBox="0 0 71 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Trinity_Website_Desktop_Home" transform="translate(-153.000000, -2327.000000)" fill="#FC0052" fill-rule="nonzero">
                              <g id="Feat.-Properties" transform="translate(1.000000, 1669.000000)">
                                <g id="Group-2" transform="translate(97.000000, 0.000000)">
                                  <path id="Line-8" d="M105.849081,658.457245 L107.156444,659.192637 L123.156444,668.192637 L125.480646,669.5 L123.156444,670.807363 L107.156444,679.807363 L105.849081,680.542755 L104.378297,677.928029 L105.685661,677.192637 L116.694,671 L55.0789474,671 L55.0789474,668 L116.694,668 L105.685661,661.807363 L104.378297,661.071971 L105.849081,658.457245 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-child">
            <div class="grid-child-inner">
              <div class="grid-child-inner-group-wrapper">
                <div class="grid-child-inner-group-space">
                  <h1>FEATURED PROPERTIES</h1>
                </div>


                <p class="p1" id="featured_property_copy"></p>
                <p class="blue-link"><a href="/trinitySite/portfolio/">VIEW ALL</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="home-who-we-are">
          <img src="<?php bloginfo('template_url'); ?>/images/Home_WhoWeAre_BackIMG.jpg"/>
          <div class="inset-content-wrapper">
            <div class="inset-content">
                <h1>WHO WE ARE</h1>
                <p class="p1">The ongoing story of our success continues to make headlines. Learn more about the impact we are making in communities and how our developments represent leading design in our industry.</p>
                <p class="blue-link"><a href="/trinitySite/who-we-are"><u>LEARN MORE</u></a></p>
            </div>
            <div class="grid-container">
            <!-- <?php echo do_shortcode('[featurednews]'); ?>
            </div>
            <div class="vertical-copy">
              <h1>FEATURED NEWS</h1>
            </div>
          </div>
          <p class="blue-link"><a href="/trinitySite/news/">VIEW ALL</a></p> -->

      </section>

    </div>

 
<?php get_sidebar(); ?>
<?php get_footer(); ?>




<script>
  var v = document.getElementById("Vid");
  v.autoplay = true;
  v.load();

  // Hiding the scroller while video is playing
  // v.onplaying = function() {
  //     document.body.style.overflow = 'hidden';
  // };
  v.onended = function() {
  $('html,body').animate({
      scrollTop: $("#home-carousel").offset().top - 60
  },2000);
 
    
  };


  </script>