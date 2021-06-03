<?php

add_filter( 'block_categories', 'valli_block_categories', 10, 2 );
function valli_block_categories( $categories, $post )
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'valli-blocks',
                'title' => __( 'Valli Blocks', 'valliblocks-master' ),
            ),
        )
    );
}

add_action('acf/init', 'valli_acf_blocks');
function valli_acf_blocks() {
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __('Add a banner block'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'format-image',
			'align' 			=> 'full',
			'keywords'			=> array( 'banner' )
		));
	}
}

function valli_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types', 'valli_allowed_block_types' );
 
function valli_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/banner'
	);
 
}
