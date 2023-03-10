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
class Portfolio_Details1 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_portfolio_details1';
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
		return esc_html__( 'Portfolio Details 1', 'appway' );
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
			'portfolio_details1',
			[
				'label' => esc_html__( 'Portfolio Details 1', 'appway' ),
			]
		);
		
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'Sub Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Sub title', 'rashid' ),
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
					'image1',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'imgtitle1',
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
					'image2',
						[
						  'label' => __( 'Image', 'rashid' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'imgtitle2',
					[
						'label'       => __( 'Image Texts', 'rashid' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Image Texts', 'rashid' ),
					]
				);
				
		$this->end_controls_section();	
		
		// New Tab#2

		$this->start_controls_section(
					'content_section1',
					[
						'label' => __( 'About Block', 'rashid' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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

		
		// New Tab#2

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'Social Icon', 'rashid' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				
				$this->add_control(
				  'repeat1', 
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
									'name' => 'block_icons',
									'label' => esc_html__('Enter The icons', 'rashid'),
									'type' => Controls_Manager::ICONS,
									
								],
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

          
    <!-- portfolio-details -->
    <section class="portfolio-details two">
        <div class="lower-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div class="image-content">
                            <div class="title-box">
                                <span><?php echo $settings['subtitle'];?></span>
                                <h2><?php echo $settings['title'];?></h2>
                            </div>
                            <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                
								<?php if(wp_get_attachment_url($settings['image']['id'])): ?>
								<figure class="image"><a href="<?php echo wp_get_attachment_url($settings['image']['id']);?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo $settings['imgtitle'];?>"></a></figure>
								<?php endif; ?>
								
                            </div>
                            <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                
								<?php if(wp_get_attachment_url($settings['image1']['id'])): ?>
								<figure class="image"><a href="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo $settings['imgtitle1'];?>"></a></figure>
								<?php endif; ?>
								
								
                            </div>
                            <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                
								<?php if(wp_get_attachment_url($settings['image2']['id'])): ?>
								<figure class="image"><a href="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo $settings['imgtitle2'];?>"></a></figure>
								<?php endif; ?>
								
								
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h5><?php echo $settings['title1'];?></h5>
                            <div class="text">
                                <p><?php echo $settings['text'];?> </p>
                            </div>
                            <ul class="info-list clearfix">
							
								<?php foreach($settings['repeat'] as $item):?>
							
                                <li><span><?php echo wp_kses($item['block_text'], $allowed_tags);?></span><?php echo wp_kses($item['block_text1'], $allowed_tags);?></li>
								
								<?php endforeach; ?>
								
                            </ul>
                            <ul class="social-icons">
							
								<?php foreach($settings['repeat1'] as $item):?>
							
                                <li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("fa ", "fab ", esc_attr( $item['block_icons']['value']));?> "></i></a></li>
								
								<?php endforeach; ?>
								
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-details end -->
            
		<?php 
	}

}
