<div class="container-fluid py-3 bg-primary menu-margin">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center align-content-around">
            <div class="col-12 d-flex align-items-center">
                <p class="breadcrumbs text-white m-0 p-0" style="color:#fff !important;">
                    <?php
                    //get_breadcrumb();
                    ?>
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
if (is_page_template('page-service.php') || is_page_template('page-team.php') ) { ?>
    <?php
    if (is_mobile() == 1) { ?>

        <div class="row">
            <div class="container d-flex justify-content-center mb-4">
                <?php
                $mingraphic = get_post_meta($post->ID, 'mingraphic', true);
                $mingraphicalt = get_post_meta($mingraphic, '_wp_attachment_image_alt', TRUE);

                echo "<img src=" . get_template_directory_uri() . "/img/services-min/" . $mingraphic . " alt=" . $mingraphicalt . "/>";

                ?>
            </div>
        </div>

    <?php } else { ?>
        <div class="container-fluid" style="background:#F1E2D1; max-height:250px;">
            <div class="row">
                <div class="container d-flex justify-content-center">
                    <?php
                    echo get_the_post_thumbnail($post->ID, $size = 'full', ['class' => 'img-fluid lazy']);
                    ?>
                </div>
            </div>
        </div>
    <?php }; ?>
<?php } ?>

<div class="container-fluid bg-white py-sm-2 py-md-4">
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center align-content-around">
            <div class="col-sm-12 col-md-12">
                <h1 class="noafter mt-sm-4 m-md-0 p-0"><?php
                                                        if (is_archive()) {
                                                            the_archive_title('<h1 class="noafter">', '</h1>');
                                                        } else {
                                                            echo get_the_title();
                                                        }
                                                        ?></h1>
            </div>
        </div>
    </div>
</div>