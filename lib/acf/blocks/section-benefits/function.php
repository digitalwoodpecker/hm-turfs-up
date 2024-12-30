<?php

$style_handles = hmt_register_blocks_style( THEME_TEXTDOMAIN . '-section-benefits', 'section-benefits.css', [] );

$config = [
	'style_handles' => $style_handles,
	'example' => [
		'attributes' => [
			'mode' => 'preview',
			'data' => [
				'block_preview_images' => [
					get_theme_file_uri('/dist/admin/img/block-previews/block-preview-section-benefits.jpg'),
				]
			]
		]
	]
];

if( assets_bundle( 'section-benefits.js', true ) ) {
	$script_handles = hmt_register_blocks_script( THEME_TEXTDOMAIN . '-section-benefits', 'section-benefits.js', [], false, true );

	$config['script_handles'] = $script_handles;
}
