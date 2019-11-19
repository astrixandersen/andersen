<?php
 /**
 *
 * Component for displaying post meta (date published + categories)
 *
 * @package roststarter
 *
 */

 function entry_meta() {

 	$entry_categories = wp_get_post_terms( get_the_ID(), 'category', array('fields' => 'all') );

 	if( !empty($entry_categories) ) {
 		echo '<ul class="entry-meta">';

 		echo '<li>';
 		echo esc_html__( 'Postet', 'roststarter' ) . ' ' . get_the_date();
 		echo '</li>';

 		echo '<li>';
 	 	echo esc_html__( 'Kategorier: ', 'roststarter' );

 		echo '<ul>';
 		foreach($entry_categories as $entry_category) {
 			echo '<li>';
 			echo '<a href="' . get_term_link( $entry_category->term_id ) . '">';
 			echo $entry_category->name;
 			echo '</a>';
 			echo '</li>';
 		}
 		echo '</ul>';
 		echo '</li>';

 		echo '</ul>';
 	}
 }