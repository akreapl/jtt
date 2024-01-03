<?php /* Template Name: Strona błędu 404 */ ?>

<?php
get_header('page');
?>

<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text-center mb-3">
                <article>
                    <h1 class="my-5">404</h1>
                    <h2 class="my-5">NIE ZNALEZIONO STRONY</h2>
                    <p class="my-3">Wróć do <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-underline fw-bold">strony głównej</a></p>
                </article>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>