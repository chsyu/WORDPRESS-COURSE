<?php get_header();?>
    <h1>This is the Page:</h1>
<?php
while (have_posts()) {
    the_post();?>
        <h1>This is a page not a post</h1>
        <h2>
            <a href="<?php the_permalink()?>">
                <?php the_title()?>
            </a>
        </h2>
        <p><?php the_author()?></p>
        <p><?php the_content()?></p>
        <hr>
<?php }?>

<?php get_footer();?>
