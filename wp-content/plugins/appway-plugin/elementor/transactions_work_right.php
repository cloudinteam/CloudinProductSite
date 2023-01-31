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
class Transactions_Work_Right extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_transactions_work_right';
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
		return esc_html__( 'Transactions Work Right', 'appway' );
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
			'transactions_work_right',
			[
				'label' => esc_html__( 'Transactions Work Right', 'appway' ),
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
					'label' => __( 'Inner Box', 'rashid' ),
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
								'name' => 'block_bgimg',
								'label' => esc_html__('Background image', 'rashid'),
								'type' => Controls_Manager::MEDIA,
								'default' => ['url' => Utils::get_placeholder_image_src(),],
							],
							[
								'name' => 'number',
								'label' => esc_html__('Number', 'diaco'),
								'type' => Controls_Manager::TEXT,
								'default' => esc_html__('', 'diaco')
							],
							[
								'name' => 'block_bgimg1',
								'label' => esc_html__('Background image', 'rashid'),
								'type' => Controls_Manager::MEDIA,
								'default' => ['url' => Utils::get_placeholder_image_src(),],
							],
							[
								'name' => 'block_bgimg2',
								'label' => esc_html__('Background image', 'rashid'),
								'type' => Controls_Manager::MEDIA,
								'default' => ['url' => Utils::get_placeholder_image_src(),],
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

	  
<!-- transactions-work -->
<section class="transactions-work <?php echo $settings['sec_class'];?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 inner-column">
				<div id="content_block_40">
					<div class="inner-box">
					
						<?php foreach($settings['repeat'] as $item):?>
					
						<div class="single-item wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="count-box" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);"><?php echo wp_kses($item['number'], $allowed_tags);?></div>
							<div class="box">
								<div class="pattern-bg">
									<div class="pattern-1" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg1']['id']);?>);"></div>
									<div class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg2']['id']);?>);"></div>
								</div>
								<h4><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h4>
								<div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
							</div>
						</div>
						
						<?php endforeach; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- transactions-work end -->
            
		<?php 
	}

}
