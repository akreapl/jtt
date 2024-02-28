<?php /* Template Name: Strona osoby */ ?>

<?php
get_header('page');
?>
<?php
include_once('inc-page-header.php');
?>

<div class="page-container">
    <div class="container">
        <div class="row pb-5 mb-3 d-flex justify-content-center" style="text-align:justify;">
            <div class="col-md-4 col-sm-12 text-justify pb-5 mb-3">
                <?php
                echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-fluid person-border'));
                ?>
            </div>
            <div class="col-md-8 col-sm-12 text-justify pb-5 mb-3" style="text-align: justify;">
                <?php
                $personemail = get_post_meta($post->ID, 'person_email', true);
                $personlinkedin = get_post_meta($post->ID, 'person_linkedin', true);
                $persontitle = get_post_meta($post->ID, 'person_title', true);
                $personscriptschema = get_post_meta($post->ID, 'person_script_schema', true);
                $personmobile = get_post_meta($post->ID, 'person_mobile', true);
                echo "<h3>" . $persontitle . "</h3>";

                the_content();

                echo "<p class=\"text-primary p-3\"><svg fill=\"#531e1e\" style=\"width:22px; height: auto;\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">"
                    . "<path d=\"M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z\" />"
                    . "</svg> <a class=\"text-primary text-decoration-none p-3\" href=\"mailto:" . $personemail . "\">" . $personemail . "</a>"
                    . "</p>";

                echo "<p class=\"text-primary p-3\"><svg fill=\"#531e1e\" style=\"width:22px; height: auto;\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path d=\"M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z\"/></svg>"
                    . "<a class=\"text-primary text-decoration-none p-3\" href=" . $personlinkedin . ">Mój profil na LinkedIn</a>"
                    . "</p>";

                if ($personmobile != '') {
                    echo "<p class=\"text-primary p-3\"><svg fill=\"#531e1e\" style=\"width:22px; height: auto;\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z\"/></svg>"
                        . "<a class=\"text-primary text-decoration-none p-3\" href=\"tel: " . str_replace(' ', '', $personmobile) . "\">tel." . $personmobile . "</a>"
                        . "</p>";
                }
                echo $personscriptschema;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>