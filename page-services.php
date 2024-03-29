<?php /* Template Name: Strona filary */ ?>

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
                the_content();
                ?>
            </div>
        </div>
    </div>
</div>

<div class="d-flex align-content-center bg-white pb-3">
    <div class="container pb-5">
        <div class="row pb-5 d-flex justify-content-between align-content-between">
            <div class="col-md-4 col-sm-12 my-3">
                <a href="/uslugi-prawne/frankowicze/" class="text-decoration-none w-100">
                    <div class="model shadow bg-white d-flex flex-column align-items-center justify-content-center">
                        <div class="vicon d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-chf.webp" class="img-fluid" alt="...">
                        </div>
                        <div class="model-name mx-3 mt-sm-3">
                            <h3 class="text-black text-center">Frankowicze</h3>
                            <p class="text-primary text-center mt-3" style="width:80%; margin: auto;">skutecznie negocjujemy z bankami i pomagamy naszym Klientom odzyskać nadpłacone środki</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-12 my-3">
                <a href="/uslugi-prawne/zlotowkowicze/" class="text-decoration-none w-100">
                    <div class="model shadow bg-white d-flex flex-column align-items-center justify-content-center">
                        <div class="vicon d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-pln-v1.webp" class="img-fluid" alt="...">
                        </div>
                        <div class="model-name mx-3 mt-sm-3">
                            <h3 class="text-black text-center">Złotówkowicze</h3>
                            <p class="text-primary text-center mt-3" style="width:80%; margin: auto;">skutecznie negocjujemy z bankami i pomagamy naszym Klientom odzyskać nadpłacone środki</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-12 my-3">
                <a href="/uslugi-prawne/spadkobiercy/" class="text-decoration-none w-100">
                    <div class="model shadow bg-white d-flex flex-column align-items-center justify-content-center">
                        <div class="vicon d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-spadki.webp" class="img-fluid" alt="...">
                        </div>
                        <div class="model-name mx-3 mt-sm-3">
                            <h3 class="text-black text-center">Spadkobiercy</h3>
                            <p class="text-primary text-center mt-3" style="width:80%; margin: auto;">rozwiązujemy sprawy spadkowe szybko i sprawnie</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-12 my-3">
                <a href="#" class="text-decoration-none w-100">
                    <div class="model shadow bg-white d-flex flex-column align-items-center justify-content-center">
                        <div class="vicon d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-poszkodowani.webp" class="img-fluid" alt="...">
                        </div>
                        <div class="model-name mx-3 mt-sm-3">
                            <h3 class="text-black text-center">Konsumenci</h3>
                            <p class="text-primary text-center mt-3" style="width:80%; margin: auto;">skutecznie negocjujemy z bankami i pomagamy naszym Klientom odzyskać nadpłacone środki</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-12 my-3">
                <a href="/uslugi-prawne/poszkodowani/" class="text-decoration-none w-100">
                    <div class="model shadow bg-white d-flex flex-column align-items-center justify-content-center">
                        <div class="vicon d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-poszkodowani.webp" class="img-fluid" alt="...">
                        </div>
                        <div class="model-name mx-3 mt-sm-3">
                            <h3 class="text-black text-center">Poszkodowani</h3>
                            <p class="text-primary text-center mt-3" style="width:80%; margin: auto;">skutecznie negocjujemy z bankami i pomagamy naszym Klientom odzyskać nadpłacone środki</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-12 my-3">
                <a href="/uslugi-prawne/przedsiebiorcy/" class="text-decoration-none w-100 d-flex flex-column align-items-center justify-content-start">
                    <div class="model shadow bg-white d-flex flex-column align-items-center justify-content-center">
                        <div class="vicon d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-przedsiebiorcy-v1.webp" class="img-fluid" alt="...">
                        </div>
                        <div class="model-name mx-3 mt-sm-3">
                            <h3 class="text-black text-center">Przedsiębiorcy</h3>
                            <p class="text-primary text-center mt-3" style="width:80%; margin: auto;">skutecznie negocjujemy z bankami i pomagamy naszym Klientom odzyskać nadpłacone środki</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>