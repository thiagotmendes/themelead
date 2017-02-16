<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado */
add_action('init', 'produtos_register');
function produtos_register() {
	 $labels = array(
			'name' => 'Serviços',
			'singular_name' => 'Post',
			'all_items' => 'Todos Serviços',
			'add_new' => 'Adicionar Serviço',
			'add_new_item' => 'Adicionar Serviço',
			'edit_item' => 'Editar Serviço',
			'new_item' => 'Novo Serviço',
			'view_item' => 'Ver Serviço',
			'search_items' => 'Procurar Serviço',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'has_archive' => true,
			'taxonomy' => array('categoria-produto'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'servico')
	  );
	register_post_type('servico',$args);
}
/* ----------------------------------------------------- */
/* Taxonomias */
/* ----------------------------------------------------- */
/* Criando uma Taxonomia Personalizada
register_taxonomy("categoria-Produto", array("produto"),
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria Produto",
		'rewrite' => array( 'slug' => 'categoria-produto' )
	)
);*/
