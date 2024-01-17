<?php

/** The template for displaying all single posts and attachments */
get_header(); ?>

<?php
include_once('inc-page-header.php'); ?>

<div class="container text-justify pagetopmargin" style="text-align: justify;">
    <?php
    echo get_the_post_thumbnail($post->ID, '', array('class' => 'img-fluid mb-4 overflow-hidden'));
    the_content(); ?>
    <?php

    // Start the loop.
    while (have_posts()) : the_post();
        // Include the single post content template.
        get_template_part('template-parts/content', 'single');
    // End of the loop.
    endwhile;


    ?>

</div>




<?php get_footer(); ?>