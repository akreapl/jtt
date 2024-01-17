<?php /* Template Name: Archiwum */ ?>
<?php
get_header('page');

include_once('inc-page-header.php');
?>

<div class="page-container">
    <div class="container">
        <div class="row pb-2">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-md-4 col-sm-12 mb-4">
                        <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt=" <?php get_the_title(); ?>" class="img-fluid"></a>
                    </div>

                    <div class=" col-md-8 col-sm-12 mb-4">
                        <?php the_title(sprintf('<h2 class="text-left noafter"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
                        <div class="entry-content text-justify">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php else : ?>
                <h2 class="center py-5">Nic nie znaleziono</h2>
                <p class="center py-4"><?php _e("Przepraszamy, ale szukany artykuł nie mógł zostać wyświetlony."); ?></p>
            <?php endif; ?>

            <div class="col-12 d-flex justify-content-center">
                <?php
                bootstrap_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>