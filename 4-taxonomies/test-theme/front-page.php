<?php get_header();?>
    <h1>All Blog Posts:</h1>
<?php
while (have_posts()) {
    the_post();?>
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <p><?php the_title()?></p>
        <p><?php the_content()?></p>
        <hr>
<?php }?>

<?php
$homepageStaffs = new WP_Query(array(
    'posts_per_page' => 5,
    'post_type' => 'staff'
));

while ($homepageStaffs->have_posts()) {
    $homepageStaffs->the_post();?>
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <p><?php echo wp_trim_words(get_the_content())?></p>
        <hr>
<?php }?>

<?php
$homepageProjects = new WP_Query(array(
    'posts_per_page' => 5,
    'post_type' => 'project'
));

while ($homepageProjects->have_posts()) {
    $homepageProjects->the_post();?>
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <p><?php echo wp_trim_words(get_the_content())?></p>
        <hr>
<?php }?>

<?php get_footer();?>
