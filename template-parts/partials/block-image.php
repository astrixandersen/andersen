<?php
/**
 * Partials => Block Image + Content
 *
 * @package roststarter
 */

$image 	 		 = get_sub_field('image')['image'];
$content 		 = get_sub_field('content'); // wysiwyg

$image_align = get_sub_field('image')['align']; // radio buttons

if( $image_align == 'left' ) {
	$image_order 	 = 'order-1';
	$content_order = 'order-2';
}

if( $image_align == 'right' ) {
	$image_order 	 = 'order-1 order-md-2';
	$content_order = 'order-2 order-md-1';
}

?>
<div class="block-image row">

	<div class="col-lg-6 image <?php echo $image_order; ?>">
		<figure>
			<img <?php if( $image['alt'] ) : echo ' alt="' . $image['alt'] . '"'; endif; ?>src="<?php echo $image['sizes']['large']; ?>" />
		</figure>
	</div> <!-- .col -->

	<div class="col-lg-6 content <?php echo $content_order; ?>">
		<?php echo $content; ?>
	</div> <!-- .col -->

</div> <!-- .block-image -->