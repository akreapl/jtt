<?php

/**
 * functions
 */

if (!function_exists('akreawp_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     */
    function akreawp_setup()
    {
        /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        set_post_thumbnail_size(600, 600, true);
        add_theme_support('post-thumbnails', array('post, page'));
        /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
        add_theme_support('html5', array(
            'gallery',
            'caption'
        ));

        /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
        add_theme_support('post-formats', array('gallery',));
    }
endif; // akreawp_setup endif

add_action('after_setup_theme', 'akreawp_setup');

/**
 * Registers a widget area.
 */

function akreawp_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Dane kontaktowe na stronie kontaktu', 'akreawp'),
        'id'            => 'sidebar-1',
        'description'   => __('Dane kontaktowe.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Table main', 'akreawp'),
        'id'            => 'table-main',
        'description'   => __('Widget tabeli na górze strony głównej.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Tekst do kontaktu', 'akreawp'),
        'id'            => 'widget-contact-footer-txt',
        'description'   => __('Tekst zachęcający do kontaktu w stopce.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<p class="d-none">',
        'after_title'   => '</p>',
    ));

    register_sidebar(array(
        'name'          => __('Stopka 1 kolumna', 'akreawp'),
        'id'            => 'widget-footer-1',
        'description'   => __('Pierwszy obszar widgetów w stopce.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="fw-bolder">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Stopka 2 kolumna', 'akreawp'),
        'id'            => 'widget-footer-2',
        'description'   => __('Drugi obszar widgetów w stopce.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="fw-bolder">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Stopka 3 kolumna', 'akreawp'),
        'id'            => 'widget-footer-3',
        'description'   => __('Trzeci obszar widgetów w stopce.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="fw-bolder">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Stopka 4 kolumna', 'akreawp'),
        'id'            => 'widget-footer-4',
        'description'   => __('Czwarty obszar widgetów w stopce.', 'akreawp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="fw-bolder">',
        'after_title'   => '</h5>',
    ));

    register_sidebar(array(
        'name'          => __('Mapa google (ustaw 100% width)', 'akreawp'),
        'id'            => 'map-widget-1',
        'description'   => __('Mapka google (własny html, 100% width)', 'akreawp'),
        'before_widget' => '<div class="col-12 no-gutters" style="margin:0 auto; padding:0px; line-height:0em;">',
        'after_widget'  => '</div>',
        'before_title'  => '<!-- ',
        'after_title'   => ' -->',
    ));
}
add_action('widgets_init', 'akreawp_widgets_init');


/**
 * Custom template tags for this theme.
 */

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    }
    return $title;
});

//Register menus

function mainmenu_setup()
{
    register_nav_menus(
        array(
            'main' => __('Główne menu', 'akreawp'),
            'footer' => __('Menu w stopce', 'akreawp'),
        )
    );
}
add_action('after_setup_theme', 'mainmenu_setup');

// function footer_menu_setup()
// {
//     register_nav_menus(
//         array(
//             'footer_menu' => __('Menu w stopce', 'akreawp'),
//         )
//     );
// }
// add_action('after_setup_theme', 'footer_menu_setup');




