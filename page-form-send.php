<?php /* Template Name: Strona po wysyłce formularza */ ?>

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
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $consent     = filter_input(INPUT_POST, 'consent');
                    echo "ZGODA: " . $consent;
                    if (
                        $consent == "on"
                    ) {
                        makeemail();
                    } else {
                        echo "<p class=\"text-danger text-center\">Zaakceptuj politykę prywatności!<br /> Wiadomość NIE ZOSTAŁA WYSŁANA.</p>";
                    }
                }
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