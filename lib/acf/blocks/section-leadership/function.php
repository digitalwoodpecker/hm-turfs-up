<?php

$style_handles = hmt_register_blocks_style( THEME_TEXTDOMAIN . '-section-leadership', 'section-leadership.css', [] );
$script_handles = hmt_register_blocks_script( THEME_TEXTDOMAIN . '-section-leadership', 'section-leadership.js', [], false, true );

$config = [
	'style_handles' => $style_handles,
	'script_handles' => $script_handles,
	'example' => [
		'attributes' => [
			'mode' => 'preview',
			'data' => [
				'block_preview_images' => [
					get_theme_file_uri('/dist/admin/img/block-previews/block-preview-section-leadership-v1.jpg'),
				]
			]
		]
	]
];
