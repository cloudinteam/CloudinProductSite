<?php

namespace APPWAYPLUGIN\Element;

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

/**
 * Elementor button widget.
 * Elementor widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Testimonial9 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_testimonial9';
	}

	/**
	 * Get widget title.
	 * Retrieve button widget title.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Testimonial 9', 'appway' );
	}

	/**
	 * Get widget icon.
	 * Retrieve button widget icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-briefcase';
	}

	/**
	 * Get widget categories.
	 * Retrieve the list of categories the button widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'appway' ];
	}
	
	/**
	 * Register button widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'testimonial9',
			[
				'label' => esc_html__( 'Testimonial 9', 'appway' ),
			]
		);
		
		$this->add_control(
			'bgimg',
			[
				'label' => esc_html__('Background image', 'rashid'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);

		$this->end_controls_section();
		
		// New Tab#1

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'Testimonials Block', 'rashid' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				
		$this->add_control(
              'repeat', 
			  	[
            		'type' => Controls_Manager::REPEATER,
            		'seperator' => 'before',
            		'default' => 
						[
                			['block_title' => esc_html__('Projects Completed', 'rashid')],
            			],
            		'fields' => 
						[
							'block_image' => 
							[
							  'name' => 'block_image',
							  'label' => __( 'Image', 'rashid' ),
							  'type' => Controls_Manager::MEDIA,
							  'default' => ['url' => Utils::get_placeholder_image_src(),],
							],
							'block_imgtitle' =>
							[
								'name' => 'block_imgtitle',
								'label' => esc_html__('Image Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							'block_text' =>
							[
								'name' => 'block_text',
								'label' => esc_html__('Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							'block_title' =>
							[
								'name' => 'block_title',
								'label' => esc_html__('Title', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							'block_subtitle' =>
							[
								'name' => 'block_subtitle',
								'label' => esc_html__('Subtitle', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							
            			],
            	    'title_field' => '{{block_title}}',
                 ]
        );

				
				
		$this->end_controls_section();
		
		//========== icon Settings===================================


$this->start_controls_section(
			'icon_control',
			array(
				'label' => __( 'Thumb Settings', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
$this->add_control(
			'show_icon',
			array(
				'label' => esc_html__( 'Show Icon', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'show' => [
						'show' => esc_html__( 'Show', 'ecolab' ),	
						'icon' => 'eicon-check-circle',
					],
					'none' => [
						'none' => esc_html__( 'Hide', 'ecolab' ),
						'icon' => 'eicon-close-circle',
					],
				],
				'default' => 'show',
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .image-box' => 'display: {{VALUE}} !important',
				),
			)
		);		
$this->add_control(
			'icon_alingment',
			array(
				'label' => esc_html__( 'Alignment', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'condition'    => array( 'show_icon' => 'show' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'ecolab' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'ecolab' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'ecolab' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .inner-box' => 'text-align: {{VALUE}} !important',
				),
			)
		);	
$this->add_control(
			'icon_color',
			array(
				'label'     => __( ' Color', 'ecolab' ),
				'condition'    => array( 'show_icon' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}}  .testimonial-style-nine .testimonial-content .image-box:before' => 'color: {{VALUE}} !important',

				),
			)
		);
		
$this->add_control(
			'icon_bgcolor',
			array(
				'label'     => __( 'Background Color', 'ecolab' ),
				'condition'    => array( 'show_icon' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}}  .testimonial-style-nine .testimonial-content .image-box:before' => 'background: {{VALUE}} !important',

				),
			)
		);		
	$this->add_control(
			'icon_padding',
			array(
				'label'     => __( 'Padding', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_icon' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}}  .testimonial-style-nine .testimonial-content .image-box:before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

	$this->add_control(
			'icon_margin',
			array(
				'label'     => __( 'Margin', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_icon' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
				'selectors' => array(
					'{{WRAPPER}}  .testimonial-style-nine .testimonial-content .image-box:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'icon_typography',
				'condition'    => array( 'show_icon' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}}  .testimonial-style-nine .testimonial-content .image-box:before',
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			array(
				'name' => 'icon_border',
				'condition'    => array( 'show_icon' => 'show' ),
				'selector' => '{{WRAPPER}}  .testimonial-style-nine .testimonial-content .image-box:before',
			)
		);
		$this->add_control(
			'border_radius',
			array(
				'label'     => __( 'Border Radius', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_icon' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .image-box:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->end_controls_section();
		
//End of icon
//
////Text==========================

		$this->start_controls_section(
			'text_settings',
			array(
				'label' => __( 'Text Setting', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
	$this->add_control(
			'show_text',
			array(
				'label' => esc_html__( 'Show Text', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'show' => [
						'show' => esc_html__( 'Show', 'ecolab' ),	
						'icon' => 'eicon-check-circle',
					],
					'none' => [
						'none' => esc_html__( 'Hide', 'ecolab' ),
						'icon' => 'eicon-close-circle',
					],
				],
				'default' => 'show',
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .text' => 'display: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'text_alingment',
			array(
				'label' => esc_html__( 'Alignment', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'ecolab' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'ecolab' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'ecolab' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'condition'    => array( 'show_text' => 'show' ),
				'toggle' => true,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .text' => 'text-align: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'text_padding',
			array(
				'label'     => __( 'Padding', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' =>  ['px', '%', 'em' ],
				'condition'    => array( 'show_text' => 'show' ),
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'text_typography',
				'condition'    => array( 'show_text' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .testimonial-style-nine .testimonial-content .text',
			)
		);
		$this->add_control(
			'text_color',
			array(
				'label'     => __( 'Color', 'ecolab' ),
				'condition'    => array( 'show_text' => 'show' ),
				'separator' => 'after',
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .text' => 'color: {{VALUE}} !important',
				),
			)
		);

		$this->end_controls_section();
//End of Text=========
//
//// Title 	==================	

		
		$this->start_controls_section(
			'title_settings',
			array(
				'label' => __( 'Title Setting', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
		
	$this->add_control(
			'show_title',
			array(
				'label' => esc_html__( 'Show Title', 'ecolabe' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'show' => [
						'show' => esc_html__( 'Show', 'ecolab' ),	
						'icon' => 'eicon-check-circle',
					],
					'none' => [
						'none' => esc_html__( 'Hide', 'ecolab' ),
						'icon' => 'eicon-close-circle',
					],
				],
				'default' => 'show',
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .name' => 'display: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'title_alingment',
			array(
				'label' => esc_html__( 'Alignment', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'ecolab' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'ecolab' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'ecolab' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'condition'    => array( 'show_title' => 'show' ),
				'toggle' => true,
				'selectors' => array(
				
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .name' => 'text-align: {{VALUE}} !important',
				),
			)
		);			


	$this->add_control(
			'title_padding',
			array(
				'label'     => __( 'Padding', 'ecolab' ),
				'condition'    => array( 'show_title' => 'show' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'title_typography',
				'condition'    => array( 'show_title' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .name',
			)
		);
		$this->add_control(
			'title_color',
			array(
				'label'     => __( 'Color', 'ecolab' ),
				'condition'    => array( 'show_title' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .name' => 'color: {{VALUE}} !important',
		
				),
			)
		);
		$this->add_control(
			'title_top_border_color',
			array(
				'label'     => __( 'Border Color', 'ecolab' ),
				'condition'    => array( 'show_title' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .name:before' => 'background: {{VALUE}} !important',
				),
			)
		);

		$this->end_controls_section();
	
					
//End of  Title 	==================	
//
////Text==========================

		$this->start_controls_section(
			'text_two_settings',
			array(
				'label' => __( 'Designation Setting', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
	$this->add_control(
			'show_text_two',
			array(
				'label' => esc_html__( 'Show Text Two', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'show' => [
						'show' => esc_html__( 'Show', 'ecolab' ),	
						'icon' => 'eicon-check-circle',
					],
					'none' => [
						'none' => esc_html__( 'Hide', 'ecolab' ),
						'icon' => 'eicon-close-circle',
					],
				],
				'default' => 'show',
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .designation' => 'display: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'text_two_alingment',
			array(
				'label' => esc_html__( 'Alignment', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'ecolab' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'ecolab' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'ecolab' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'condition'    => array( 'show_text_two' => 'show' ),
				'toggle' => true,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .designation' => 'text-align: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'text_two_padding',
			array(
				'label'     => __( 'Padding', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' =>  ['px', '%', 'em' ],
				'condition'    => array( 'show_text_two' => 'show' ),
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .designation' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'text_two_typography',
				'condition'    => array( 'show_text_two' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .designation',
			)
		);
		$this->add_control(
			'text_two_color',
			array(
				'label'     => __( 'Color', 'ecolab' ),
				'condition'    => array( 'show_text_two' => 'show' ),
				'separator' => 'after',
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .testimonial-content .author-info .designation' => 'color: {{VALUE}} !important',
				),
			)
		);

		$this->end_controls_section();
//End of Text=========	
//
////========== Nav Button with Background ===================================

		$this->start_controls_section(
			'nav_button_control',
			array(
				'label' => __( 'Nav Button Settings', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
		$this->add_control(
			'show_nav_button',
			array(
				'label' => esc_html__( 'Show Nav Button', 'ecolab' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'show' => [
						'show' => esc_html__( 'Show', 'ecolab' ),	
						'icon' => 'eicon-check-circle',
					],
					'none' => [
						'none' => esc_html__( 'Hide', 'ecolab' ),
						'icon' => 'eicon-close-circle',
					],
				],
				'default' => 'show',
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next' => 'display: {{VALUE}} !important',
				),
			)
		);		
		
		$this->add_control(
			'nav_button_color',
			array(
				'label'     => __( 'Nav Button Color', 'ecolab' ),
				'condition'    => array( 'show_nav_button' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next' => 'color: {{VALUE}} !important',

				),
			)
		);
		$this->add_control(
			'nav_button_bg_color',
			array(
				'label'     => __( 'Nav Background Color', 'ecolab' ),
				'condition'    => array( 'show_nav_button' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next' => 'background: {{VALUE}} !important',
				),
			)
		);	
		$this->add_control(
			'nav_button_hover_color',
			array(
				'label'     => __( 'Hover Nav Color', 'ecolab' ),
				'condition'    => array( 'show_nav_button' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev:hover, .testimonial-style-nine .owl-nav .owl-next:hover' => 'color: {{VALUE}} !important',
				),
			)
		);
		
		$this->add_control(
			'nav_button_hover_bg_color',
			array(
				'label'     => __( 'Hover Nav Bg Color', 'ecolab' ),
				'condition'    => array( 'show_nav_button' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev:hover, .testimonial-style-nine .owl-nav .owl-next:hover' => 'background: {{VALUE}} !important',
				),
			)
		);
		$this->add_control(
			'nav_button_padding',
			array(
				'label'     => __( 'Nav Padding', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_nav_button' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_control(
			'nav_button_margin',
			array(
				'label'     => __( 'Nav Margin', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_nav_button' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'nav_button_typography',
				'condition'    => array( 'show_nav_button' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next',
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			array(
				'name' => 'nav_border',
				'condition'    => array( 'show_nav_button' => 'show' ),
				'selector' => '{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next',
			)
		);
		$this->add_control(
			'navbtn_border_radius',
			array(
				'label'     => __( 'Border Radius', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_nav_button' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .testimonial-style-nine .owl-nav .owl-prev, .testimonial-style-nine .owl-nav .owl-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->end_controls_section();
		
		//End of Nav Button	
			

	
	
	}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$allowed_tags = wp_kses_allowed_html('post');
		?>
			
<?php
      echo '
     <script>
 jQuery(document).ready(function($) {

//put the js code under this line 

	if ($(".testimonial-carousel-2").length) {
		$(".testimonial-carousel-2").owlCarousel({
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 3000,
			autoplay: true,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},			
				1200:{
					items:1
				}

			}
		});    		
	}

//put the code above the line 

  });
</script>';


?>
			
		<section class="testimonial-style-nine centred" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
			<div class="container">
				<div class="testimonial-carousel-2 owl-carousel owl-theme owl-dots-none">
				
					<?php foreach($settings['repeat'] as $item):?>
				
					<div class="testimonial-content">
						<div class="inner-box">
							
							<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
							<figure class="image-box"><img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_imgtitle'], $allowed_tags);?>"></figure>
							<?php endif; ?>
							
							
							<div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
							<div class="author-info">
								<h3 class="name"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
								<span class="designation"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
							</div>
						</div>
					</div>
					
					<?php endforeach; ?>
					
				</div>
			</div>
		</section>

		<?php 
	}

}

