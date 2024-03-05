<?php
/* 
 * stopka motywu
 */
?>

<footer class="pt-5 pb-3 text-white" style="font-size:.85rem !important; background:#531e1e;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 mb-sm-0 mb-4 text-center text-md-start d-none d-md-block">
                <img class="img-fluid footerlogo" style="width:80vw;" src="<?php echo get_template_directory_uri(); ?>/img/jtt-logo.png" alt="Kancelaria Prawna JTT Szczecin">
            </div>
            <div class="col-md-3 col-sm-12 mb-sm-0 mb-4 text-center text-md-start">
                <?php
                if (is_active_sidebar('widget-footer-1')) {
                     dynamic_sidebar('widget-footer-1');
                }
                ?>
            </div>

            <div class="col-md-2 col-sm-12 text-center text-md-start">
                <?php
                if (is_active_sidebar('widget-footer-2')) {
                     dynamic_sidebar('widget-footer-2');
                }
                ?>
            </div>

            <div class="col-md-3 col-sm-12 text-center text-md-start">
                <?php
                if (is_active_sidebar('widget-footer-3')) {
                     dynamic_sidebar('widget-footer-3');
                }
                ?>
            </div>

            <div class="col-md-2 col-sm-12 text-center text-md-start">
				<?php
				if (is_active_sidebar('widget-footer-4')) {
                	dynamic_sidebar('widget-footer-4');
                }
				?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4 d-flex flex-column">
                <span class="copyright text-small"><?php copyright(); ?>, all rights reserved.</span>
                <span class="align-self-end p-0 m-0">designed by <a class="text-white text-small text-decoration-none" href="https://akrea.pl">akrea.pl</a></span>
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