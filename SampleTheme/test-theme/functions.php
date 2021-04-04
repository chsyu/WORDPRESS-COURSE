<?php
    require get_theme_file_path('/search-route.php');
    require get_theme_file_path('/custom-post-field.php');

    function web_files(){
        wp_enqueue_style('myStyle', get_stylesheet_uri());
        echo '<script>console.log("load css")</script>';
    }

    function page_features() {
        add_theme_support('title-tag');
    }

    function footer_action() { 
        echo '<div class="footer">
                    footer action is here
             </div>'; 
        echo '<script>console.log("footer action")</script>';
    }

    function dtd_custom_rest() {
        register_rest_field('post', 'schoolName', array(
            'get_callback' => function() {
                return 'NTUE DTD is good..';
            }
        ));
    }

    function dtd_custom_route() {
        register_rest_route('dtd/v1', 'staff', array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'staffSearchResults'
        ));
        register_rest_route('dtd/v1', 'post', array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'postSearchResults'
        ));
        register_rest_route('dtd/v1', 'project', array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'projectSearchResults'
        ));
    }


  
    add_action('init', 'dtd_post_types');
    add_action('after_setup_theme', 'page_features');
    add_action('wp_enqueue_scripts', 'web_files');
    add_action('wp_footer', 'footer_action'); 
    add_action('rest_api_init', 'dtd_custom_route');
?>

