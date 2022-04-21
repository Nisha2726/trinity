<?php // custom functions.php template @ digwp.com


// This enables the function that lets you set new image sizes
add_theme_support( 'post-thumbnails' );
// These are the new image sizes we cooked up
add_image_size( 'post-image', 660 );
// Now we register the size so it appears as an option within the editor
add_filter( 'image_size_names_choose', 'my_custom_image_sizes' );
function my_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'post-image' => __( 'Post Images' ),
    ) );
}

function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );


  /*removed search default style */
//   add_action('wp_print_styles', 'remove_sf_styles', 100);
//   function remove_sf_styles(){
      
//       wp_dequeue_style( 'search-filter-plugin-styles' );
//   }



/*shows related property by province in portfolio-single*/
function related_posts_by_taxonomy( $post_id, $taxonomy, $args=array() ) {
    $query = new WP_Query();
    $terms = wp_get_object_terms( $post_id, $taxonomy );

    // Make sure we have terms from the current post
    if ( count( $terms ) ) {
        $post_ids = get_objects_in_term( $terms[0]->term_id, $taxonomy );
        $post = get_post( $post_id );
        $post_type = get_post_type( $post );        

        $args = wp_parse_args( $args, array(
                'post_type' => 'post',
                'post__in' => $post_ids,
                'taxonomy' => $taxonomy,
                'term' => $terms[0]->slug,
                'posts_per_page' => 4,

            ) );
        $query = new WP_Query( $args );
    }

    // Return our results in query form
    return $query;
}

// function register_my_menu() {
//     register_nav_menu('header-menu',__( 'Header Menu' ));
// }

// add_action( 'init', 'register_my_menu' );


// function my_custom_menu() {
//     register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
// }
// add_action( 'init', 'my_custom_menu' );


