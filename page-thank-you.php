<?php /* Template Name: Strona po wysyłce formularza */ ?>

<?php
get_header();
?>
<?php
include_once('inc-page-header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-12" style="text-align: justify;">
            <?php the_content();
            ?>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $acceptance     = filter_input(INPUT_POST, 'acceptance');
                echo $clientname;
                if ($acceptance == "on") {
                    makeemail();
                    echo '<h2>Dziękujemy za kontakt!</h2><p>Cieszymy się, że chcesz z nami porozmawiać - odezwiemy się najszybciej jak się da!</p>';
                } else {
                    echo "Zaakceptuj politykę prywatności! Wiadomość NIE ZOSTAŁA WYSŁANA.";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>