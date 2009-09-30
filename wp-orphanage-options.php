<?php
if ( !empty($_POST ) ) :
	check_admin_referer('update-options');
	update_option('wporphanage_role',$_POST['wporphanage_role']);
?>
<div id="message" class="updated fade"><p><strong><em><?php _e("Users will now be promoted to this role: ",'wporphanage'); ?><?php echo $_POST['wporphanage_role']; ?></em> <?php _e('Good Job!','wporphanage'); ?></strong></p></div>
<?php endif; ?>

?>
<div class="wrap">
	<h2><?php _e('WP Orphanage','wporphanage'); ?></h2>
	<p><?php _e('Choose the default role orphan users should be promoted to when they login (or an admin visits the users page in wp-admin).','wporphanage'); ?></p>
	</p>
	

	<form method="post" action="" id="wporphanage-settings">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />

		<p class="option">
			<label for="wporphanage_role">Choose Default Role:</label>
            <input type="text" name="wporphanage_role" value="<?php echo $wporphanage_role; ?>" id="wporphanage_role" />
		</p>

		<div class="tablenav">
			<div class="alignleft"><input type="submit" name="submit" value="<?php _e('Update Options »', 'wporphanage') ?>" class="button-secondary" /></div>
			<div class="alignright"><a href="http://xentek.net/?utm_source=plugin&amp;utm_medium=options&amp;utm_content=icon&amp;utm_campaign=wporphanage" title="visit xentek.net - creator of this plugin"><img src="http://xentek.net/img/icons/recruiter_32.png" width="52" height="32" alt="bullhorn icon" title="visit xentek.net - creator of this plugin" border="0" valign="middle" /></a></div>
		</div>

	</form>	                      
</div>