// register_nav_menu( 'primary', 'Primary Menu' );

  
function featurednews() {
    		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
    		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

    $featured_news = '';
    // the query
    $the_query = new WP_Query( array( 
        'category_name' => 'news', 
        'posts_per_page' => 3
    ) ); 
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $featured_news .= '<div class="grid-child">';
            $featured_news .= '<div class="grid-child-inner">';

                if ( has_post_thumbnail() ) {
                $featured_news .= '<a href="' . get_the_permalink() . '"><img src="' . wp_get_attachment_url( get_post_thumbnail_id() ) . '"/></a>';
                $featured_news .= '<div class="grid-child-inner-group-wrapper">';
                $featured_news .= '<div class="grid-child-inner-group-space">';
                $featured_news .= '<h5>' . get_the_date() .'</h5>';
                $featured_news .= '<p class="p16">' . get_the_title() .'</p>';
                // $featured_news .= '<a href="' . get_the_permalink() . '" title="' . the_title_attribute() . '">' . get_the_title() . '</a>';
                $featured_news .= '</div>';
                $featured_news .= '</div>';   
                } else { 
                // if no featured image is found
                $featured_news .= '<a href="' . get_the_permalink() . '"><img src="' . get_stylesheet_directory_uri() . '/images/who_we_are_placeholder1.jpg' . '"/></a>';
                $featured_news .= '<div class="grid-child-inner-group-wrapper">';
                $featured_news .= '<div class="grid-child-inner-group-space">';
                $featured_news .= '<h5>' . get_the_date() .'</h5>';
                $featured_news .= '<p class="p16">' . get_the_title() .'</p>';
                // $featured_news .= '<a href="' . get_the_permalink() . '" title="' . the_title_attribute() . '">' . get_the_title() . '</a>';
                $featured_news .= '</div>';
                $featured_news .= '</div>';   
                }
                $featured_news .= '</div>';
                $featured_news .= '</div>';     

                }



        } else {
        // no posts found


    }
      
    return $featured_news;

    /* Restore original Post Data */
    wp_reset_postdata();
    }


    function featuredproperties() {

        add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        $featured_properties = '';

        $the_query = new WP_Query( array( 
            'category_name' => 'featured-properties-carousel', 
            'posts_per_page' => 5 
        ) ); 

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                    if ( has_post_thumbnail() ) {
                        $featured_properties .= '<li class="splide__slide" data-location-name="'. get_the_title() .'" data-location-copy="' . get_the_excerpt() .'">';
                        $featured_properties .= '<img src="' . wp_get_attachment_url(get_post_thumbnail_id()) . '"/>';
                        $featured_properties .= '</li>';
                    } else { 
                    }
                    }
            } else {
            // no posts found

        }

        return $featured_properties;


        /* Restore original Post Data */
        wp_reset_postdata();



    }



    function cptui_register_my_taxes() {

        /**
         * Taxonomy: Provinces.
         */
    
        $labels = [
            "name" => __( "Provinces", "custom-post-type-ui" ),
            "singular_name" => __( "Province", "custom-post-type-ui" ),
            "menu_name" => __( "Provinces", "custom-post-type-ui" ),
            "all_items" => __( "All Provinces", "custom-post-type-ui" ),
            "edit_item" => __( "Edit Province", "custom-post-type-ui" ),
            "view_item" => __( "View Provinces", "custom-post-type-ui" ),
            "update_item" => __( "Update Provinces Name", "custom-post-type-ui" ),
            "add_new_item" => __( "Add New Province", "custom-post-type-ui" ),
            "new_item_name" => __( "New Province Name", "custom-post-type-ui" ),
            "parent_item" => __( "Parent Province", "custom-post-type-ui" ),
            "parent_item_colon" => __( "Parent Province:", "custom-post-type-ui" ),
            "search_items" => __( "Search Provinces", "custom-post-type-ui" ),
            "popular_items" => __( "Popular Provinces", "custom-post-type-ui" ),
            "separate_items_with_commas" => __( "Separate Provinces with commas", "custom-post-type-ui" ),
            "add_or_remove_items" => __( "Add or Remove Provinces", "custom-post-type-ui" ),
            "choose_from_most_used" => __( "Choose From Most Used Provinces", "custom-post-type-ui" ),
            "not_found" => __( "No Provinces found", "custom-post-type-ui" ),
            "no_terms" => __( "Not Province", "custom-post-type-ui" ),
            "items_list_navigation" => __( "Provinces List Nagivation", "custom-post-type-ui" ),
            "items_list" => __( "Provinces list", "custom-post-type-ui" ),
            "back_to_items" => __( "Back to Provinces", "custom-post-type-ui" ),
        ];
    
        
        $args = [
            "label" => __( "Provinces", "custom-post-type-ui" ),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'provinces', 'with_front' => true, ],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "provinces",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "show_in_quick_edit" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy( "provinces", [ "post" ], $args );
    
        /**
         * Taxonomy: Cities.
         */
    
        $labels = [
            "name" => __( "Cities", "custom-post-type-ui" ),
            "singular_name" => __( "City", "custom-post-type-ui" ),
            "menu_name" => __( "Cities", "custom-post-type-ui" ),
            "all_items" => __( "All Cities", "custom-post-type-ui" ),
            "edit_item" => __( "Edit City", "custom-post-type-ui" ),
            "view_item" => __( "View City", "custom-post-type-ui" ),
            "update_item" => __( "Update City Name", "custom-post-type-ui" ),
            "add_new_item" => __( "Add New City", "custom-post-type-ui" ),
            "new_item_name" => __( "New City Name", "custom-post-type-ui" ),
            "parent_item" => __( "Parent City", "custom-post-type-ui" ),
            "parent_item_colon" => __( "Parent City:", "custom-post-type-ui" ),
            "search_items" => __( "Search Cities", "custom-post-type-ui" ),
            "popular_items" => __( "Popular Cities", "custom-post-type-ui" ),
        ];
    
        
        $args = [
            "label" => __( "Cities", "custom-post-type-ui" ),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'cities', 'with_front' => true, ],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "cities",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "show_in_quick_edit" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy( "cities", [ "post" ], $args );
    
        /**
         * Taxonomy: Property Types.
         */
    
        $labels = [
            "name" => __( "Property Types", "custom-post-type-ui" ),
            "singular_name" => __( "Property Type", "custom-post-type-ui" ),
            "menu_name" => __( "Property Types", "custom-post-type-ui" ),
            "all_items" => __( "All Property Types", "custom-post-type-ui" ),
            "edit_item" => __( "Edit Property Type", "custom-post-type-ui" ),
            "view_item" => __( "View Property Type", "custom-post-type-ui" ),
            "update_item" => __( "Update Property Type name", "custom-post-type-ui" ),
            "add_new_item" => __( "Add new Property Type", "custom-post-type-ui" ),
            "new_item_name" => __( "New Property Type name", "custom-post-type-ui" ),
            "parent_item" => __( "Parent Property Type", "custom-post-type-ui" ),
            "parent_item_colon" => __( "Parent Property Type:", "custom-post-type-ui" ),
            "search_items" => __( "Search Property Types", "custom-post-type-ui" ),
            "popular_items" => __( "Popular Property Types", "custom-post-type-ui" ),
            "separate_items_with_commas" => __( "Separate Property Types with commas", "custom-post-type-ui" ),
            "add_or_remove_items" => __( "Add or remove Property Types", "custom-post-type-ui" ),
            "choose_from_most_used" => __( "Choose from the most used Property Types", "custom-post-type-ui" ),
            "not_found" => __( "No Property Types found", "custom-post-type-ui" ),
            "no_terms" => __( "No Property Types", "custom-post-type-ui" ),
            "items_list_navigation" => __( "Property Types list navigation", "custom-post-type-ui" ),
            "items_list" => __( "Property Types list", "custom-post-type-ui" ),
            "back_to_items" => __( "Back to Property Types", "custom-post-type-ui" ),
        ];
    
        
        $args = [
            "label" => __( "Property Types", "custom-post-type-ui" ),
            "labels" => $labels,
            "public" => true,
            "publicly_queryable" => true,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => [ 'slug' => 'property_type', 'with_front' => true, ],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "property_type",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "show_in_quick_edit" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy( "property_type", [ "post" ], $args );
    }
    add_action( 'init', 'cptui_register_my_taxes' );
    
    
    
    
    

    // Add a shortcode
    add_shortcode('featurednews', 'featurednews');
    add_shortcode('featuredproperties', 'featuredproperties');

?>