//Remove WP version
function remove_version()
{
    return '';
}
add_filter('the_generator', 'remove_version');

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more)
{
    global $post;
    return '... <p class="align-self-end d-flex flex-row justify-content-end"><a class="more-link btn btn-primary" href="' . get_permalink() . '">Więcej</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length($length)
{
    return 43;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//Set default thumbnail
function thumbfoto()
{
    $default = esc_url(get_template_directory_uri()) . '/img/logo.svg';
    if (has_post_thumbnail() && !is_archive()) {
        $bgfoto = the_post_thumbnail_url();
    } else {
        $bgfoto = $default;
    }
    echo $bgfoto;
}

//display category name
function catname($catname)
{
    echo get_cat_name(get_category_by_slug($catname)->term_id);
}

//display category description
function catdescription($catname)
{
    echo category_description(get_category_by_slug($catname)->term_id);
}

//display current year and copyright in footer
function copyright()
{
    echo '&copy ';
    echo date('Y');
    echo ' ';
    echo bloginfo();
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');



// Register bootsteap pagination
require_once('wp-bootstrap-pagination.php');

//Youtube movies responsive
add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);
function wrap_embed_with_div($html, $url, $attr)
{
    return "<div class=\"container\">" . $html . "</div>";
}

function showposts($catid, $numberofposts)
{
    $myposts = get_posts(array('cat' => $catid, 'posts_per_page' => $numberofposts));
    if ($myposts) {
        foreach ($myposts as $mypost) {
            setup_postdata($mypost);
            $thumbnailurl = wp_get_attachment_url(get_post_thumbnail_id($mypost->ID));
            $defaultthumbnail = get_template_directory_uri() . '/img/logo.svg';
            if ($thumbnailurl != '') {
                $thumbnailurl;
            } else {
                $thumbnailurl = $defaultthumbnail;
            }
            echo "<div class=\"col-md-4 col-sm-12\">"
                . "<a href=\"" . get_permalink($mypost->ID) . "\"><img src=\"$thumbnailurl\" class=\"img-fluid rounded-4\" loading=\"lazy\" /></a>"
                . "<h2><a href=\"" . get_permalink($mypost->ID) . "\">" . get_the_title($mypost->ID) . "</a></h2>"
                . "<p class=\"text-justify\">" . get_the_excerpt($mypost->ID) . "</p>"
                . "</div>";
        }
    }
    wp_reset_postdata();
}

function showposts2($catid, $numberofposts)
{
    $my_query = new WP_Query(array('cat' => $catid, 'posts_per_page' => $numberofposts));
    if ($my_query->have_posts()) {

        while ($my_query->have_posts()) {
            $my_query->the_post();
            global $post;
            $thumbnailurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $defaultthumbnail = get_template_directory_uri() . '/img/logo.svg';
            if ($thumbnail != '') {
                $thumbnail;
            } else {
                $thumbnail = $defaultthumbnail;
            }
        }
    }
    wp_reset_postdata();
}


function shownews($catid, $numberofposts)
{
    if (is_mobile() == 1) {
        $numberofposts = 2;
    } else {
        $numberofposts = 3;
    };
    $my_query = new WP_Query(array('cat' => $catid, 'posts_per_page' => $numberofposts));
    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post();
            global $post;
            echo "<div class=\"col-md-4 col-sm-12 d-flex\">"
                . "<a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">"
                . "<div class=\"news shadow-sm pb-1\">"
                . "<div class=\"news-img overflow-hidden\">"
                . get_the_post_thumbnail($post->ID, $size = 'post-thumbnail', ['class' => 'img-fluid lazy'])
                . "</a>"
                . "</div>"
                . "<div class=\"news-title mx-3\">"
                . "<p class=\"fs-5 my-1\"><a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">" . get_the_title($post->ID) . "</a></p>"
                . "</div>"
                //. "<div class=\"news-date text-muted mx-3 small\">"
                //. "<p class=\"my-0\">Data pub. " . get_the_time('m-d-Y', $post->ID) . "</p>"
                //. "</div>"
                . "<div class=\"news-excerpt mx-3 my-1 align-self-end\">"
                . "<p class=\"news-excerpt-text text-black mt-1\">" . get_the_excerpt($post->ID) . "</p>"
                . "</div>"
                . "</div>"
                . "</div>";
        }
    }
    wp_reset_postdata();
}

function shownewsother($catid)
{
    $ida = get_the_ID();
    //echo "POST ID" . $ida;
    $my_query = new WP_Query(array('cat' => $catid, 'posts_per_page' => 3, 'post__not_in' => array($ida)));
    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post();
            global $post;
            echo "<div class=\"col-md-4 col-sm-12 d-flex\">"
                . "<a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">"
                . "<div class=\"news shadow-sm pb-1\">"
                . "<div class=\"news-img overflow-hidden\">"
                . get_the_post_thumbnail($post->ID, $size = 'post-thumbnail', ['class' => 'img-fluid lazy'])
                . "</a>"
                . "</div>"
                . "<div class=\"news-title mx-3\">"
                . "<p class=\"fs-5 my-1\"><a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">" . get_the_title($post->ID) . "</a></p>"
                . "</div>"
                . "<div class=\"news-excerpt mx-3 my-1 align-self-end\">"
                . "<p class=\"news-excerpt-text text-black mt-1\">" . get_the_excerpt($post->ID) . "</p>"
                . "</div>"
                . "</div>"
                . "</div>";
        }
    }
    wp_reset_postdata();
}

