<div class="wrap about-wrap">
	<h1><?php printf( __( 'Willkommen beim Support System %s', PSOURCE_SUPPORT_LANG_DOMAIN ), psource_support_get_version() ); ?></h1>

	<div class="about-text">
		<?php _e( 'Vielen Dank für die Installation des Support-Systems!', PSOURCE_SUPPORT_LANG_DOMAIN ); ?>					
	</div>

	<div class="wp-badge support-system-badge"><div class="badge-version"><?php printf( __( 'Version %s', PSOURCE_SUPPORT_LANG_DOMAIN ), psource_support_get_version() ); ?></div></div>

	<p>
		<a href="<?php echo $settings_url; ?>" class="button button-primary"><?php _e( 'Einstellungen', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></a>
		<a href="https://n3rds.work/piestingtal-source-project/ps-support-system/" class="docs button button-secondary"><?php _e( 'Mehr Info', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></a>
	</p>
	
	<div class="changelog">
		<div class="feature-section col one-col">
			<div class="col-1">
				<h2><?php _e( 'FAQs im Frontend sind endlich da!', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></h2>
			</div>
		</div>
	</div>

	<div class="changelog">
		<div class="feature-section col two-col">
			<div class="col-1">
				<p><?php printf( __( 'Das Support-System bietet jetzt Optionen zum Anzeigen von FAQs auf Deiner Website. Wie bei Tickets werden FAQs mit <a href="%s">Foundation 5</a>  gerendert.', PSOURCE_SUPPORT_LANG_DOMAIN ), 'http://foundation.zurb.com/' ); ?></p>
				<p><?php _e( 'Du kannst Deine FAQs wie gewohnt vom Administrator aus verwalten. Benutzer haben weiterhin über ein Administratormenü Zugriff auf häufig gestellte Fragen (FAQs), es sei denn, Du möchtest dieses Menü in den Einstellungen deaktivieren.', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></p>
				<p><?php _e( 'Das FAQ-System verfügt über eine <strong>PS-Bloghoster</strong> -Integration, mit der jeder Pro-Benutzer mit einer zugewiesenen Ebene Deine FAQs anzeigen kann!', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></p>
			</div>
			<div class="col-2 last-feature">
				<img src="<?php echo PSOURCE_SUPPORT_PLUGIN_URL . 'admin/assets/images/support-welcome-1.png'; ?>">
			</div>
		</div>
	</div>

	<div class="changelog under-the-hood">

		<div class="feature-section col three-col">
			<div>
				<h4><?php esc_html_e( 'Änderungen in den Admin-Stilen', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></h4>
				<img src="<?php echo PSOURCE_SUPPORT_PLUGIN_URL . 'admin/assets/images/support-welcome-3.png'; ?>">
				<p><?php _e( 'Wir haben es wieder getan! Das Support-System 2.1 bietet viele kleine (und größere) Verbesserungen im Administrator. Wir haben den Bildschirm "Ticket bearbeiten" im Hinblick auf die Benutzerfreundlichkeit neu gestaltet. Jetzt kannst Du Deine Tickets auf einer einzigen Seite verwalten.', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></p>
			</div>
			<div>
				<h4><?php esc_html_e( 'Widgets in Frontend-Tickets', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></h4>
				<img src="<?php echo PSOURCE_SUPPORT_PLUGIN_URL . 'admin/assets/images/support-welcome-2.png'; ?>">
				<p><?php _e( 'Verwalte den Ticketstatus, die Kategorie, die Priorität und die Personalzuweisung vom Frontend aus. Support System Widgets ermöglichen die einfache Verwaltung von Tickets und machen alles schön. Sie sind noch keine WordPress-Widgets, aber das ist auf dem Weg.', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></p>
			</div>
			<div class="last-feature">
				<h4><?php esc_html_e( 'Mehr Geschwindigkeit!', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></h4>
				<p><?php _e( 'Das Cache-System wurde überprüft. Das Support-System stellt jetzt weniger Abfragen und verhält sich schneller als je zuvor!', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></p>
			</div>
		</div>


		<hr>

		<div class="return-to-dashboard">
			<a href="<?php echo $settings_url; ?>"><?php esc_html_e( 'Gehe zu den Einstellungen', PSOURCE_SUPPORT_LANG_DOMAIN ); ?></a>
		</div>

	</div>

</div>

