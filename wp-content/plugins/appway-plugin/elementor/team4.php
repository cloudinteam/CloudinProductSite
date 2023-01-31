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
class Team4 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_team4';
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
		return esc_html__( 'Team 4', 'appway' );
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
			'team4',
			[
				'label' => esc_html__( 'Team 4', 'appway' ),
			]
		);
		
		$this->add_control(
			'column',
			[
				'label'   => esc_html__( 'Column', 'rashid' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '3',
				'options' => array(
					'12'   => esc_html__( 'One Column', 'rashid' ),
					'6'   => esc_html__( 'Two Column', 'rashid' ),
					'4'   => esc_html__( 'Three Column', 'rashid' ),
					'3'   => esc_html__( 'Four Column', 'rashid' ),
					'2'   => esc_html__( 'Six Column', 'rashid' ),
				),
			]
		);

		$this->add_control(
			'text_limit',
			[
				'label'   => esc_html__( 'Text Limit', 'appway' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_number',
			[
				'label'   => esc_html__( 'Number of post', 'appway' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_orderby',
			[
				'label'   => esc_html__( 'Order By', 'appway' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => array(
					'date'       => esc_html__( 'Date', 'appway' ),
					'title'      => esc_html__( 'Title', 'appway' ),
					'menu_order' => esc_html__( 'Menu Order', 'appway' ),
					'rand'       => esc_html__( 'Random', 'appway' ),
				),
			]
		);
		$this->add_control(
			'query_order',
			[
				'label'   => esc_html__( 'Order', 'appway' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESc' => esc_html__( 'DESC', 'appway' ),
					'ASC'  => esc_html__( 'ASC', 'appway' ),
				),
			]
		);
		$this->add_control(
			'query_exclude',
			[
				'label'       => esc_html__( 'Exclude', 'appway' ),
				'type'        => Controls_Manager::TEXT,
				'description' => esc_html__( 'Exclude posts, pages, etc. by ID with comma separated.', 'appway' ),
			]
		);
		$this->add_control(
            'query_category', 
				[
				  'type' => Controls_Manager::SELECT,
				  'label' => esc_html__('Category', 'appway'),
				  'options' => get_team_categories()
				]
		);
		$this->end_controls_section();
		
		//Block==========================
		$this->start_controls_section(
			'block_settings',
			array(
				'label' => __( 'Block Setting', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
		$this->add_control(
			'show_block',
			array(
				'label' => esc_html__( 'Show Block', 'ecolab' ),
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
					'{{WRAPPER}} .team-block-three .inner-box' => 'display: {{VALUE}} !important',
				),
			)
		);	

		$this->add_control(
			'block_bg_color',
			array(
				'label'     => __( 'Background Color', 'ecolab' ),
				'condition'    => array( 'show_block' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box' => 'background: {{VALUE}} !important',
				),
			)
		);
		
		$this->add_control(
			'block_hover_bg',
			array(
				'label'     => __( 'Hover Background', 'ecolab' ),
					'condition'    => array( 'show_block' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box:hover' => 'background: {{VALUE}} !important',
				),
			)
		);
	
		$this->add_control(
			'block_margin',
			array(
				'label'     => __( 'Block Margin', 'ecolab' ),
				'condition'    => array( 'show_block' => 'show' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}}  .team-block-three .inner-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_control(
			'block_padding',
			array(
				'label'     => __( 'Block Padding', 'ecolab' ),
				'condition'    => array( 'show_block' => 'show' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}}  .team-block-three .inner-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'block_shadow',
				'condition'    => array( 'show_block' => 'show' ),
				'label' => esc_html__( 'Box Shadow', 'ecolab' ),
				'selector' => '{{WRAPPER}} .team-block-three .inner-box',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'block_border',
				'condition'    => array( 'show_block' => 'show' ),
				'label' => esc_html__( 'Box Border', 'ecolab' ),
				'selector' => '{{WRAPPER}} .team-block-three .inner-box',
			]
		);
		
		$this->add_control(
			'border_radius',
			array(
				'label'     => __( 'Border Radius', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_block' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->end_controls_section();
		//End of Block 
		//
		////Text==========================

		$this->start_controls_section(
			'text_list_settings',
			array(
				'label' => __( 'Social List Setting', 'ecolab' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
	$this->add_control(
			'show_text_list',
			array(
				'label' => esc_html__( 'Show Text List', 'ecolab' ),
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
					'{{WRAPPER}} .team-block-three .inner-box .image-box .social-links li a' => 'display: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'text_list_alingment',
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
				'condition'    => array( 'show_text_list' => 'show' ),
				'toggle' => true,
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box .image-box .social-links li a' => 'text-align: {{VALUE}} !important',
				),
			)
		);	
	$this->add_control(
			'text_list_padding',
			array(
				'label'     => __( 'Padding', 'ecolab' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' =>  ['px', '%', 'em' ],
				'condition'    => array( 'show_text_list' => 'show' ),
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box .image-box .social-links li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'text_list_typography',
				'condition'    => array( 'show_text_list' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .team-block-three .inner-box .image-box .social-links li a',
			)
		);
		$this->add_control(
			'text_list_color',
			array(
				'label'     => __( 'Color', 'ecolab' ),
				'condition'    => array( 'show_text_list' => 'show' ),
				'separator' => 'after',
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box .image-box .social-links li a' => 'color: {{VALUE}} !important',
				),
			)
		);

		$this->end_controls_section();
//End of Text=========	
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
					'{{WRAPPER}} .team-block-three .inner-box .lower-content h5' => 'display: {{VALUE}} !important',
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
				
					'{{WRAPPER}} .team-block-three .inner-box .lower-content h5' => 'text-align: {{VALUE}} !important',
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
					'{{WRAPPER}} .team-block-three .inner-box .lower-content h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'title_typography',
				'condition'    => array( 'show_title' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .team-block-three .inner-box .lower-content h5',
			)
		);
		$this->add_control(
			'title_color',
			array(
				'label'     => __( 'Color', 'ecolab' ),
				'condition'    => array( 'show_title' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box .lower-content h5 a' => 'color: {{VALUE}} !important',
		
				),
			)
		);
		$this->add_control(
			'title_color_2',
			array(
				'label'     => __( 'Hover Color', 'ecolab' ),
				'condition'    => array( 'show_title' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .team-block-three .inner-box .lower-content h5 a:hover' => 'color: {{VALUE}} !important',
		
				),
			)
		);

		$this->end_controls_section();
	
					
//End of  Title 	==================		
//
////Text==========================

		$this->start_controls_section(
			'text_settings',
			array(
				'label' => __( 'Designation Setting', 'ecolab' ),
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
					'{{WRAPPER}} .team-block-three .inner-box .lower-content .designation' => 'display: {{VALUE}} !important',
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
					'{{WRAPPER}} .team-block-three .inner-box .lower-content .designation' => 'text-align: {{VALUE}} !important',
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
					'{{WRAPPER}} .team-block-three .inner-box .lower-content .designation' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'text_typography',
				'condition'    => array( 'show_text' => 'show' ),
				'label'    => __( 'Typography', 'ecolab' ),
				'selector' => '{{WRAPPER}} .team-block-three .inner-box .lower-content .designation',
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
					'{{WRAPPER}} .team-block-three .inner-box .lower-content .designation' => 'color: {{VALUE}} !important',
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
        
        $paged = appway_set($_POST, 'paged') ? esc_attr($_POST['paged']) : 1;

		$this->add_render_attribute( 'wrapper', 'class', 'templatepath-appway' );
		$args = array(
			'post_type'      => 'appway_team',
			'posts_per_page' => appway_set( $settings, 'query_number' ),
			'orderby'        => appway_set( $settings, 'query_orderby' ),
			'order'          => appway_set( $settings, 'query_order' ),
			'paged'         => $paged
		);
		if ( appway_set( $settings, 'query_exclude' ) ) {
			$settings['query_exclude'] = explode( ',', $settings['query_exclude'] );
			$args['post__not_in']      = appway_set( $settings, 'query_exclude' );
		}
		if( appway_set( $settings, 'query_category' ) ) $args['team_cat'] = appway_set( $settings, 'query_category' );
		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) 
		{
		?>
  
    <!-- our-team -->
    <section class="team-style-three centred">
        <div class="container">
            <div class="row">
			
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			
                <div class="col-lg-<?php echo esc_attr($settings['column'], true );?> col-md-6 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <?php the_post_thumbnail(); ?>
								<?php	
								$icons = get_post_meta( get_the_id(), 'social_profile', true );
									if ( ! empty( $icons ) ) :?>
								<ul class="social-links clearfix">
									<?php
									foreach ( $icons as $h_icon ) :
									$header_social_icons = json_decode( urldecode( appway_set( $h_icon, 'data' ) ) );
									if ( appway_set( $header_social_icons, 'enable' ) == '' ) {
									continue;
									}
									$icon_class = explode( '-', appway_set( $header_social_icons, 'icon' ) );?>
									
									<li><a href="<?php echo appway_set( $header_social_icons, 'url' ); ?>"><i class="fab <?php echo esc_attr( appway_set( $header_social_icons, 'icon' ) ); ?>"></i></a></li>
									
									<?php endforeach; ?>
								</ul>
								<?php endif; ?>
                            </figure>
                            <div class="lower-content">
                                <h5><a href="<?php echo esc_url(get_post_meta( get_the_id(), 'team_link', true ));?>"><?php the_title(); ?></a></h5>
                                <span class="designation"><?php echo (get_post_meta( get_the_id(), 'designation', true ));?></span>
                            </div>
                        </div>
                    </div>
                </div>
				
				<?php endwhile; ?>
				
            </div>
        </div>
    </section>
    <!-- team-style-three end -->
  
           
        <?php }
		wp_reset_postdata();
	}

}
