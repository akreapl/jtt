<?php

/** The template for displaying all single posts and attachments */
get_header(); ?>

<?php
include_once('inc-page-header.php'); ?>

<div class="container text-justify pagetopmargin" style="text-align: justify;">
    <?php
    echo get_the_post_thumbnail($post->ID, 'post-thumbnail', array('class' => 'img-fluid mb-4 overflow-hidden'));
    the_content(); ?>
</div>

<?php get_footer(); ?>