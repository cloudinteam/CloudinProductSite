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
class Clients6 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_clients6';
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
		return esc_html__( 'Clients 6', 'appway' );
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
			'clients6',
			[
				'label' => esc_html__( 'Clients 6', 'appway' ),
			]
		);
		
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'rashid' ),
			]
		);
		
		$this->add_control(
			'text',
			[
				'label'       => __( 'Description Text', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'rashid' ),
			]
		);

		$this->end_controls_section();

		
	// New Tab#1

	$this->start_controls_section(
				'content_section',
				[
					'label' => __( 'Clints Block', 'rashid' ),
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
                			['block_title' => esc_html__('Projects Completed', 'diaco')],
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
							'block_btnlink' =>
							[
							  'name' => 'block_btnlink',
							  'label' => __( 'Button Url', 'rashid' ),
							  'type' => Controls_Manager::URL,
							  'placeholder' => __( 'https://your-link.com', 'rashid' ),
							  'show_external' => true,
							  'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							  ],
						   ],
            			],
            	    'title_field' => '{{block_title}}',
                 ]
        );
			
	$this->end_controls_section();
		
		//Text==========================

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
					'{{WRAPPER}} .clients-section .trusted-box' => 'display: {{VALUE}} !important',
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
					'{{WRAPPER}} .clients-section' => 'text-align: {{VALUE}} !important',
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
					'{{WRAPPER}} .clients-section .trusted-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'text_typography',
				'condition'    => array( 'show_text' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .clients-section .trusted-box',
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
					'{{WRAPPER}} .clients-section .trusted-box' => 'color: {{VALUE}} !important',
				),
			)
		);
		
		$this->add_control(
			'background_color',
			array(
				'label'     => __( 'Background', 'ecolab' ),
				'condition'    => array( 'show_text' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .clients-section .trusted-box' => 'background: {{VALUE}} !important',
				),
			)
		);
		
		$this->add_control(
			'border_radius',
			array(
				'label'     => __( 'Border Radius', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_text' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .clients-section .trusted-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->end_controls_section();
//End of Text=========
		
	
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

	if ($(".clients-carousel").length) {
		$(".clients-carousel").owlCarousel({
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
					items:2
				},
				600:{
					items:3
				},
				800:{
					items:4
				},			
				1200:{
					items:4
				}

			}
		});    		
	}

//put the code above the line 

  });
</script>';


?>

		<!-- clients-section -->
		<section class="clients-section centred <?php echo $settings['sec_class'];?>">
			<div class="container">
				<div class="clients-carousel owl-carousel owl-theme owl-dots-none">
				
					<?php foreach($settings['repeat'] as $item):?>
				
					<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
					<figure class="image-box"><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_imgtitle'], $allowed_tags);?>"></a></figure>
					<?php endif; ?>
					
					<?php endforeach; ?>
					
				</div>
				<div class="trusted-box"><?php echo $settings['text'];?></div>
			</div>
		</section>
		<!-- clients-section end -->
            
		<?php 
	}

}
