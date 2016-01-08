<?php

function debugging_wp_register_custom_submenu_page() {
	add_management_page( esc_html__( 'Debugging WP', 'debugging-wp' ),
		esc_html__( 'Debugging WP', 'debugging-wp' ),
		'manage_options',
		'debugging-wp',
		'debugging_wp_template_page_admin'
	);
}

function debugging_wp_template_page_admin() {
	require_once DEBUGGING_WP_PLUGIN_DIR . 'templates/setting.php';
}

function debugging_wp_register_settings() {

	add_settings_section(
		'eg_setting_section',
		'Example settings section in reading',
		'eg_setting_section_callback_function',
		'reading'
	);

	add_settings_field(
		'debugging_wp[theme]',
		'Example setting Name',
		'eg_setting_callback_function',
		'reading',
		'eg_setting_section'
	);

	register_setting( 'debugging_wp', 'debugging_wp[theme]', 'sanitize_________' );
}

function eg_setting_section_callback_function() {
	echo '<p>Intro text for our settings section</p>';
}

function eg_setting_callback_function() {
	echo '<input name="eg_setting_name" id="eg_setting_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'debugging_wp[theme]' ), false ) . ' /> Explanation text';
}

function sanitize_________( $input ) {
	$new_input = array();

	if ( isset( $input['debugging_wp[theme]'] ) ) {
		$new_input['debugging_wp[theme]'] = sanitize_text_field( $input['debugging_wp[theme]'] );
	}

	return $new_input;
}

if ( is_admin() ) { // admin actions
	add_action( 'admin_init', 'debugging_wp_register_settings' );
	add_action( 'admin_menu', 'debugging_wp_register_custom_submenu_page' );
}