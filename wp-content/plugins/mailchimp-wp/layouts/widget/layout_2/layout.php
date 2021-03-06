<?php

/**
 * @package    Optin Cat
 */

$layout = array(

'name' => __( 'Layout 2' ),

	'editables' => array(

		// Added to the fieldset "Form Background"
		'form' => array(
			'.fca_eoi_layout_2' => array(
				'background-color' => array( __( 'Form Background Color' ), '#eeeeee' ),
			),
		),

		// Added to the fieldset "Headline"
		'headline' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_headline_copy_wrapper' => array(
				'font-weight'      => array( '', 'bold' ),
				'font-style'       => array( '', 'italic' ),
				'text-decoration'  => array( '', 'underline' ),
				'font-size'        => array( __( 'Font Size' ), '20px' ),
			),
			'.fca_eoi_layout_2 .ribbon' => array(
				'color'            => array( __( 'Font Color' ), '#FFF' ),
				'background-color' => array( __( 'Background Color' ), '#3197e1' ),
			),
			'.fca_eoi_layout_2 .ribbon .ribbon-content:before, .fca_eoi_layout_2 .ribbon .ribbon-content:after' => array(
				'border-top-color' => array( __( 'Fold Background Color' ), '#256fa6' ),
			),
		),

		// Added to the fieldset "Description"
		'description' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_description_copy_wrapper' => array(
				'font-size'        => array( __( 'Font Size' ), '14px' ),
				'color' => array( __('Font Color') , '#000' ),
			),
		),

		// Added to the fieldset "Name"
		'name_field' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_name_field_wrapper' => array(
				'background-color' => array( __('Background Color') , '#FFF' ),
				'border-color' => array( __('Border Color') , '#FFF' ),
			),
			'.fca_eoi_layout_2 .fca_eoi_layout_2_name_field_wrapper input, .fca_eoi_layout_2 .fca_eoi_layout_2_name_field_wrapper .fa' => array(
				'color' => array( __('Font Color') , '#000' ),
			),
		),

		// Added to the fieldset "Email"
		'email_field' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_email_field_wrapper' => array(
				'background-color' => array( __('Background Color') , '#FFF' ),
				'border-color' => array( __('Border Color') , '#FFF' ),
			),
			'.fca_eoi_layout_2 .fca_eoi_layout_2_email_field_wrapper input, .fca_eoi_layout_2 .fca_eoi_layout_2_email_field_wrapper .fa' => array(
				'color' => array( __('Font Color') , '#000' ),
			),
		),

		// Added to the fieldset "Button"
		'button' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_submit_button_wrapper input' => array(
				'font-size' => array( __( 'Font Size' ), '16px' ),
				'color' => array( __('Font Color') , '#FFF' ),
				'background-color' => array( __('Background Color') , '#e84e34' ),
				'border-bottom-color' => array( __('Bottom Border Color') , '#c13a24' ),
			),
		),
		'privacy' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_privacy_copy_wrapper' => array(
				'font-size' => array( __( 'Font Size' ), '12px' ),
				'color' => array( __('Font Color') , '#a1a1a1' ),
			),
		),
		'fatcatapps' => array(
			'.fca_eoi_layout_2 .fca_eoi_layout_2_fatcatapps_link_wrapper a, .fca_eoi_layout_2 .fca_eoi_layout_2_fatcatapps_link_wrapper a:hover' => array(
				'color' => array( __( 'Font Color' ), '#3197e1'),
			),
		),
	)
);
