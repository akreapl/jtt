<?php /* Template Name: Strona kontaktowa */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php');
?>


<div class="container">
    <div class="row pb-5">
        <div class="col-md-6 col-sm-12" style="text-align: justify;">
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

        <div class="col-md-6 col-sm-12" style="text-align: justify;">
            <?php
            include_once('inc-form-contact.php');
            ?>
        </div>
    </div>
</div>


<div class="container-fluid p-0 m-0 overflow-hidden" style="height:450px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8229.474019851741!2d14.531783559458619!3d53.43295732603683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa095c2f6e3439%3A0xd3eb9fb56ac66967!2sKancelaria%20radc%C3%B3w%20prawnych%20Szczecin%20%7C%20Jagie%C5%82%C5%82o%20Tobolewski!5e0!3m2!1spl!2spl!4v1705922291691!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>