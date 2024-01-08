<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<footer class="pt-5 pb-3 text-white" style="font-size:.85rem !important; background:#531e1e;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 mb-sm-0 mb-4 text-center text-md-left">
                <img class="img-fluid footerlogo" src="<?php echo get_template_directory_uri(); ?>/img/jtt-logo.png" alt="Kancelaria Prawna JTT Szczecin">
            </div>
            <div class="col-md-2 col-sm-12 mb-sm-0 mb-4 text-left">
                <?php
                // if (is_active_sidebar('widget-footer-2')) {
                //     dynamic_sidebar('widget-footer-2');
                // }
                ?>

            </div>

            <div class="col-md-2 col-sm-12 mb-sm-0 mb-4 text-left">
                <?php
                // if (is_active_sidebar('widget-footer-3')) {
                //     dynamic_sidebar('widget-footer-3');
                // }
                ?>

                <h5 class="">Menu </h5>
                <p>
                    Strona główna<br />
                    Kontakt<br />
                    <a class="text-decoration-none text-white" href="polityka-prywatnosci">Polityka prywatności</a>
                </p>
            </div>

            <div class="col-md-3 col-sm-12">
                <?php
                // if (is_active_sidebar('widget-footer-5')) {
                //     dynamic_sidebar('widget-footer-5');
                // }
                ?>
                <h5 class="">Kontakt</h5>
                <p>
                    <svg fill="#fff" style="width:20px; height: auto; margin-right:8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>
                    <a href="tel:+48914331066" class="text-white text-decoration-none">+48 91 433 10 66</a>
                    <br /><br />
                    <svg fill="#fff" style="width:20px; height: auto; margin-right:8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    <a href="mailto:kancelaria@kancelariajtt.pl" class="text-white text-decoration-none">kancelaria@kancelariajtt.pl</a>
                </p>


                <a class="wlink text-white text-decoration-none" aria-label="LinkedIn" href="#" target="_blank">
                    <svg fill="#fff" style="width:20px; height: auto; margin-right:8px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                    </svg> LinkedIn/KancelariaJTT
                </a>
            </div>

            <div class="col-md-3 col-sm-12">
                <h5 class="">Adres</h5>
                Kancelaria Radców Prawnych Jagiełło Tobolewski<br />
                Aleja Papieża Jana Pawła II 28/3<br />
                70-454 Szczecin
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <span class="copyright text-small"><?php copyright(); ?>, all rights reserved.</span>
                <p class="d-flex justify-content-end p-3">designed by <a class="text-white text-small text-decoration-none ms-1" href="https://akrea.pl">akrea.pl</a></p>
            </div>
        </div>
        <div id="scrolltop">
            <a href="#top" class="text-primary" title="Na górę" aria-label="Na górę">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="30" height="30">
                    <path fill="#ffffff" d="M352 352c-8.188 0-16.38-3.125-22.62-9.375L192 205.3l-137.4 137.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25C368.4 348.9 360.2 352 352 352z" />
                </svg>
            </a>
        </div>
    </div>
</footer>

<?php wp_footer();
?>

<script src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const scrollTop = document.getElementById('scrolltop')
    window.onscroll = () => {
        if (window.scrollY > 0) {
            scrollTop.style.visibility = "visible";
            scrollTop.style.opacity = 1;
        } else {
            scrollTop.style.visibility = "hidden";
            scrollTop.style.opacity = 0;
        }
    };
</script>
</body>

</html>