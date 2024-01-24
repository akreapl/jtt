<div class="container-fluid py-3 bg-primary menu-margin">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center align-content-around">
            <div class="col-12 d-flex align-items-center">
                <p class="breadcrumbs text-white m-0 p-0">
                    <?php
                    get_breadcrumb();
                    ?>
                </p>

            </div>

        </div>
    </div>
</div>

<div class="container-fluid bg-white py-5">
    <div class="container">
        <div class="row gx-5 d-flex justify-content-start align-items-center align-content-around">
            <div class="col-12">
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