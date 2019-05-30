<?php 

function curso_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Cursos', 'Post Type General Name', 'eseg' ),
        'singular_name'       => _x( 'Curso', 'Post Type Singular Name', 'eseg' ),
        'menu_name'           => __( 'Cursos', 'eseg' ),
        'parent_item_colon'   => __( 'Parent Curso', 'eseg' ),
        'all_items'           => __( 'Todos Cursos', 'eseg' ),
        'view_item'           => __( 'Ver Curso', 'eseg' ),
        'add_new_item'        => __( 'Adicionar novo curso', 'eseg' ),
        'add_new'             => __( 'Adicionar novo', 'eseg' ),
        'edit_item'           => __( 'Editar Curso', 'eseg' ),
        'update_item'         => __( 'Actualizar curso', 'eseg' ),
        'search_items'        => __( 'Pesquisar curso', 'eseg' ),
        'not_found'           => __( 'Não foi encontrado', 'eseg' ),
        'not_found_in_trash'  => __( 'Não foi encontrado no lixo', 'eseg' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'cursos', 'eseg' ),
        'description'         => __( 'Colocar os cursos', 'eseg' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'curso', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'curso_post_type', 0 );

 ?>