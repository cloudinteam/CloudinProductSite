<?php

return array(
	'title'      => esc_html__( 'Single Post Settings', 'appway' ),
	'id'         => 'single_post_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'single_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Single Post Source Type', 'appway' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'appway' ),
				'e' => esc_html__( 'Elementor', 'appway' ),
			),
			'default' => 'd',
		),

		array(
			'id'       => 'single_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Post Default', 'appway' ),
			'indent'   => true,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'single_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Date', 'appway' ),
			'desc'    => esc_html__( 'Enable to show post publish date on posts detail page', 'appway' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author', 'appway' ),
			'desc'    => esc_html__( 'Enable to show author on posts detail page', 'appway' ),
			'default' => true,
		),

		array(
			'id'      => 'single_post_comments',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Comments', 'appway' ),
			'desc'    => esc_html__( 'Enable to show number of comments on posts single page', 'appway' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_cat',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Category', 'appway' ),
			'desc'    => esc_html__( 'Enable to show post category on posts single page', 'appway' ),
			'default' => false,
		),

		array(
			'id'      => 'single_post_tag',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Tags', 'appway' ),
			'desc'    => esc_html__( 'Enable to show post tags on posts single page', 'appway' ),
			'default' => false,
		),

		array(
			'id'      => 'single_post_author_box',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author Box', 'appway' ),
			'desc'    => esc_html__( 'Enable to show author box on post detail page.', 'appway' ),
			'default' => false,
		),
		array(
			'id'       => 'single_section_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
	),
);





