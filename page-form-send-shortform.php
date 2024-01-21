<?php /* Template Name: Strona po wysyłce formularza krótkiego */ ?>

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
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $consent  = filter_input(INPUT_POST, 'consent');
                    if (
                        $consent == "on"
                    ) {
                        makeemail_shortform();
                        while (have_posts()) : the_post();
                            // Include the single post content template.
                            the_content();
                        // End of the loop.
                        endwhile;
                    } else {
                        echo "<p class=\"text-danger text-center py-5\">Zaakceptuj politykę prywatności!<br /> Wiadomość NIE ZOSTAŁA WYSŁANA.</p>";
                    }
                }
                ?>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>