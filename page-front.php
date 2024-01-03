<?php /* Template Name: Strona główna V1 */ ?>
<?php get_header(); ?>
<div class="bg-main">
    <div class="container" style="position:relative;">
        <div class="row g-0">
            <div class="col-12 mt-5 mt-md-0">
                <h1>HERO</h1>
            </div>
        </div>
    </div>
</div>
<?php
include_once('inc-about.php');
include_once('inc-models.php');
include_once('inc-person.php');
include_once('inc-news.php');
get_footer(); ?>