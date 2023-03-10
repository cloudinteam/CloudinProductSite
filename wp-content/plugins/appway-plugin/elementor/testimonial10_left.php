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
class Testimonial10_Left extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_testimonial10_left';
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
		return esc_html__( 'Testimonial 10 Left', 'appway' );
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
			'testimonial10_left',
			[
				'label' => esc_html__( 'Testimonial 10 Left', 'appway' ),
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
		
		$this->end_controls_section();
		
		// New Tab#1

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'Image', 'rashid' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
					'bgimg1',
					[
						'label' => esc_html__('Background image', 'rashid'),
						'type' => Controls_Manager::MEDIA,
						'default' => ['url' => Utils::get_placeholder_image_src(),],
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
					'alt_text',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image1',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);	
				$this->add_control(
					'alt_text1',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image2',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text2',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image3',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text3',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image4',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text4',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image5',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text5',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image6',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text6',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
					]
				);
				$this->add_control(
					'image7',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text7',
					[
						'label'       => __( 'Alt text', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'rashid' ),
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
			
    <!-- testimonial-style-ten -->
    <section class="testimonial-style-ten <?php echo esc_attr($settings['sec_class']);?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 user-column">
                    <div class="user-thumb">
                        <div class="thumb-box">
                            
							
							<div class="pattern-bg1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);"></div>
							
							
                            <div class="pattern-bg2" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);"></div>
							
							
							<?php if(wp_get_attachment_url($settings['image']['id'])): ?>
                            <figure class="thumb thumb-1"><img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image1']['id'])): ?>
                            <figure class="thumb thumb-2"><img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image2']['id'])): ?>
                            <figure class="thumb thumb-3"><img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image3']['id'])): ?>
                            <figure class="thumb thumb-4"><img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image4']['id'])): ?>
                            <figure class="thumb thumb-5"><img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image5']['id'])): ?>
                            <figure class="thumb thumb-6"><img src="<?php echo wp_get_attachment_url($settings['image5']['id']);?>" alt="<?php echo esc_attr($settings['alt_text5']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image6']['id'])): ?>
                            <figure class="thumb thumb-7"><img src="<?php echo wp_get_attachment_url($settings['image6']['id']);?>" alt="<?php echo esc_attr($settings['alt_text6']);?>"></figure>
							<?php endif; ?>
							
							<?php if(wp_get_attachment_url($settings['image7']['id'])): ?>
                            <figure class="thumb thumb-8"><img src="<?php echo wp_get_attachment_url($settings['image7']['id']);?>" alt="<?php echo esc_attr($settings['alt_text7']);?>"></figure>
							<?php endif; ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-ten end -->

		<?php 
	}

}

