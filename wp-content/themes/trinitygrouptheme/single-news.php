
<?php
/*
 * Template Name: News Details
 * Template Post Type: post, page, news
 */
  
?>

<div class="main-container news-details-container">
      <div class="inner-container">

        <section class="news-details-container-hero hero-container">
          <img src="<?php bloginfo('template_url'); ?>/images/news-hero.png" width="100%" style="display: inline-block;"/>
        </section>


        <section class="news-article-content">
          <div class="article-inner">
            <h5><?php echo get_the_date(); ?></h5>
            <h6><?php the_title(); ?></h6>
            <p class="p3"></p>
            <p class="p2"><?php the_content(); ?></p>
            <h1><i>Source: Ottawa Business Journal; by OBJ Staff March 10, 2021</i></h1>
          </div>
        </section>
    

        <section class="news-related-news">
          <div class="basic-text-block">
            <h1>RELATED NEWS</h1>
          </div>
          <div class="grid-container">
          <?php
                $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'news',
                'posts_per_page' => 3,
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
                                    src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
                        <?php	
                        endif;
                        ?>
                        <div class="grid-child-inner-group-wrapper">
                            <div class="grid-child-inner-group-space">
                                <p class="p2"><?php the_title(); ?></p>
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
        </section>

      </div>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 
<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>



dsfsdf