<?php /* Template Name: Portfolio Template */ ?>
<?php get_header(); ?>



    <div class="main-container portfolio-container">
      <div class="inner-container">

        <section class="portfolio-hero-container">
          
          <img src="<?php bloginfo('template_url'); ?>/images/Community_hero.png" width="100%" style="display: inline-block;"/>
          <h3>
            <svg width="21px" height="22px" viewBox="0 0 21 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Trinity-Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Trinity_Website_Desktop_Home" transform="translate(-69.000000, -1165.000000)" fill="#F40054">
                  <g id="What-we-Do" transform="translate(0.000000, 902.000000)">
                    <polygon id="Triangle" transform="translate(79.500000, 273.863636) rotate(-270.000000) translate(-79.500000, -273.863636) " points="79.5 263.363636 90.0208132 284.363636 68.9791868 284.363636"></polygon>
                  </g>
                </g>
              </g>
            </svg>
            <span>Interactive map</span>
          </h3>
          <div class="inset-content-wrapper">
            <div class="inset-content">
                <h1>PROPERTIES</h1>
                <p class="p1">Rejecting the expected and applying innovative and unique approaches is what truly sets us apart. Every one of Trinity’s projects represents an opportunity to redefine a category and create communities others strive to emulate. We invite you to explore the difference.</p>
            </div>
          </div>

        </section>

        <section class="portfolio-grid"> 

        <div id="search-results">
        </div>

          <div class="grid-container">

              <div class="grid-child">
                <div class="grid-child-inner">
                <?php echo do_shortcode( '[searchandfilter id="255"]' ); ?>
                      

                </div>
              </div>


              <?php
							$args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'category_name' => 'portfolio',
								'posts_per_page' => 6,
							);
							$arr_posts = new WP_Query( $args );
							
							if ( $arr_posts->have_posts() ) :
							
									while ( $arr_posts->have_posts() ) :
											$arr_posts->the_post();
											?>
											<div class="grid-child">
													<div class="grid-child-inner">
                            <div class="portfolio-copy-wrapper">
                              <p class="p8"><?php the_title(); ?></p>
                              <p class="p6"><?php the_field('location'); ?></p>
                            </div>
                            <div class="learn-more-wrapper">
                                <p class="p2"><a href="<?php the_permalink(); ?>">LEARN MORE</a></p>
                            </div>
													<?php
													if ( has_post_thumbnail() ) :
													?>
													<!-- <img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;"> -->
                          <div class="portfolio-block-img" style="url('<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>');"></div>
                          <?php	
													endif;
													?>
                        </div>
											</div>
											<?php
									endwhile;
							endif;
            ?>


             
            </div>
        </section>


        <section class="portfolio-developed-sold-list">
          
          <img src="<?php bloginfo('template_url'); ?>/images/Community_hero.png" width="100%" style="display: inline-block;"/>
          <div class="inset-content-wrapper">
            <div class="inset-content">
              <h1>DEVELOPED & SOLD</h1>
              <div class="list-wrapper">
                <table>
                  <thead>
                    <tr>
                      <th><h1>Site</h1></th>
                      <th><h1>Major Tenants</h1></th>
                      <th><h1>Total S.F</h1></th>
                      <th><h1>Opened</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>        
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>    
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>             
                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>    

                    <tr>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                      <td>
                        <p class="p6">A1</p>
                      </td>
                    </tr>    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>


      </div>
    </div>