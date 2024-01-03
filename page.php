<?php /* Template Name: Strona standardowa */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php');
?>

<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 text-justify pb-5 mb-3">
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
</div>

<?php get_footer(); ?>