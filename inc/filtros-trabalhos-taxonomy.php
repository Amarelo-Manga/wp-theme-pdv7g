<?php
// Register Filtro Filtro
function filtros_trabalhos_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Filtro', 'Filtro', 'amarelomanga' ),
		'singular_name'              => _x( 'Filtro', 'Filtro', 'amarelomanga' ),
		'menu_name'                  => __( 'Filtros', 'amarelomanga' ),
		'all_items'                  => __( 'All Items', 'amarelomanga' ),
		'parent_item'                => __( 'Parent Item', 'amarelomanga' ),
		'parent_item_colon'          => __( 'Parent Item:', 'amarelomanga' ),
		'new_item_name'              => __( 'New Item Name', 'amarelomanga' ),
		'add_new_item'               => __( 'Add New Item', 'amarelomanga' ),
		'edit_item'                  => __( 'Edit Item', 'amarelomanga' ),
		'update_item'                => __( 'Update Item', 'amarelomanga' ),
		'view_item'                  => __( 'View Item', 'amarelomanga' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'amarelomanga' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'amarelomanga' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'amarelomanga' ),
		'popular_items'              => __( 'Popular Items', 'amarelomanga' ),
		'search_items'               => __( 'Search Items', 'amarelomanga' ),
		'not_found'                  => __( 'Not Found', 'amarelomanga' ),
		'no_terms'                   => __( 'No items', 'amarelomanga' ),
		'items_list'                 => __( 'Items list', 'amarelomanga' ),
		'items_list_navigation'      => __( 'Items list navigation', 'amarelomanga' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'filtros', array( 'trabalhos_realizados' ), $args );
}
add_action( 'init', 'filtros_trabalhos_taxonomy', 0 );