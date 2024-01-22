<?php /* Template Name: Formularz złotówkowicze */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php');
?>


<div class="container">
    <div class="row d-flex justify-content-between">

        <?php
        include_once('inc-form-pln.php');
        ?>

        <div class="col-md-6 col-sm-12 ms-md-3 p-5 border-notice" style="text-align: justify;">
            <article>
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