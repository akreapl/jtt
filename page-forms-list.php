<?php /* Template Name: Strona wszystkich formularzy */ ?>

<?php
get_header('page');
?>
<?php
include_once('inc-page-header.php');
?>

<div class="page-container">
    <div class="container">
        <div class="row pb-5 mb-3 d-flex justify-content-center" style="text-align:justify;">
            <?php
            show_forms();
            the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>