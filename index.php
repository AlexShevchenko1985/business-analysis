<?php
/**
 * The main template file
 */

get_header();
?>

<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post();
        the_content();

        //code here

    endwhile; ?>
<?php endif; ?>

<?php
get_footer();
