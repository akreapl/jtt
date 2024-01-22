<?php /* Template Name: Formularz za śmierć */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-12" style="text-align: justify;">
            <article>
                <?php
                // Start the loop.
                while (have_posts()) : the_post();
                    // Include the single post content template.
                    the_content();
                // End of the loop.
                endwhile;

                include_once('inc-form-death.php');
                ?>
            </article>
        </div>
    </div>
</div>


<?php get_footer(); ?>