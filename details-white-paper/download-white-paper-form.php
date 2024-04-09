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
class KMSSdevsDownloadWhitePaperForm extends \Elementor\Widget_Base
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
		return 'kmssdevs-white-paper-form';
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
		return __('KMSS Download White Paper Form', 'kmssdevs-elementor');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve KMSSdevs Slider widget icon.
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
	 * Retrieve the list of categories the KMSSdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['home-layout'];
	}

	public function get_keywords()
	{
		return ['form'];
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

	}

	public function render()
	{
		$settings  = $this->get_settings_for_display();
		extract($settings);
?>
		<section class="download-white-paper-form-kmss">
			<div class="body-form">
				<div class="inner">

					<div class="row">
						<div class="item-left ">
							<h2>About white paper</h2>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium nobis id dignissimos, cupiditate doloribus corrupti cumque porro. Doloribus pariatur aliquid sed veniam ipsum eveniet eum? Quas corporis quam ad provident!</p>
							<img src="https://static.vecteezy.com/system/resources/previews/025/894/618/non_2x/cute-word-hello-cartoon-style-illustration-vector.jpg" alt="">

						</div>
						<div class="item-right ">
							<div class="form-kmss">
								<form class="kmss1-form" id="frm-kmss1" method="post" action="" novalidate="novalidate">
									<div class="form-row">
										<div class="form-group col-lg-6">
											<label for="firstname">First name</label>
											<input type="text" class="form-control" name="firstname" id="firstname" placeholder=" " autocomplete="off">
											<span class="text-empty">*</span>
										</div>
										<div class="form-group col-lg-6">
											<div class="inf-span">
												<label for="lastname">Last name</label>
												<span class="text-empty">*</span>
											</div>

											<input type="text" class="form-control" name="lastname" id="lastname" placeholder=" " autocomplete="off">

										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-lg-6">
											<label for="country">Country</label>
											<input type="text" class="form-control" name="country" id="country" placeholder="" autocomplete="off">
										</div>
										<div class="form-group col-lg-6">
											<label for="company">Company / Organization</label>
											<input type="text" class="form-control" name="company" id="company" placeholder="" autocomplete="off">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-lg-12">
											<label for="industry">Industry</label>
											<input type="text" class="form-control" name="industry" id="industry" placeholder="" autocomplete="off">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-lg-6">
											<label for="email">Company email</label>
											<input type="text" class="form-control" name="email" id="email" placeholder="sample@companyemail.com" autocomplete="off">
										</div>
										<div class="form-group col-lg-6">
											<label for="phone" id="phone-label">Phone</label>
											<input type="tel" class="form-control" name="phone" id="phone" autocomplete="off" placeholder="+8491234567">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-lg-4">
											<a class="theme-btn-white btn-submit" id="btn-submit" href="javascript:void(0)">Submit</a>
										</div>
									</div>
									

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php if (is_admin()) { ?>
			<script type="text/javascript">

			</script>
		<?php }  ?>

<?php
	}
}
