<div class="container-fluid py-5 mt-5 bg-primary">
    <div class="container">
        <div class="row gx-5 d-flex justify-content-between align-items-center align-content-around">
            <div class="col-12 d-flex align-items-center">
                <p class="text-white m-0 p-0 breadcrumbdark">
                    <?php
                    get_breadcrumb();
                    ?>
                </p>
                <h2 class="mt-4"><?php echo get_the_title(); ?></h2>
            </div>
        </div>
    </div>
</div>