<?php
/*==========================
Add stylesheets and javascript files
============================*/

function custom_theme_scripts(){
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    //wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    //Javascript Files
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*==========================
Adds Featured Images
============================*/
add_theme_support('post-thumbnails');

/*==========================
Custom Header Image
============================*/
$custom_header_image = array (
    'width'   => 520,
    'height'  => 150,
    'uploads' => true,
);
add_theme_support('custom-header', $custom_header_image);


/*==========================
Features Images
============================*/
 add_theme_support('post-thumbnails');

 /*==========================
Post Data Information
============================*/
function post_data(){
    $archive_year = get_the_time('Y');
    $archive_month = get_the_time('m');
    $archive_day = get_the_time('d');

    ?>
    <p>Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?> </a> | Published on: <a href="<?php echo get_browser_gey_link($archive_year,$archive_month,$archive_day);?> "> <?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>
    <?php
}
 /*==========================
Add menus to our theme
============================*/

function register_my_menus(){
    register_nav_menus(array(
        'main-menu'     => __('Main Menu'),
        'footer-left'   => __('Left Footer Menu'),
        'footer-middle' => __('Middle Footer Menu'),
        'footer-right'  => __('Right Footer Menu')
    ));
}

add_action('init', 'register_my_menus');

 /*==========================
Pagination links
============================*/
function kodasContentPagination(){
    global $wp_query;

    $big = 999999999; 
    $translated = __('page', 'mytextdomain' );

    echo paginate_links( array(
        'base' => str_replace('$big', '%#%', esc_url( get_pagenum_link( $big ))),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
    ) );
}
 ?>