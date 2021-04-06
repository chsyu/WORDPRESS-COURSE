<?php get_header(); ?>
<h1>This is the single page</h1>
<?php
        while(have_posts()){
            the_post(); ?>
            <div style="background-image: url(
                        <?php echo get_theme_file_uri('img/bg.png')?>
                        );
                        color: white;"
            >
                <h2><?php the_title()  ?></h2>
                <p><?php the_content()  ?></p>
            </div>
            <a href="<?php echo site_url() ?>">Home</a>
           <hr>
       <?php }
    ?>
<?php get_footer(); ?>
