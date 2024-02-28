<?php /* Template Name: Formularz frankowicze */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php');
?>


<div class="container">
    <div class="row d-flex justify-content-between mb-4">

        <?php
        include_once('inc-form-chf.php');
        ?>

        <div class="col-md-6 col-sm-12 ms-md-3 p-4" style="text-align: justify;">
            <article class="border-notice p-3">
                <?php
                // Start the loop.
                while (have_posts()) : the_post();
                    // Include the single post content template.
                    the_content();
                // End of the loop.
                endwhile;
                ?>
            </article>
        </div>
    </div>
</div>


<?php get_footer(); ?>