<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// About
add_action('init', 'about');
function about() {
    $labels = array(
        'name' => __( 'Quienes Somos' ),
        'singular_name' => __( 'About Sección' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Sección' ),
        'edit_item' => __( 'Editar Sección' ),
        'new_item' => __( 'Nueva Sección'),
        'view_item' => __( 'Ver Producto'),
        'search_items' => __( 'Buscar Producto'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-generic',
        'public' => true,
        'rewrite' => array( 'slug' => 'about' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
//         'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'about' , $args );
    flush_rewrite_rules();
}
// wemake -- Que Hacemos
add_action('init', 'wemake');
function wemake() {
    $labels = array(
        'name' => __( 'Que Hacemos' ),
        'singular_name' => __( 'wemake' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Sección' ),
        'edit_item' => __( 'Editar Sección' ),
        'new_item' => __( 'Nueva Sección'),
        'view_item' => __( 'Ver Sección'),
        'search_items' => __( 'Buscar Producto'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-generic',
        'public' => true,
        'rewrite' => array( 'slug' => 'wemake' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        //'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'wemake' , $args );
    flush_rewrite_rules();
}
// Servicios services
add_action('init', 'services');
function services() {
    $labels = array(
        'name' => __( 'Servicios' ),
        'singular_name' => __( 'services' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Servicio' ),
        'edit_item' => __( 'Editar Servicio' ),
        'new_item' => __( 'Nueva Servicio'),
        'view_item' => __( 'Ver Servicio'),
        'search_items' => __( 'Buscar Servicio'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-generic',
        'public' => true,
        'rewrite' => array( 'slug' => 'services' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'services' , $args );
    flush_rewrite_rules();
}
// Cursos
add_action('init', 'courses');
function courses() {
    $labels = array(
        'name' => __( 'Cursos' ),
        'singular_name' => __( 'courses' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Curso' ),
        'edit_item' => __( 'Editar Curso' ),
        'new_item' => __( 'Nueva Curso'),
        'view_item' => __( 'Ver Curso'),
        'search_items' => __( 'Buscar Curso'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-generic',
        'public' => true,
        'rewrite' => array( 'slug' => 'courses' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'courses' , $args );
    flush_rewrite_rules();
}



/* SEO WordPress a la brava
 Uso:
 1. agrega este código a tu fichero functions.php
 2. reempleza la cadena $default_keywords con las tuyas
 3. añade <?php echo seo_wp_bravo(); ?> al archivo header.php
 4. comprueba que todo funciona bien y no has roto nada

 Opcional: añade palabras clave o una descripción, título a cualquier entrada o página usando estas claves de campo personalizado:

 mm_seo_desc
 mm_seo_keywords
 mm_seo_title

Para migrar desde cualquier plugin SEO reemplaza sus claves de campo personalizado con las claves anteriores. Más información:

 http://ayudawp.com/seo-wordpress-sin-plugins/
*/
function seo_wp_bravo() {
    global $page, $paged, $post;
    $default_keywords = 'Lenovo, SuperCopa, Mundial, Rusia 2018, Premios';
    $output = '';

    // descripción
    $seo_desc = get_post_meta($post->ID, 'mm_seo_desc', true);
    $description = get_bloginfo('description', 'display');
    $pagedata = get_post($post->ID);
    if (is_singular()) {
        if (!empty($seo_desc)) {
            $content = $seo_desc;
        } else if (!empty($pagedata)) {
            $content = apply_filters('the_excerpt_rss', $pagedata->post_content);
            $content = substr(trim(strip_tags($content)), 0, 155);
            $content = preg_replace('#\n#', ' ', $content);
            $content = preg_replace('#\s{2,}#', ' ', $content);
            $content = trim($content);
        }
    } else {
        $content = $description;
    }
    $output .= '<meta name="description" content="' . esc_attr($content) . '">' . "\n";

    // palabras clave
    $keys = get_post_meta($post->ID, 'mm_seo_keywords', true);
    $cats = get_the_category();
    $tags = get_the_tags();
    if (empty($keys)) {
        if (!empty($cats)) foreach($cats as $cat) $keys .= $cat->name . ', ';
        if (!empty($tags)) foreach($tags as $tag) $keys .= $tag->name . ', ';
        $keys .= $default_keywords;
    }
    $output .= "\t\t" . '<meta name="keywords" content="' . esc_attr($keys) . '">' . "\n";

    // robots
    if (is_category() || is_tag()) {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        if ($paged > 1) {
            $output .=  "\t\t" . '<meta name="robots" content="noindex,follow">' . "\n";
        } else {
            $output .=  "\t\t" . '<meta name="robots" content="index,follow">' . "\n";
        }
    } else if (is_home() || is_singular()) {
        $output .=  "\t\t" . '<meta name="robots" content="index,follow">' . "\n";
    } else {
        $output .= "\t\t" . '<meta name="robots" content="noindex,follow">' . "\n";
    }

    // títulos
    $title_custom = get_post_meta($post->ID, 'mm_seo_title', true);
    $url = ltrim(esc_url($_SERVER['REQUEST_URI']), '/');
    $name = get_bloginfo('name', 'display');
    $title = trim(wp_title('', false));
    $cat = single_cat_title('', false);
    $tag = single_tag_title('', false);
    $search = get_search_query();

    if (!empty($title_custom)) $title = $title_custom;
    if ($paged >= 2 || $page >= 2) $page_number = ' | ' . sprintf('Página %s', max($paged, $page));
    else $page_number = '';

    if (is_home() || is_front_page()) $seo_title = $name . ' | ' . $description;
    elseif (is_singular())            $seo_title = $name . ' | ' . $title;
    elseif (is_tag())                 $seo_title = $name . ' | ' .'Archivo de la etiqueta: ' . $tag;
    elseif (is_category())            $seo_title = $name . ' | ' .'Archivo de la categoría: ' . $cat;
    elseif (is_archive())             $seo_title = $name . ' | ' .'Archivo: ' . $title ;
    elseif (is_search())              $seo_title = $name . ' | ' .'Búsqueda: ' . $search;
    elseif (is_404())                 $seo_title = $name . ' | ' .'404 - No encontrado: ' . $url;
    else                              $seo_title = $name . ' | ' . $description;

    $output .= "\t\t" . '<title>' . esc_attr($seo_title . $page_number) . '</title>' . "\n";

    return $output;
}