<?php
 /**
 *
 * Component for displaying project meta (categories)
 *
 * @package roststarter
 *
 */

 function project_meta() {

 	$project_categories = wp_get_post_terms( get_the_ID(), 'project-category', array('fields' => 'all') );

 	if( !empty($project_categories) ) {
 		echo '<div class="entry-meta">';
 		echo '<span class="screen-reader-text">' . esc_html__( 'Kategorier: ', 'roststarter' ) . '</span>';

 		echo '<ul>';
 		foreach($project_categories as $project_category) {
 			echo '<li>';
 			echo '<a href="' . get_term_link( $project_category->term_id ) . '">';
 			echo $project_category->name;
 			echo '</a>';
 			echo '</li>';
 		}
 		echo '</ul>';

 		echo '</div>';
 	}
 }