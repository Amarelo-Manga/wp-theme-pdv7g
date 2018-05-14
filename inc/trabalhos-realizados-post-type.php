<?php
function trabalhos_realizados_post_type() {
	$labels = array(
		'name'                => _x( 'Trabalhos Realizados', 'Post Type General Name', 'pdv7g' ),
		'singular_name'       => _x( 'Trabalho Realizado', 'Post Type Singular Name', 'pdv7g' ),
		'menu_name'           => __( 'Trabalhos Realizados', 'pdv7g' ),
		'name_admin_bar'      => __( 'Trabalhos Realizados', 'pdv7g' ),
		'parent_item_colon'   => __( 'Parent Trabalhos Realizados:', 'pdv7g' ),
		'all_items'           => __( 'Todos Trabalhos Realizados', 'pdv7g' ),
		'add_new_item'        => __( 'Novo Trabalho Realizado', 'pdv7g' ),
		'add_new'             => __( 'Adicionar Novo', 'pdv7g' ),
		'new_item'            => __( 'Novo Trabalho Realizado', 'pdv7g' ),
		'edit_item'           => __( 'Editar Trabalho Realizado', 'pdv7g' ),
		'update_item'         => __( 'Atualizar Trabalho Realizado', 'pdv7g' ),
		'view_item'           => __( 'Visualizar Trabalho Realizado', 'pdv7g' ),
		'search_items'        => __( 'Buscar Trabalho Realizado', 'pdv7g' ),
		'not_found'           => __( 'Not found', 'pdv7g' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'pdv7g' ),
	);
	$args = array(
		'label'               => __( 'Trabalhos Realizados', 'pdv7g' ),
		'description'         => __( 'Trabalhos Realizados', 'pdv7g' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		//'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-site',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'trabalhos_realizados', $args );
}
// Hook into the 'init' action
add_action( 'init', 'trabalhos_realizados_post_type', 0 );