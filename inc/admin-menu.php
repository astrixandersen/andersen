<?php

 /**
 *
 * Remove Menu Items
 *
 * @link https://codex.wordpress.org/Function_Reference/remove_menu_page
 * @package roststarter
 *
 */

function admin_menu_customizations() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
}

add_action( 'admin_menu', 'admin_menu_customizations', 110 );