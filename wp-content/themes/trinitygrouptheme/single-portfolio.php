<?php
/*
 * Template Name: Portfolio Details
 * Template Post Type: post, page, news
 */
  
?>
<?php get_header(); ?>


    <div class="main-container portfolio-details-container">
      <div class="inner-container">

        <section class="portfolio-details-hero-container">

           <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

            <div class="pickgradient2"><img src="<?php echo $image[0]; ?>" width="100%" style="display: inline-block;"/></div>
           
            
          <?php endif; ?> 
          
         

          <div class="portfolio-details-wrapper">
            <h3><?php the_title(); ?></h3>
            <?php if( get_field('location') ): ?>
                <h5><?php the_field('location'); ?></h5>
            <?php endif; ?>
            
            <?php
                $content = get_the_content();
                // $content = str_replace('<p>', '<p class="p2">', $content);
                // echo $content
                $content = preg_replace('/<p([^>]+)?>/', '<p class="p2">', $content);
                echo $content;
                ?>
            
          </div>
          <div class="inset-content-wrapper">
            <div class="inset-content">
              
              <?php if( get_field('inset_location') ): ?>
                <h1><b>LOCATION</b></h1>
                <h1><?php the_field('inset_location'); ?></h1>
              <?php endif; ?>
              
              
              <?php if( get_field('inset_size') ): ?>
                <h1><b>SIZE</b></h1>
                <h1><?php the_field('inset_size'); ?></h1>
              <?php endif; ?>              
              <!-- <h1><b>TRADE AREA</b></h1>
              <?php if( get_field('inset_trade_area') ): ?>
                <h1><?php the_field('inset_trade_area'); ?></h1>
              <?php endif; ?>              
               -->
              
              <?php if( get_field('inset_underground_parking') ): ?>
                <h1><b>UNDERGROUND PARKING</b></h1>
                <h1><?php the_field('inset_underground_parking'); ?></h1>
              <?php endif; ?>     

               
              <?php if( get_field('inset_redevelopment_retail_possession') ): ?>
                <h1><b>REDEVELOPMENT RETAIL POSSESSION</b></h1>
                <h1><?php the_field('inset_redevelopment_retail_possession'); ?></h1>
              <?php endif; ?>              
              
             
              <?php if( get_field('inset_tenants') ): ?>
                <h1>MAJOR TENANTS</b></h1>
                <h1><?php the_field('inset_tenants'); ?></h1>
              <?php endif; ?>
            </div>
          </div>

          <div class="grid-container">

    <?php
        $featured_posts = get_field('portfolio_management_personnel');
        if( $featured_posts ): ?>

      <?php foreach( $featured_posts as $post ): 

          // Setup this post for WP functions (variable must be named $post).
          setup_postdata($post); ?>
              <div class="grid-child">
                <div class="grid-child-inner">
                  <img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:315px; height:315px">
                    <div class="grid-child-inner-group-wrapper">
                    <div class="grid-child-inner-group-space">
                      
                      <?php if( get_field('management_personnel_in_charge_of') ): ?>
                        <h5><?php the_field('management_personnel_in_charge_of'); ?></h5>
                      <?php endif; ?>

                      <?php if( get_field('management_personnel_name') ): ?>
                        <h1><?php the_field('management_personnel_name'); ?>,</h1>
                      <?php endif; ?>
                    </div>
                    <div class="grid-child-inner-group-space">
                      <?php if( get_field('management_personnel_job_title') ): ?>
                        <h1><?php the_field('management_personnel_job_title'); ?></h1>
                      <?php endif; ?>
                    </div>
                    <?php if( get_field('management_personnel_phone_number') ): ?>
                      <h1>p. <?php the_field('management_personnel_phone_number'); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('management_personnel_email_address') ): ?>
                      <h1>e. <?php the_field('management_personnel_email_address'); ?></h1>
                    <?php endif; ?>

                    </div>
                </div>
              </div>
      <?php endforeach; ?>

    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
    <?php endif; ?>

          </div>
        </section>

     

        <section class="property-details-carousel">
          <div id="splide-hor" class="splide">
            <div class="splide__track">
              <ul class="splide__list">
              <?php
              if( have_rows('portfolio_images') ):
                while( have_rows('portfolio_images') ): the_row();
                if( $subfields = get_row() ) { ?>
                    <?php
                    foreach ($subfields as $key => $value) {
                    if ( !empty($value) ) { $field = get_sub_field_object( $key ); ?>
                    <li class="splide__slide">
                      <img src="<?php echo  $field['value']; ?>"/>
                    </li>
                    <?php }
                    } ?>
                    <?php }
                    endwhile;
                  endif;
                  ?> 
              </ul>
            </div>
          </div>
        </section>

        <section class="view-more-properties">
          <h1>VIEW MORE PROPERTIES</h1>
          <div class="grid-container">

          <?php
            $related =  related_posts_by_taxonomy( $post->ID, 'provinces' );
                while ( $related->have_posts() ): $related->the_post();
            ?>
                
            <div class="grid-child">
              <div class="grid-child-inner">
              <a href="<?php the_permalink(); ?>">
                <div class="view-more-properties-copy-wrapper">
                  <p class="p8"><?php echo get_the_title( $post->ID ); ?></p>
                  <?php if( get_field('location') ): ?>
                    <p class="p6"><?php the_field('location'); ?></p>
                  <?php endif; ?>
                </div>
                <?php if ( has_post_thumbnail() ) : ?>
                <img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:100%">
                <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Properties_all_10.png" style="width:100%; height:100%"/>
                <?php	endif; ?>
              </div>
              </a>

            </div>
          <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata();
                endwhile; 
          ?>
          </div>
        </section>


      </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>