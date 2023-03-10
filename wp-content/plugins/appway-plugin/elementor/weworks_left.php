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
class Weworks_Left extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_weworks_left';
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
		return esc_html__( 'Weworks Left', 'appway' );
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
			'weworks_left',
			[
				'label' => esc_html__( 'Weworks Left', 'appway' ),
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
			'bttn',
			[
				'label'       => __( 'Button', 'rashid' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Button Title', 'rashid' ),
			]
		);	
		$this->add_control(
			'btnlink',
			[
			  'label' => __( 'Button Url', 'rashid' ),
			  'type' => Controls_Manager::URL,
			  'placeholder' => __( 'https://your-link.com', 'rashid' ),
			  'show_external' => true,
			  'default' => [
				'url' => '',
				'is_external' => true,
				'nofollow' => true,
			  ],
			
		   ]
		);


		$this->end_controls_section();
		
		// New Tab#1

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'Fact Block', 'rashid' ),
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
									'name' => 'ff_stop',
									'label' => esc_html__('Counter Stop', 'rashid'),
									'type' => Controls_Manager::TEXT,
									'default' => esc_html__('', 'muzex')
								],
								[
									'name' => 'ff_sing',
									'label' => esc_html__('Counter Sing', 'rashid'),
									'type' => Controls_Manager::TEXT,
									'default' => esc_html__('', 'muzex')
								],
								[
									'name' => 'block_title',
									'label' => esc_html__('Title', 'rashid'),
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

		<!-- weworks-section -->
		<section class="weworks-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 content-column">
						<div id="content_block_47">
							<div class="content-box">
								<div class="upper-box">
									<div class="sec-title"><h2><?php echo $settings['title'];?></h2></div>
									<div class="text"><?php echo $settings['text'];?></div>
									<div class="btn-box"><a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="theme-btn"><?php echo $settings['bttn'];?><i class="fas fa-angle-right"></i></a></div>
								</div>
								<div class="counter-inner wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
									<div class="row">
									
										<?php foreach($settings['repeat'] as $item):?>
									
										<div class="col-lg-<?php echo esc_attr($item['block_column'], true );?> col-md-12 col-sm-12 counter-column">
											<div class="single-counter-box">
												<div class="count-outer count-box">
													<span class="count-text" data-speed="1500" data-stop="<?php echo esc_attr($item['ff_stop']);?>">0</span><span><?php echo esc_attr($item['ff_sing']);?></span>
												</div>
												<h3><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
											</div>
										</div>
										
										<?php endforeach; ?>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- weworks-section end -->
            
		<?php 
	}

}