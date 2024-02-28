<?php /* Template Name: Strona o nas+zespół */ ?>

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
            the_content();
            show_people_all(327); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>