<?php

/** The template for displaying all single posts and attachments */
get_header(); ?>

<?php
include_once('inc-page-header.php'); ?>

<div class="container text-justify pagetopmargin" style="text-align: justify;">
    <div class="row">
        <div class="col-md-4 col-sm-12 py-3" style="text-align: justify;">
            <?php
            echo get_the_post_thumbnail($post->ID, 'post-thumbnail', array('class' => 'img-fluid mb-4 overflow-hidden')); ?>
        </div>
        <div class="col-md-8 col-sm-12 py-3" style="text-align: justify;">
            <?php
            the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>