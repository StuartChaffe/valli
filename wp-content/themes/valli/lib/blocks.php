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
		acf_register_block(array(
			'name'				=> 'image',
			'title'				=> __('Image'),
			'description'		=> __('Add an image block'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'images, image' )
		));
		acf_register_block(array(
			'name'				=> 'stat',
			'title'				=> __('Stat'),
			'description'		=> __('Add stat'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'stat' )
		));

		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Call to action'),
			'description'		=> __('Add a CTA block'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'megaphone',
			'keywords'			=> array( 'cta, call to action' )
		));
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content block'),
			'description'		=> __('Add a standard content block'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'text-page',
			'keywords'			=> array( 'content' )
		));
		acf_register_block(array(
			'name'				=> 'featured-events',
			'title'				=> __('Featured events'),
			'description'		=> __('Add featured events'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'screenoptions',
			'keywords'			=> array( 'project, featured events' )
		));
		acf_register_block(array(
			'name'				=> 'quote',
			'title'				=> __('Quote'),
			'description'		=> __('Add quote'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'format-status',
			'keywords'			=> array( 'testimonial, quote' )
		));
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion'),
			'description'		=> __('Add expanding content'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'insert',
			'keywords'			=> array( 'accordion, expanding' )
		));
		acf_register_block(array(
			'name'				=> 'image-text',
			'title'				=> __('Image with text'),
			'description'		=> __('Add an image with text block'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'id',
			'keywords'			=> array( 'image with text, image, text with image, text' )
		));
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel'),
			'description'		=> __('Add a carousel'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'slides',
			'keywords'			=> array( 'carousel, slider' )
		));
		acf_register_block(array(
			'name'				=> 'role-models',
			'title'				=> __('Role models'),
			'description'		=> __('Add some role models'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'smiley',
			'keywords'			=> array( 'role model, people' )
		));
		acf_register_block(array(
			'name'				=> 'downloads',
			'title'				=> __('Downloads'),
			'description'		=> __('Add downloads'),
			'render_callback'	=> 'valli_acf_block_render_callback',
			'category'			=> 'valli-blocks',
			'icon'				=> 'download',
			'keywords'			=> array( 'download, file' )
		));
		// acf_register_block(array(
		// 	'name'				=> 'gallery',
		// 	'title'				=> __('Gallery'),
		// 	'description'		=> __('Add a gallery block'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'layout',
		// 	'keywords'			=> array( 'gallery, project gallery' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'images',
		// 	'title'				=> __('Images'),
		// 	'description'		=> __('Add an image block'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'format-gallery',
		// 	'keywords'			=> array( 'images, image' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'project-details',
		// 	'title'				=> __('Project details'),
		// 	'description'		=> __('Add project details'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'format-aside',
		// 	'keywords'			=> array( 'project, project details' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'pull-out',
		// 	'title'				=> __('Pull out'),
		// 	'description'		=> __('Add pull out'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'pull out' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'next-project',
		// 	'title'				=> __('Next project'),
		// 	'description'		=> __('Add next project link'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'category',
		// 	'keywords'			=> array( 'project, next project' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'form',
		// 	'title'				=> __('Form'),
		// 	'description'		=> __('Add a form'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'email-alt',
		// 	'keywords'			=> array( 'email, form' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'map',
		// 	'title'				=> __('Map'),
		// 	'description'		=> __('Add a map'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'location-alt',
		// 	'keywords'			=> array( 'map, location' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'carousel',
		// 	'title'				=> __('Carouselblocks.'),
		// 	'description'		=> __('Add a carousel'),
		// 	'render_callback'	=> 'valli_acf_block_render_callback',
		// 	'category'			=> 'valli-blocks',
		// 	'icon'				=> 'slides',
		// 	'keywords'			=> array( 'carousel, slider' )
		// ));
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
		'acf/accordion',
		'acf/banner',
		'acf/carousel',
		'acf/content',
		'acf/cta',
		'acf/downloads',
		'acf/featured-events',
		'acf/image',
		'acf/image-text',
		'acf/quote',
		'acf/role-models',
		'acf/stat',
		// 'acf/form',
		// 'acf/gallery',
		// 'acf/images',
		// 'acf/map',
		// 'acf/next-project',
		// 'acf/project-details',
		// 'acf/pull-out',
		// 'acf/text-image',
	);
 
}