function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Strona główna</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        $parent3 = wp_get_post_parent_id(get_post_parent());
        if ($parent3 != 0) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            echo '<a href="' . get_permalink($parent3) . '">' . get_the_title($parent3) . '</a>';
        }

        if (has_post_parent()) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            echo '<a href="' . get_permalink(get_post_parent()) . '">' . get_the_title(get_post_parent()) . '</a>';
        }
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Wyniki wyszukiwania... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

function makeemail_credit()
{
    $emaildate      = date("Y-m-d H:i:s");
    $bank =  filter_input(INPUT_POST, 'bank');
    $credityear =  filter_input(INPUT_POST, 'credit-year');
    $month =  filter_input(INPUT_POST, 'month');
    $creditamount =  filter_input(INPUT_POST, 'credit-amount');
    $currency =  filter_input(INPUT_POST, 'currency');
    $creditinstallment =  filter_input(INPUT_POST, 'credit-installment');
    $creditmarginyes =  filter_input(INPUT_POST, 'credit-margin-yes');
    $creditmarginno =  filter_input(INPUT_POST, 'credit-margin-no');
    $creditmarginvalue =  filter_input(INPUT_POST, 'credit-margin-value');
    $referencetype =  filter_input(INPUT_POST, 'reference-type');
    $clientname =  filter_input(INPUT_POST, 'clientname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $consent = filter_input(INPUT_POST, 'consent');
    $consentdict = "NIE";
    if ($consent == "on") {
        $consentdict = "TAK";
    }

    $message        =  '<p style="font-size:1.3em;">Data zapytania: <b>' . $emaildate . '</b>' .
        '<br />Imię i nazwisko: <b>' . $clientname . '</b>' .
        '<br />Email: <b>' . $email . '</b>' .
        '<br />Telefon: <b>' . $phone . '</b><br /><br />' .
        '<br />Bank: <b>' . $bank . '</b>' .
        '<br />Data zaciągnięcia kredytu (miesiąc-rok): <b>' . $month . '-' . $credityear . '</b>' .
        '<br />Wysokość kredytu: <b>' . $creditamount . '</b>' .
        '<br />Waluta kredytu: <b>' . $currency . '</b>' .
        '<br />Ilość rat: <b>' . $creditinstallment . '</b>' .
        '<br />Marża znana: <b>' . $creditmarginyes . '</b>' .
        '<br />Marża nieznana: <b>' . $creditmarginno . '</b>' .
        '<br />Wysokość marży: <b>' . $creditmarginvalue . '</b>' .
        '<br />Rodzaj referencyjnej wysokości oprocentowania: <b>' . $referencetype . '</b>' .
        '<br />Akceptacja Polityki Prywatnośći: <b>' . $consentdict . '</b>';

    $clientmessage = '<b>Szanowny Kliencie,</b><br /><br />
                        Kancelaria JTT potwierdza otrzymanie Państwa zapytania. 
                        <br /><br />
                        Informujemy, że nasi prawnicy przeanalizują zgłoszenie i skontaktują się z Państwem najpóźniej w ciągu 2 dni roboczych.
                        <br /><br /><br /><br />
                        Z poważaniem<br />
                        Kancelaria JTT<br /><br /><hr />
                        <b>SZCZEGÓŁY ZAPYTANIA:</b><br />' . $message;

    $to             = "info@akrea.pl";
    $from           = "no-reply@jtt.akrea.pl";
    $subject        = 'TEST Zapytanie od ' . $clientname;
    $subject2       = 'TEST Potwierdzenie otrzymania zapytania | Kancelaria JTT';

    $headers        = 'MIME-Version: 1.0' . "\r\n";
    $headers        .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers        .= 'From: ' . $from . "\r\n";

    mail($to, $subject, $message, $headers);
    mail($email, $subject2, $clientmessage, $headers);
}


function makeemail_death()
{
    $emaildate      = date("Y-m-d H:i:s");

    $clientname =  filter_input(INPUT_POST, 'clientname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $deathdate = filter_input(INPUT_POST, 'death-date');
    $familytype = filter_input(INPUT_POST, 'family-type');
    $relation = filter_input(INPUT_POST, 'relation');
    $livingstatus = filter_input(INPUT_POST, 'living-status');
    $medictreatment = filter_input(INPUT_POST, 'medic-treatment');
    $doctor = filter_input(INPUT_POST, 'doctor');
    $personallife = filter_input(INPUT_POST, 'personal-life');
    $proffesionallife = filter_input(INPUT_POST, 'professional-life');
    $age = filter_input(INPUT_POST, 'age');
    $consent = filter_input(INPUT_POST, 'consent');
    $consentdict = "NIE";
    if ($consent == "on") {
        $consentdict = "TAK";
    }

    $message        =  '<p style="font-size:1.3em;">Data zapytania: <b>' . $emaildate . '</b>' .
        '<br />Imię i nazwisko: <b>' . $clientname . '</b>' .
        '<br />Email: <b>' . $email . '</b>' .
        '<br />Telefon: <b>' . $phone . '</b><br /><br />' .
        '<br />Data śmierci/wypadku: <b>' . $deathdate . '</b><br />' .
        '<br />Stopień pokrewieństwa <b>' . $familytype . '</b><br />' .
        '<br />Więzi emocjonalne <b>' . $relation . '</b><br />' .
        '<br />Wspólne zamieszkiwanie <b>' . $livingstatus . '</b><br />' .
        '<br />Zażywanie lekarstw <b>' . $medictreatment . '</b><br />' .
        '<br />Korzystanie z pomocy lekarza <b>' . $doctor . '</b><br />' .
        '<br />Wpływ na życie osobiste <b>' . $personallife . '</b><br />' .
        '<br />Wpływ na życie zawodowe <b>' . $proffesionallife . '</b><br />' .
        '<br />Wiek w chwili smierci/wypadku <b>' . $age . '</b><br />' .
        '<br />Akceptacja Polityki Prywatnośći: <b>' . $consentdict . '</b>';

    $clientmessage = '<b>Szanowny Kliencie,</b><br /><br />
                        Kancelaria JTT potwierdza otrzymanie Państwa zapytania. 
                        <br /><br />
                        Informujemy, że nasi prawnicy przeanalizują zgłoszenie i skontaktują się z Państwem najpóźniej w ciągu 2 dni roboczych.
                        <br /><br /><br /><br />
                        Z poważaniem<br />
                        Kancelaria JTT<br /><br /><hr />
                        <b>SZCZEGÓŁY ZAPYTANIA:</b><br />' . $message;

    $to             = "info@akrea.pl";
    $from           = "no-reply@jtt.akrea.pl";
    $subject        = 'TEST Zapytanie od ' . $clientname;
    $subject2       = 'TEST Potwierdzenie otrzymania zapytania | Kancelaria JTT';

    $headers        = 'MIME-Version: 1.0' . "\r\n";
    $headers        .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers        .= 'From: ' . $from . "\r\n";

    mail($to, $subject, $message, $headers);
    mail($email, $subject2, $clientmessage, $headers);
}

function makeemail_health()
{
    $emaildate      = date("Y-m-d H:i:s");

    $clientname =  filter_input(INPUT_POST, 'clientname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $age = filter_input(INPUT_POST, 'age');
    $accidentdate = filter_input(INPUT_POST, 'accident-date');
    $hospital = filter_input(INPUT_POST, 'hospital');
    $hospitaltime = filter_input(INPUT_POST, 'hospital-time');
    $mentalhelp = filter_input(INPUT_POST, 'mental-help');
    $personallife = filter_input(INPUT_POST, 'personal-life');
    $proffesionallife = filter_input(INPUT_POST, 'professional-life');
    $injuries = filter_input(INPUT_POST, 'injuries');
    $difficulties = filter_input(INPUT_POST, 'difficulties');
    $consent = filter_input(INPUT_POST, 'consent');
    $consentdict = "NIE";
    if ($consent == "on") {
        $consentdict = "TAK";
    }

    $message        =  '<p style="font-size:1.3em;">Data zapytania: <b>' . $emaildate . '</b>' .
        '<br />Imię i nazwisko: <b>' . $clientname . '</b>' .
        '<br />Email: <b>' . $email . '</b>' .
        '<br />Telefon: <b>' . $phone . '</b><br /><br />' .
        '<br />Wiek <b>' . $age . '</b><br />' .
        '<br />Data wypadku: <b>' . $accidentdate . '</b><br />' .
        '<br />Pobyt w szpitalu: <b>' . $hospital . '</b><br />' .
        '<br />Długośc hospitalizacji: <b>' . $hospitaltime . '</b><br />' .
        '<br />Pomoc psychologa/psychiatry: <b>' . $mentalhelp . '</b><br />' .
        '<br />Wpływ na życie osobiste <b>' . $personallife . '</b><br />' .
        '<br />Wpływ na życie zawodowe <b>' . $proffesionallife . '</b><br />' .
        '<br />Odniesione obrażenia: <b>' . $injuries . '</b><br />' .
        '<br />Odczuwalne skutki wypadku: <b>' . $difficulties . '</b><br />' .
        '<br />Akceptacja Polityki Prywatnośći: <b>' . $consentdict . '</b>';

    $clientmessage = '<b>Szanowny Kliencie,</b><br /><br />
                        Kancelaria JTT potwierdza otrzymanie Państwa zapytania. 
                        <br /><br />
                        Informujemy, że nasi prawnicy przeanalizują zgłoszenie i skontaktują się z Państwem najpóźniej w ciągu 2 dni roboczych.
                        <br /><br /><br /><br />
                        Z poważaniem<br />
                        Kancelaria JTT<br /><br /><hr />
                        <b>SZCZEGÓŁY ZAPYTANIA:</b><br />' . $message;

    $to             = "info@akrea.pl";
    $from           = "no-reply@jtt.akrea.pl";
    $subject        = 'TEST Zapytanie od ' . $clientname;
    $subject2       = 'TEST Potwierdzenie otrzymania zapytania | Kancelaria JTT';

    $headers        = 'MIME-Version: 1.0' . "\r\n";
    $headers        .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers        .= 'From: ' . $from . "\r\n";

    mail($to, $subject, $message, $headers);
    mail($email, $subject2, $clientmessage, $headers);
}

function makeemail_shortform()
{
    $emaildate      = date("Y-m-d H:i:s");

    $clientname =  filter_input(INPUT_POST, 'clientname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $info = filter_input(INPUT_POST, 'info');
    $consent = filter_input(INPUT_POST, 'consent');
    $consentdict = "NIE";
    if ($consent == "on") {
        $consentdict = "TAK";
    }

    $message        =  '<p style="font-size:1.3em;">Data zapytania: <b>' . $emaildate . '</b>' .
        '<br />Imię i nazwisko: <b>' . $clientname . '</b>' .
        '<br />Email: <b>' . $email . '</b>' .
        '<br />Telefon: <b>' . $phone . '</b><br /><br />' .
        '<br />Wiadmość: <b><br />' . $info . '</b><br />' .
        '<br />Akceptacja Polityki Prywatnośći: <b>' . $consentdict . '</b>';

    $clientmessage = '<b>Szanowny Kliencie,</b><br /><br />
                        Kancelaria JTT potwierdza otrzymanie Państwa zapytania. 
                        <br /><br />
                        Informujemy, że nasi prawnicy przeanalizują zgłoszenie i skontaktują się z Państwem najpóźniej w ciągu 2 dni roboczych.
                        <br /><br /><br /><br />
                        Z poważaniem<br />
                        Kancelaria JTT<br /><br /><hr />
                        <b>SZCZEGÓŁY ZAPYTANIA:</b><br />' . $message;

    $to             = "info@akrea.pl";
    $from           = "no-reply@jtt.akrea.pl";
    $subject        = 'TEST Zapytanie od ' . $clientname;
    $subject2       = 'TEST Potwierdzenie otrzymania zapytania | Kancelaria JTT';

    $headers        = 'MIME-Version: 1.0' . "\r\n";
    $headers        .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers        .= 'From: ' . $from . "\r\n";

    mail($to, $subject, $message, $headers);
    mail($email, $subject2, $clientmessage, $headers);
}

function is_mobile()
{
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
        return true;
    } else {
        return false;
    }
}

function show_people2($page_id)
{
    if (is_mobile() == 1) {
        $numberofpages = 3;
    } else {
        $numberofpages = 999;
    };
    $my_query = new WP_Query(array('post_type' => 'page', 'post_parent' => $page_id, 'order' => 'asc', 'orderby' => 'menu_order', 'posts_per_page' => $numberofpages));

    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post();
            global $post;
            $thumbnailurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $imgalt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
            $pagetitle = get_the_title($post->ID);
            $personfunction = get_post_meta($post->ID, 'function', true);

            echo "<div class=\"col-md-4 col-sm-12 mt-0 mb-5\">"
                . "<a href=\"" . get_permalink($post->ID) . "\" class=\"d-flex justify-content-center lawyer\">"
                . "<div class=\"lawyer overflow-hidden d-flex justify-content-center align-items-center\">"
                . "<div class=\"position-relative\">"
                . "<img src=\"" . $thumbnailurl . "\" alt=\"" . $imgalt . "\" class=\"img-fluid lazy\" />"
                . "<div class=\"lawyer-description position-absolute px-5\">"
                . "<p class=\"h3 mt-4\">" . $pagetitle . "</p>"
                . "<p>" . $personfunction . "</p>"
                . "</div>"
                . "</div>"
                . "</div>"
                . "</a>"
                . "</div>";
        }
    }
}

function show_people($page_id, $numberofpages)
{
    $mypages = get_pages(array('child_of' => $page_id, 'parent' => $page_id, 'number' => $numberofpages, 'posts_per_page' => $numberofpages, 'sort_column' => 'menu_order', 'sort_order' => 'ASC'));
    if (is_mobile() == 1) {
        $numberofpages = 3;
    };

    echo $numberofpages;

    if ($mypages) {
        $i = 0;
        foreach ($mypages as $mypage) {
            setup_postdata($mypage);
            $thumbnailid = get_post_thumbnail_id($mypage->ID);
            $thumbnailurl = wp_get_attachment_url($thumbnailid);
            $defaultthumbnail = get_template_directory_uri() . '/img/logo.png';
            $thumbnailalt = get_post_meta($thumbnailid, '_wp_attachment_image_alt', TRUE);
            if ($thumbnailurl != '') {
                $thumbnailurl;
            } else {
                $thumbnailurl = $defaultthumbnail;
            }

            $personfunction = get_post_meta($mypage->ID, 'function', true);
            $personscriptschema = get_post_meta($post->ID, 'person_script_schema', true);

            echo

            "<div class=\"col-md-4 col-sm-12 mt-0 mb-5\">"
                . "<a href=\"" . get_permalink($mypage->ID) . "\" class=\"d-flex justify-content-center lawyer\">"
                . "<div class=\"lawyer overflow-hidden d-flex justify-content-center align-items-center\">"
                . "<div class=\"position-relative\">"
                . "<img src=\"" . $thumbnailurl . "\" alt=\"" . $thumbnailalt . "\" class=\"img-fluid lazy\" />"
                . "<div class=\"lawyer-description position-absolute px-5\">"
                . "<p class=\"h3 mt-4\">" . get_the_title($mypage->ID) . "</p>"
                . "<p>" . $personfunction . "</p>"
                . "</div>"
                . "</div>"
                . "</div>"
                . "</a>"
                . "</div>"
                . $personscriptschema;
            $i++;
        }
    }
}

function generate_years($min)
{
    $min = $min;
    $max = date('Y');
    $i = $min;
    for ($i >= $min; $i <= $max; $i++) {
        echo "<option value=" . $i . ">" . $i . "</option>";
    }
}

function generate_months()
{
    $miesiace = array(
        "Styczeń",
        "Luty",
        "Marzec",
        "Kwiecień",
        "Maj",
        "Czerwiec",
        "Lipiec",
        "Sierpień",
        "Wrzesień",
        "Październik",
        "Listopad",
        "Grudzień"
    );

    foreach ($miesiace as $miesiac) {
        echo "<option value=" . $miesiac . ">" . $miesiac . "</option>";
    }
}


function show_forms()
{
    $mypage = get_page_by_title('Formularze');

    $my_query = new WP_Query(array('post_type' => 'page', 'post_parent' =>  $mypage->ID, 'order' => 'asc', 'orderby' => 'menu_order', 'posts_per_page' => 4));

    $items = $my_query->found_posts;

    if ($items >= 3 || $items < 2) {
        $col = 3;
    } else {
        $col = 6;
    }

    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post();
            global $post;
            $thumbnailurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $imgalt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

            echo "<div class=\"mb-4 col-sm-12 col-md-" . $col . "\">"
                . "<a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">"
                . "<div class=\"query-form d-flex flex-column align-items-center justify-content-center text-center p-5\">"
                . get_the_title($post->ID)
                . "</div>"
                . "</a>"
                . "</div>";
        }
    }
}
