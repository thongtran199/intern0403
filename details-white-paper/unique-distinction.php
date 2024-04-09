<?php

namespace KMSSdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * KMSSdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class KMSSdevsDetailsWhitePaperUD extends \Elementor\Widget_Base
{

	/**
	 * Get widget name.
	 *
	 * Retrieve KMSSdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'kmssdevs-details-white-paperUD';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve KMSSdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __('Unique Distinction Details White Paper', 'kmssdevs-elementor');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve KMSSdevs Unique Distinction widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'eicon-slideshow';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the KMSSdevs Unique Distinction widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['details-white-paper'];
	}

	public function get_keywords()
	{
		return ['Unique Distinction'];
	}

	public function get_script_depends()
	{
		return ['kmssdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position()
	{
		$position_options = [
			''              => esc_html__('Default', 'kmssdevs-elementor'),
			'top-left'      => esc_html__('Top Left', 'kmssdevs-elementor'),
			'top-center'    => esc_html__('Top Center', 'kmssdevs-elementor'),
			'top-right'     => esc_html__('Top Right', 'kmssdevs-elementor'),
			'center'        => esc_html__('Center', 'kmssdevs-elementor'),
			'center-left'   => esc_html__('Center Left', 'kmssdevs-elementor'),
			'center-right'  => esc_html__('Center Right', 'kmssdevs-elementor'),
			'bottom-left'   => esc_html__('Bottom Left', 'kmssdevs-elementor'),
			'bottom-center' => esc_html__('Bottom Center', 'kmssdevs-elementor'),
			'bottom-right'  => esc_html__('Bottom Right', 'kmssdevs-elementor'),
		];

		return $position_options;
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'section_content_unique_distinction',
			[
				'label' => esc_html__('Unique Distinction', 'kmssdevs-elementor'),
			]
		);
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__('Unique Distinction Items', 'kmssdevs-elementor'),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__('Slide #1', 'kmssdevs-elementor'),
						'tab_content' => esc_html__('Click edit button to change this text.', 'kmssdevs-elementor'),
					]
				],
				'fields' => [
					[
						'name'        => 'icon',
						'label'       => esc_html__('Icon', 'kmssdevs-elementor'),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => ['active' => true],
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name'        => 'title',
						'label'       => esc_html__('Title', 'kmssdevs-elementor'),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => ['active' => true],
						'default'     => esc_html__('Domain Solutions', 'kmssdevs-elementor'),
						'label_block' => true,
					],
					[
						'name'        => 'description',
						'label'       => esc_html__('Description', 'kmssdevs-elementor'),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => ['active' => true],
						'default'     => esc_html__('Our domain solutions encompass a wide range of services, from core banking system, innovative digital assets development, software testing to data analytics and more.', 'kmssdevs-elementor'),
						'label_block' => true,
					],
					[
						'name'        => 'bg_hover',
						'label'       => esc_html__('Hover BG', 'kmssdevs-elementor'),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => ['active' => true],
						'default'     => esc_html__('#27aae1', 'kmssdevs-elementor'),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__('Layout', 'kmssdevs-elementor'),
			]
		);

		$this->add_control(
			'item_number',
			[
				'label'   => esc_html__('Item Number', 'kmssdevs-elementor'),
				'type'    => Controls_Manager::TEXT,
				'default' => '3',
			]
		);


		$this->end_controls_section();
	}

	public function render()
	{
		$settings  = $this->get_settings_for_display();
		extract($settings);
?>
		<section class="details-white-paper-ud-section">
			<div class="section-content">
				<div class="container ud-container">
					<div class="row justify-center">
						<?php
						$idd = 0;
						foreach ($settings['tabs'] as $item) :
							$idd++;
						?>
							<div class="col-lg-<?php echo (12 / (int)wp_kses_post($settings['item_number'])); ?> col-md-<?php echo (24 / (int)wp_kses_post($settings['item_number'])); ?>">
								<div class="ud-item fadeInUp">
									<div class="ud-outer" style="background-color: <?php echo wp_kses_post($item['bg_hover']); ?>;"></div>
									<div class="ud-inner">
										<div class="ud-icon" style="background-image: url('<?php print esc_url($item['icon']['url']); ?>');">
										</div>
										<div class="ud-content">
											<div class="ud-title" style="color: <?php echo wp_kses_post($item['bg_hover']); ?>;"><?php echo wp_kses_post($item['title']); ?></div>
											<div class="ud-description"><?php echo wp_kses_post($item['description']); ?></div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
<?php
	}
}
