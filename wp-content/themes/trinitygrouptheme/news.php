<?php /* Template Name: News Template */ ?>
<?php get_header(); ?>

<div class="main-container news-container">
      <div class="inner-container">

        <section class="news-container-hero hero-container">
          <img src="<?php bloginfo('template_url'); ?>/images/heros/News_Page_Hero.jpg" width="100%" style="display: inline-block;"/>
        </section>

        <section class="width-full">
          <div class="basic-text-block">
            <h3>LATEST NEWS</h3>
          </div>
        </section>

        <section class="latest-news-grid">

          <div class="grid-container">

            <?php
							$args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'category_name' => 'news',
								'posts_per_page' => 6,
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
															<h5><?php echo get_the_date('F j, Y'); ?></h5>
															<div class="grid-child-inner-group-space">
																	<p class="p2"><?php the_title(); ?></p>
																	<p class="p2"><?= wp_strip_all_tags( get_the_excerpt(), true ) ?></p>
																	<p class="blue-link"><a href="<?php the_permalink(); ?>">READ</a></p>
															</div>
													</div>
													</div>
											</div>
											<?php
									endwhile;
							endif;
            ?>
            </div>
			
			<p class="blue-link"><a href="/trinitySite/portfolio/">VIEW ALL</a></p>

        </section>



        <section class="width-full">
          <div class="basic-text-block align-center">
            <p class="p2">we’re hiring! Position Title: Investments, Senior Analyst / Manager</p>
          </div>
        </section>

      </div>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
