<?php
/**
 * Disables BuddyPress' registration process and fallsback to WordPress' one.
 */
function dttheme_disable_bp_registration() {
  remove_action( 'bp_init',    'bp_core_wpsignup_redirect' );
  remove_action( 'bp_screens', 'bp_core_screen_signup' );
}
add_action( 'bp_loaded', 'dttheme_disable_bp_registration' );
?>