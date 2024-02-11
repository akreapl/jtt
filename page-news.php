<?php /* Template Name: Strona aktualności (zbiorcza) */ ?>

<?php
get_header('page');
?>
<?php
include_once('inc-page-header.php');
?>

<div class="page-container">
    <div class="container">
        <div class="row pb-5 mb-3 d-flex justify-content-center" style="text-align:justify;">
            <div class="col-12">
                <?php
                the_content(); ?>
            </div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-md-4 col-sm-12 mb-5">
                        <a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'post-thumbnail'); ?>" alt="<?php $thumbnailid = get_post_thumbnail_id($post->ID);
                                                                                                                                                                    echo get_post_meta($thumbnailid, '_wp_attachment_image_alt', TRUE); ?>" class="img-fluid"></a>
                    </div>

                    <div class="col-md-8 col-sm-12 mb-5">
                        <?php the_title(sprintf('<h2 class="text-left noafter pb-3"><a class="text-decoration-none" href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
                        <div class="entry-content text-justify pt-3" style="text-align:justify;">
                            <?php
                            the_excerpt(); ?>
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