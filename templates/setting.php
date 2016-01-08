<div class="wrap">
	<h1><?php esc_html_e( 'Debugging Setting', 'debugging-wp' ); ?></h1>



	<?php s(get_option('debugging_wp[theme]') ); ?>

	<div class="card">
		<h2><?php esc_html_e( 'Themes', 'debugging-wp' ); ?></h2>

		<form method="post" action="options.php">
			<?php settings_fields( 'debugging_wp' ); ?>
			<?php do_settings_sections( 'debugging_wp[theme]' ); ?>
			<table class="form-table">
				<tbody>
				<tr>
					<td>
						<p>
							<label><input type="radio" name="debugging_wp[theme]" value="original"> <?php esc_html_e( 'Original', 'debugging-wp' ); ?>
							</label>
						</p>

						<p>
							<label><input type="radio" name="debugging_wp[theme]" value="solarized"> <?php esc_html_e( 'Solarized', 'debugging-wp' ); ?>
							</label>
						</p>

						<p>
							<label><input type="radio" name="debugging_wp[theme]" value="solarized-dark"> <?php esc_html_e( 'Solarized dark', 'debugging-wp' ); ?>
							</label>
						</p>

						<p>
							<label><input type="radio" name="debugging_wp[theme]" value="aante-light"> <?php esc_html_e( 'Aante light', 'debugging-wp' ); ?>
							</label>
						</p>
				</tr>
				</tbody>
			</table>

			<?php submit_button( __( 'Save', 'debugging-wp' ) ); ?>
		</form>
	</div>

</div>