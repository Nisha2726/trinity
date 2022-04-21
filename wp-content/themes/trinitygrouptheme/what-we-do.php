<?php /* Template Name: What We Do Template */ ?>
<?php get_header(); ?>

<div class="main-container what-we-do-container">
      <div class="inner-container">

        <section class="what-we-do-hero-container hero-container">
          <img src="<?php bloginfo('template_url'); ?>/images/heros/Richview_1920x996.jpg" width="100%" style="display: inline-block;"/>
        </section>

        <section class="width-full">
          <div class="basic-text-block">
            <h2>The Trinity is active in three distinct segments of real-estate development: <span class="bold">Urban Mixed-Use Centres, Community Centres, and Large Format Centres</span>. In each, we strive to create spaces that allow tenants to thrive and communities to prosper.</h2>
          </div>
        </section>

        <section class="what-we-do-grid">
          <div class="grid-container">
            <div class="grid-child">
              <div class="grid-child-inner" style="background:url('<?php bloginfo('template_url'); ?>/images/WhatWeDo_Dev.jpg');background-size:cover; background-repeat:no-repeat; background-position:center;">
                <img src="<?php bloginfo('template_url'); ?>/images/WhatWeDo_Dev.jpg"/>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <h1>DEVELOPMENT</h1>
                    <p class="p1">Trinity’s Development and Design team brings a wealth of knowledge and expertise in developing large scale Mixed-Use Developments that foster communities where people live, work, shop and play.  We work and collaborate with various stakeholders to design and develop industry leading developments across Canada.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <h1>LEASING</h1>
                    <p class="p1">Trinity’s Leasing team works to attract and curate a first class retail mix across our portfolio. Utilizing a vast network of national and local relationships across the industry, the leasing team works with our retail and office partners to ensure their needs are met. The leasing team drives value to our assets and maintains strong occupancy rates by utilizing our extensive knowledge of markets across Canada.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner" style="background:url('<?php bloginfo('template_url'); ?>/images/leasing.jpg');background-size:cover; background-repeat:no-repeat; background-position:center;">
              <img src="<?php bloginfo('template_url'); ?>/images/What_we_Do_Construction_New.jpg"/>  
            </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner" style="background:url('<?php bloginfo('template_url'); ?>/images/WhatWeDo_Management.png');background-size:cover; background-repeat:no-repeat; background-position:bottom;">
                <img src="<?php bloginfo('template_url'); ?>/images/WhatWeDo_Management.png"/>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <h1 style="text-transform:uppercase";>Commercial & Residential Property Management</h1>
                    <p class="p1">Helping tenants realize full profit potential requires managers with a deep understanding of our projects. Our Property Management team is closely involved in each new project, from the construction stage through to the to successful opening of our tenant stores. By applying proactive management strategies and immediate access to all key departments, we are able to efficiently resolve obstacles as they arise.</p>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="grid-child">
              <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <h1>RESIDENTIAL MANAGEMENT</h1>
                    <p class="p1">Our team members represent the best in the industry, bringing extensive experience and innovative strategic thinking to all of our land development projects. Each member is committed to excellence in specialized planning, retail development, leasing, construction, finance and property management.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner" style="background:url('<?php bloginfo('template_url'); ?>/images/What_we_do_ResidentialMngmt_New.jpg');background-size:cover; background-repeat:no-repeat; background-position:center;">
                <img src="<?php bloginfo('template_url'); ?>/images/What_we_do_ResidentialMngmt_New.jpg"/>
              </div>
            </div>
          </div> -->
           <div class="grid-child">
              <div class="grid-child-inner">
                <div class="grid-child-inner-group-wrapper">
                  <div class="grid-child-inner-group-space">
                    <h1>CONSTRUCTION</h1>
                    <p class="p1">On budget and on time. Our Construction Department’s ability to deliver on both is achieved through trusted relationships with consultants and contractors who have a comprehensive understanding of the start-to-finish process. Currently, we are building or expanding projects totalling 11.2 million square feet.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-child">
              <div class="grid-child-inner" style="background:url('<?php bloginfo('template_url'); ?>/images/What_we_Do_Construction_New.jpg');background-size:cover; background-repeat:no-repeat; background-position:center;">
              <img src="<?php bloginfo('template_url'); ?>/images/What_we_Do_Construction_New.jpg"/>  
            </div>
            </div>
        </section>

       <!-- <section class="property-management-team">
          <div class="basic-text-block">
            <h1>PROPERTY MANAGERS & LEASING REPRESENTATIVES</h1>
          </div>
          <div class="grid-container">


          <?php
							$args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'category_name' => 'management_personnel',
								'posts_per_page' => 8,
							);
							$arr_posts = new WP_Query( $args );
							
							if ( $arr_posts->have_posts() ) :
							
									while ( $arr_posts->have_posts() ) :
											$arr_posts->the_post();
											?>
											<div class="grid-child">
													<div class="grid-child-inner">
													<?php
													if ( has_post_thumbnail() ) :
													?>
													<img title="image title" alt="thumb image" class="wp-post-image" 
																			src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">													<?php	
													endif;
													?>
                            <div class="grid-child-inner-group-wrapper">
                              <div class="grid-child-inner-group-space">
                                <?php if( get_field('management_personnel_name') ): ?>
                                  <h5><?php the_field('management_personnel_name'); ?>,</h5>
                                <?php endif; ?>
                                <?php if( get_field('management_personnel_job_title') ): ?>
                                  <span><?php the_field('management_personnel_job_title'); ?></span>
                                <?php endif; ?>
                                <?php if( get_field('management_personnel_phone_number') ): ?>
                                  <span>p. <?php the_field('management_personnel_phone_number'); ?></span>
                                <?php endif; ?>
                                <?php if( get_field('management_personnel_email_address') ): ?>
                                <span>e. <?php the_field('management_personnel_email_address'); ?></span>
                                <?php endif; ?>
                              </div>
                            </div>
													</div>
											</div>
											<?php
									endwhile;
							endif;
            ?>
          </div>
        </section> -->

      </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>