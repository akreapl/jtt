<?php /* Template Name: Strona zespołu */ ?>

<?php
get_header('page');
?>
<?php
include_once('inc-page-header.php');
?>

<div class="page-container">
    <div class="container">
        <div class="row pb-5 mb-3 d-flex justify-content-center">
            <?php show_people(0,0); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>