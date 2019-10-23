<?php
/**
 *
 * Disable H1 from WYSIWYG-editor
 * @link https://gist.github.com/kjbrum/da4eb508be09b9c336a9
 * @package roststarter
 *
 */

function remove_h1_from_editor( $settings ) {
    $settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Preformatted=pre;';
    return $settings;
}
add_filter( 'tiny_mce_before_init', 'remove_h1_from_editor' );