<?php if ( $added ): ?>
	<div class="updated"><p><?php _e( 'Kategorie hinzugefügt', INCSUB_SUPPORT_LANG_DOMAIN ); ?></p></div>
<?php elseif ( $updated ): ?>
	<div class="updated"><p><?php _e( 'Kategorie aktualisiert', INCSUB_SUPPORT_LANG_DOMAIN ); ?></p></div>
<?php endif; ?>

<br class="clear">
<div id="col-container">
	<div id="col-right">
		<div class="col-wrap">
			<div class="form-wrap">
				<form id="categories-table-form" action="" method="post">
					<?php $cats_table->display(); ?>
				</form>
			</div>
		</div>
	</div>
	<div id="col-left">
		<div class="col-wrap">
			<div class="form-wrap">
				<h3><?php _e( 'Neue Kategorie hinzufügen', INCSUB_SUPPORT_LANG_DOMAIN ); ?></h3>
				<form id="categories-table-form" action="" method="post">
					<?php wp_nonce_field( 'add-faq-category' ); ?>
					<div class="form-field">
						<label for="cat_name"><?php _e( 'Kategoriename', INCSUB_SUPPORT_LANG_DOMAIN ); ?></label>
						<input name="cat_name" id="cat_name" type="text" value="<?php echo $category_name; ?>" size="40" aria-required="true"><br/>
						<p><?php _e('Der Name wird verwendet, um die Kategorie zu identifizieren, auf die sich FAQs beziehen', INCSUB_SUPPORT_LANG_DOMAIN ); ?></p>
					</div>
					<?php submit_button( __( 'Neue Kategorie hinzufügen', INCSUB_SUPPORT_LANG_DOMAIN ), 'primary', 'submit-new-faq-category' ); ?>
				</form>
			</div>
		</div>
	</div>
</div>