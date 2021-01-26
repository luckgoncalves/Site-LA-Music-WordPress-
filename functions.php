<?php
add_image_size('quadrado', 400, 400, array('center', 'center'));
add_image_size('img_maps', 200, 200, array('center', 'center'));
add_image_size('circular', 93, 93, array('center', 'center'));
add_image_size('blog', 800, 400, array('center', 'center'));
add_image_size('noticia', 1280,720, true);
add_image_size('blog_list', 368,190, true);
add_image_size('blog_list_now', 368,190, array('left','center'));
add_image_size('blog_list_', 368,244, false);
add_image_size('slide_banner', 996, 1000, array('center', 'center'));
add_theme_support('post-thumbnails', array('post', 'page', 'testemunho', 'parceiros', 'servicos', 'clientes', 'equipe','redes_sociais'));



register_post_type(
    'testemunho',
    array(
        'labels' => array(
            'name' => __('Testemunhos'),
            'singular_name' => __('Testemunho'),
            'edit_item' => __('Editar Testemunho'),
            'add_new_item' => __('Adicionar novo Testemunho'),
        ),
        'public' => true,
        'supports' => array('thumbnail', 'editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);

register_post_type(
    'parceiros',
    array(
        'labels' => array(
            'name' => __('Parceiros'),
            'singular_name' => __('Parceiros'),
            'edit_item' => __('Editar Parceiro'),
            'add_new_item' => __('Adicionar novo parceiro'),
        ),
        'public' => true,
        'supports' => array('thumbnail', 'editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);

register_post_type(
    'clientes',
    array(
        'labels' => array(
            'name' => __('Clientes'),
            'singular_name' => __('Clientes'),
            'edit_item' => __('Editar cliente'),
            'add_new_item' => __('Adicionar novo cliente'),
        ),
        'public' => true,
        'supports' => array('thumbnail', 'editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);

register_post_type(
    'servicos',
    array(
        'labels' => array(
            'name' => __('Serviços'),
            'singular_name' => __('servicos'),
            'edit_item' => __('Editar serviço'),
            'add_new_item' => __('Adicionar nova serviço'),
        ),
        'public' => true,
        'supports' => array('thumbnail', 'editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);

register_post_type(
    'equipe',
    array(
        'labels' => array(
            'name' => __('Equipe'),
            'singular_name' => __('Equipe'),
            'edit_item' => __('Editar Equipe'),
            'add_new_item' => __('Adicionar novo membro'),
        ),
        'public' => true,
        'supports' => array('thumbnail', 'editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);
register_post_type(
    'Políticas',
    array(
        'labels' => array(
            'name' => __('Políticas de Privacídade'),
            'singular_name' => __('Política'),
            'edit_item' => __('Editar Política'),
            'add_new_item' => __('Adicionar nova Política'),
        ),
        'public' => true,
        'supports' => array('editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);

register_post_type(
    'termo_uso',
    array(
        'labels' => array(
            'name' => __('Termos de uso'),
            'singular_name' => __('termo'),
            'edit_item' => __('Editar Termos'),
            'add_new_item' => __('Adicionar novo Termo'),
        ),
        'public' => true,
        'supports' => array('editor', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);



register_post_type(
    'redes_sociais',
    array(
        'labels' => array(
            'name' => __('Redes Sociais'),
            'singular_name' => __('Rede Social'),
            'edit_item' => __('Editar Rede Social'),
            'add_new_item' => __('Adicionar nova Rede Social'),
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'menu_order', 'page-attributes'),
        'has_archive' => false,
        'taxonomies'  => array('category'),
        'rewrite'            => false,
        'query_var'          => false,
        'publicly_queryable' => false,
    )
);

function add_taxonomies_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
}

add_action( 'init', 'add_taxonomies_to_pages' );

if ( ! is_admin() ) {
    add_action( 'pre_get_posts', 'category_and_tag_archives' );
}

function category_and_tag_archives( $wp_query ) {
    $my_post_array = array('post','page');
    
    if ( $wp_query->get( 'tag' ) )
    $wp_query->set( 'post_type', $my_post_array );
}


function urlImageSized($id, $size = 'quadrado')
{
    $imagesized = wp_get_attachment_image_src($id, $size);
    return $imagesized[0];
}

if (is_admin()) { // admin actions

    add_action('admin_init', 'register_mysettings');
} else {
    // non-admin enqueues, actions, and filters
}


/** Step 2 (from text above). */
add_action('admin_menu', 'configuracoes');

/** Step 1. */
function configuracoes()
{
    add_options_page('Opções do tema', 'Opções do tema', 'manage_options', 'theme_options', 'theme_options');
    add_menu_page('Opções do tema', 'Opções do tema', 'manage_options', 'theme_options', 'theme_options');
}

/** Step 3. */
function theme_options()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    echo '<div class="wrap">';
    echo '<h1>Opções do tema</h1>';
    echo '<form method="post" action="options.php" enctype="multipart/form-data"> ';
    settings_fields('campos_options');
    do_settings_sections('campos_options');

?>

<table class="form-table">
    <tr valign="top">
        <th scope="row">URL Facebook</th>
        <td><input type="text" name="url_facebook" value="<?php echo esc_attr(get_option('url_facebook')); ?>" /></td>
    </tr>
    <tr valign="top">
        <th scope="row">URL Facebook</th>
        <td><input type="text" name="url_facebook" value="<?php echo esc_attr(get_option('url_facebook')); ?>" /></td>
    </tr>
    <tr valign="top">
        <th scope="row">URL Linkedin</th>
        <td><input type="text" name="url_linkedin" value="<?php echo esc_attr(get_option('url_linkedin')); ?>" /></td>
    </tr>
    <tr valign="top">
        <th scope="row">URL Instagram</th>
        <td><input type="text" name="url_instagram" value="<?php echo esc_attr(get_option('url_instagram')); ?>" /></td>
    </tr>

    <tr valign="top">
        <th scope="row">URL WhatsApp</th>
        <td>
        <input type="text" name="url_whatsapp" value="<?php echo esc_attr(get_option('url_whatsapp')); ?>" />
        </td>
    </tr>
</table>
<?php
    echo submit_button();
    echo '</form> ';
    echo '</div>';
}
function handle_file_upload($option)
{
    if (!empty($_FILES["banner-file"]["tmp_name"])) {

        $urls = wp_handle_upload($_FILES["banner-file"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return $option;
}


function register_mysettings()
{ // whitelist options
    register_setting('campos_options', 'url_facebook');
    register_setting('campos_options', 'url_instagram');
    register_setting('campos_options', 'url_linkedin');
    register_setting('campos_options', 'url_whatsapp');
    register_setting('campos_options', 'texto_destaque_topo');
    register_setting('campos_options', 'link_destaque_topo');
    register_setting('campos_options', 'link_banner_home');
    register_setting("campos_options", "banner-file", "handle_file_upload");
    register_setting('campos_options', 'banner-file');
    // register_setting( 'campos_options', 'option_etc' );
}

if (function_exists('register_nav_menu')) {
    register_nav_menu('menu-topo', 'Menu Topo');
    register_nav_menu('menu-rodape1', 'Menu Rodapé - Primeira coluna');
    register_nav_menu('menu-rodape2', 'Menu Rodapé - Segunda coluna');
    register_nav_menu('menu-rodape3', 'Menu Rodapé - Terceira coluna');

    register_nav_menu('menu-language', 'Linguagens');
}

function put_menu_classes($classes, $item, $args)
{
    if ($args->theme_location == 'menu-topo') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'put_menu_classes', 1, 3);

function new_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown-menu" /', $menu);
    $menu = preg_replace('/ menu-item-has-children/', '/ menu-item-has-children dropdown ', $menu);
    return $menu;
}

add_filter('wp_nav_menu', 'new_submenu_class');


function my_walker_nav_menu_start_el($item_output, $item, $depth, $args)
{
    $menu_locations = get_nav_menu_locations();

    if (has_term($menu_locations['menu-topo'], 'nav_menu', $item)) {

        if (in_array('menu-item-has-children', $item->classes)) {
            $item_output = preg_replace('/<a /', '<a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ', $item_output, 1);
        } else if ($item->menu_item_parent > 0) {

            $item_output = preg_replace('/<a /', '<a class="dropdown-item " ', $item_output, 1);
        } else {

            $item_output = preg_replace('/<a /', '<a class="nav-link " ', $item_output, 1);
        }
        // echo "<textarea>".print_r( $item,true).'</textarea>';
    } else
        if (has_term($menu_locations['menu-rodape1'], 'nav_menu', $item) || has_term($menu_locations['menu-rodape2'], 'nav_menu', $item) || has_term($menu_locations['menu-rodape3'], 'nav_menu', $item)) {
        $item_output = preg_replace('/<a /', '<a class="link-effect " ', $item_output, 1);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);

// Tamanho do resumo
add_filter('excerpt_length', function($length){
    return 20;
});

// Definir a paginação
add_filter('next_posts_link_attributes','posts_link_attributes');
add_filter('previous_posts_link_attributes','posts_link_attributes');

function posts_link_attributes(){
    return 'class="btn mx-1 btn-primary"';
}

function add_favicon(){
    echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/assets/img/favicon.png" />';

}

add_action('wp_head','add_favicon');