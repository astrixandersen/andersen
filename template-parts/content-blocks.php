<?php
/**
 *
 * Template part for displaying the pagebuilder
 *
 * @package roststarter
 *
 */

/* Content */
if( get_row_layout() == 'block_content' ) :
	get_template_part( 'template-parts/partials/block', 'content');

/* Row */
elseif( get_row_layout() == 'block_row' ) :
	get_template_part( 'template-parts/partials/block', 'row');

/* Image + Content */
elseif( get_row_layout() == 'block_image' ) :
	get_template_part( 'template-parts/partials/block', 'image');

endif;

?>