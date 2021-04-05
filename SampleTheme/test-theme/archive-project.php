<?php get_header();?>
    <h1>Project Archive Page:</h1>

<?php
while (have_posts()) {
    the_post();?>
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <p><?php echo wp_trim_words(get_the_content())?></p>
        <hr>
<?php }?>
<a href="<?php echo site_url() ?>">Home</a>

<?php get_footer();?>
