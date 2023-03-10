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
class Contact2 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_contact2';
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
		return esc_html__( 'Contact 2', 'appway' );
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
			'contact2',
			[
				'label' => esc_html__( 'Contact 2', 'appway' ),
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
				'bgimg',
				[
					'label' => esc_html__('Background image', 'rashid'),
					'type' => Controls_Manager::MEDIA,
					'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
			);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'rashid' ),
			]
		);
		$this->add_control(
			'image',
				[
				  'label' => __( 'Image', 'rashid' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);
		$this->add_control(
			'imgtitle',
			[
				'label'       => __( 'Image Texts', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Image Texts', 'rashid' ),
			]
		);
		$this->add_control(
			'title1',
			[
				'label'       => __( 'Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'rashid' ),
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
		$this->add_control(
				'contact_form',
				[
					'label'       => __( 'Contact Form 7 Url', 'rashid' ),
					'type'        => Controls_Manager::TEXTAREA,
					'dynamic'     => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your Contact Form 7 Url', 'rashid' ),
					'default'     => __( '', 'rashid' ),
				]
			);
		$this->end_controls_section();
		
		
	// New Tab#1

	$this->start_controls_section(
				'content_section',
				[
					'label' => __( 'Contact Block', 'rashid' ),
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
							[
								'name' => 'block_column',
								'label'   => esc_html__( 'Column', 'rashid' ),
								'type'    => Controls_Manager::NUMBER,
								'default' => 2,
								'min'     => 1,
								'max'     => 12,
								'step'    => 1,
							],
							[
							  'name' => 'block_image',
							  'label' => __( 'Image', 'rashid' ),
							  'type' => Controls_Manager::MEDIA,
							  'default' => ['url' => Utils::get_placeholder_image_src(),],
							],
							[
								'name' => 'block_imgtitle',
								'label' => esc_html__('Image Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_title',
								'label' => esc_html__('Title', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_text',
								'label' => esc_html__('Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_text1',
								'label' => esc_html__('Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
            			],
            	    'title_field' => '{{block_title}}',
                 ]
        );
			
	$this->end_controls_section();

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

<section class="<?php echo esc_attr($settings['sec_class']);?> contact-section alternate-2">
        <div class="pattern-layer" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);"></div>
        <div class="container">
            <div class="info-content centred">
                <div class="sec-title center">
                    <h2><?php echo $settings['title'];?></h2>
                </div>
                <div class="row">
                    
					<?php foreach($settings['repeat'] as $item):?>
					
					<div class="col-lg-<?php echo esc_attr($item['block_column'], true );?> col-md-6 col-sm-12 info-column">
                        <div class="single-info-box">
                            
							<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
							<figure class="icon-box"><img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_imgtitle'], $allowed_tags);?>"></figure>
							<?php endif; ?>
							
                            <h3><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
                            <div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
                            <div class="phone"><?php echo wp_kses($item['block_text1'], $allowed_tags);?></div>
                        </div>
                    </div>
                    
					<?php endforeach; ?>
                </div>
            </div>
            <div class="lower-box">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        
						<?php if(wp_get_attachment_url($settings['image']['id'])): ?>
						<figure class="image-box float-bob-y"><img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo $settings['imgtitle'];?>"></figure>
						<?php endif; ?>
						
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 form-column">
                        <div class="contact-form-area">
                            <div class="sec-title">
                                <h2><?php echo $settings['title1'];?></h2>
                                <p><?php echo $settings['text'];?></p>
                            </div>
                            <div class="form-inner">
                                <?php echo do_shortcode( $settings['contact_form'] );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<?php 
	}

}
