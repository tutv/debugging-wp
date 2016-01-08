<?php

function debugging_wp_settings_page() {
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Debugging WP', 'debugging-wp' ); ?></h1>

		<form method="post" action="options.php">
			<?php
			settings_fields( "section" );
			do_settings_sections( "theme-options" );
			submit_button();
			?>
		</form>

		<h2><?php esc_html_e( 'How to use?', 'debugging-wp' ); ?></h2>
		<ul>
			<li>1. Use functions to debug: <strong>s()</strong>, <strong>sd()</strong>, <strong>d()</strong>,
				<strong>dd()</strong></li>
			<li>2. <code>sd()</code> and <code>dd()</code> are shorthands for <code>s();die;</code> and
				<code>d();die;</code> respectively.
			</li>
			<li>3. When looking at output, press
				<kbd>D</kbd> on the keyboard and you will be able to traverse the tree with arrows and tab keys - and expand/collapse nodes with space or enter.
			</li>
			<li>4. Double clicking the [+] sign in the output will expand/collapse ALL nodes; triple clicking big blocks of text will select it all.</li>
			<li>5. Clicking the tiny arrows on the right of the output open it in a separate window where you can keep it for comparison.</li>
		</ul>

		<h2><?php esc_html_e( 'Example', 'debugging-wp' ); ?></h2>

		<p>
			<code>d($_SERVER);</code>
		</p>
		<?php d( $_SERVER ); ?>
	</div>
	<?php
}

function debugging_wp_add_theme_menu_item() {
	add_menu_page( esc_html__( 'Debugging WP', 'debugging-wp' ), esc_html__( 'Debugging WP', 'debugging-wp' ), 'manage_options', 'debugging-wp-panel', 'debugging_wp_settings_page', null, 99 );
}

add_action( 'admin_menu', 'debugging_wp_add_theme_menu_item' );


function debugging_wp_display_select_theme_element() {
	$theme = get_option( 'debugging_wp_theme' );
	?>
	<select name="debugging_wp_theme" id="debugging_wp_theme">
		<option value="original" <?php selected( 'original', $theme ); ?>><?php esc_html_e( 'Original', 'debugging-wp' ); ?></option>
		<option value="solarized" <?php selected( 'solarized', $theme ); ?>><?php esc_html_e( 'Solarized', 'debugging-wp' ); ?></option>
		<option value="solarized-dark" <?php selected( 'solarized-dark', $theme ); ?>><?php esc_html_e( 'Solarized dark', 'debugging-wp' ); ?></option>
		<option value="aante-light" <?php selected( 'aante-light', $theme ); ?>><?php esc_html_e( 'Aante light', 'debugging-wp' ); ?></option>
	</select>
	<?php
}

function debugging_wp_display_theme_panel_fields() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );

	add_settings_field( 'debugging_wp_theme', esc_html__( 'Themes', 'debugging-wp' ), 'debugging_wp_display_select_theme_element', 'theme-options', 'section' );

	register_setting( 'section', 'debugging_wp_theme' );
}

add_action( 'admin_init', 'debugging_wp_display_theme_panel_fields' );