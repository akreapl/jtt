<?php /* Template Name: Formularz za krzywde z patronus.pl */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-12 py-3" style="text-align: justify;">
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
            <iframe src="https://fundacjapatronus.pl/kalkulator_za_krzywde" title="Formularz za krzywdę" width="100%" height="100%">TEST</iframe>
        </div>
    </div>
</div>


<?php get_footer(); ?>