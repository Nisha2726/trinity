<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $query->have_posts() )
{
	?>

	
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
		?>
      <div class="grid-child">
        <a href="<?php the_permalink(); ?>">
          <div class="grid-child-inner heightjs pickgradient" style="background:url('<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>'); background-size: cover; height: 350px; background-position: center;">
              <div class="portfolio-copy-wrapper">
                <p class="p8"><?php the_title(); ?></p>
                <p class="p6"><?php the_field('location'); ?></p>
              </div>
              <div class="learn-more-wrapper">
                  <p class="p2 blue-link"><a href="<?php the_permalink(); ?>">LEARN MORE</a></p>
              </div>
            <?php
              if ( has_post_thumbnail() ) :
            ?>
              
              <!-- <img title="image title" alt="thumb image" class="wp-post-image" > -->
              <!-- <div class="portfolio-block-img" style="background:url('<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>');"></div> -->
            <?php
              else :
              ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Properties_all_10.png" style="width:100%; height:100%"/>
            <?php	
            endif;
            ?>
          </div>
        </a>
      </div>
		<?php
	}
	?>
	<?php
}
else
{
	echo "No Results Found";
}
?>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(window).bind("load resize",function(e){
      var cw = $('.heightjs').width();
      $('.heightjs').css({
          'height': cw + 'px'
      });
    });
</script>