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
    $my_query = new WP_Query(array('cat' => $catid, 'posts_per_page' => $numberofposts));
    if ($my_query->have_posts()) {
        while ($my_query->have_posts()) {
            $my_query->the_post();
            global $post;
            echo "<div class=\"col-md-3 col-sm-12 d-flex\">"
                . "<a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">"
                . "<div class=\"news shadow-sm rounded-4 pb-1\">"
                . "<div class=\"news-img rounded-4 overflow-hidden\">"
                //. "<img src=\"$thumbnail\"  alt=\"" . get_the_title($post->ID) . "\" class=\"img-fluid lazy rounded-3\" />"
                . get_the_post_thumbnail($post->ID, $size = 'thumbnail', ['class' => 'lazy rounded-3'])
                . "</a>"
                . "</div>"
                . "<div class=\"news-title mx-3\">"
                . "<p class=\"fs-5 my-1\"><a href=\"" . get_permalink($post->ID) . "\" class=\"text-decoration-none\">" . get_the_title($post->ID) . "</a></p>"
                . "</div>"
                . "<div class=\"news-date text-muted mx-3 small\">"
                . "<p class=\"my-0\">Data pub. " . get_the_time('m-d-Y', $post->ID) . "</p>"
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

function makeemail()
{
    $contactdate      = date("Y-m-d H:i:s");
    $clientname     = filter_input(INPUT_POST, 'clientname');
    $email          = filter_input(INPUT_POST, 'email');
    $phone          = filter_input(INPUT_POST, 'phone');
    $city           = filter_input(INPUT_POST, 'city');
    $acceptance     = filter_input(INPUT_POST, 'acceptance');
    $acceptancedict = "NIE";
    if ($acceptance == "on") {
        $acceptancedict = "TAK";
    }

    $message        =  '<p style="font-size:12px;">Data kontaktu: <b>' . $contactdate . '</b>' .
        '<br />Imię: <b>' . $clientname . '</b>' .
        '<br />Telefon: <b>' . $phone . '</b>' .
        '<br />Email: <b>' . $email . '</b>' .
        '<br />Miejscowość: <b>' . $city . '</b>' .
        '<br />Akceptacja regulaminu i polityki prywatności: <b>' . $acceptancedict . '</b>';

    $to             = "info@akrea.pl,";
    $from           = "noreply@akrea.pl";
    $subject        = 'Kontakt ze strony viviamo.pl';

    $headers        = 'MIME-Version: 1.0' . "\r\n";
    $headers        .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers        .= 'From: ' . $from . "\r\n";

    mail($to, $subject, $message, $headers);
}

function show_people($page_id, $numberofpages)
{
    $mypages = get_pages(array('child_of' => $page_id, 'parent' => $page_id, 'number' => $numberofpages, 'posts_per_page' => $numberofpages, 'sort_column' => 'menu_order', 'sort_order' => 'ASC'));
    if ($mypages) {
        $i = 0;
        foreach ($mypages as $mypage) {
            setup_postdata($mypage);
            $thumbnailid = get_post_thumbnail_id($mypage->ID);
            $thumbnailurl = wp_get_attachment_url($thumbnailid);
            $defaultthumbnail = get_template_directory_uri() . '/img/logo.svg';
            $thumbnailalt = get_post_meta($thumbnailid, '_wp_attachment_image_alt', TRUE);
            if ($thumbnailurl != '') {
                $thumbnailurl;
            } else {
                $thumbnailurl = $defaultthumbnail;
            }

            $personfunction = get_post_meta($mypage->ID, 'function', true);
            $personemail = get_post_meta($mypage->ID, 'email', true);

            echo "<div class=\"col-md-4 col-sm-12\">"
                . "<a href=\"" . get_permalink($mypage->ID) . "\"><img src=\"" . $thumbnailurl . "\" alt=\"" . $thumbnailalt . "\" class=\"img-fluid lazy\" /></a>"
                . "<p class=\"pt-3 fs-4 text-primary\">" . $personfunction . "</p>"
                . "<p class=\"pt-3 fs-4 text-black\">" . $personemail . "</p>"
                . "</div>";
            $i++;
        }
    }
}
