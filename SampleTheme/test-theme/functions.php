<?php
    function web_files(){
        wp_enqueue_style('myStyle', get_stylesheet_uri());
        echo '<script>console.log("load css")</script>';
    }


    function footer_action() { 
        echo '<div class="footer">
                    footer action is here
             </div>'; 
        echo '<script>console.log("footer action")</script>';
    }

    add_action('wp_enqueue_scripts', 'web_files');
    add_action('wp_footer', 'footer_action'); 
?>

