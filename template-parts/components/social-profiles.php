<?php

/**
 * Components => Social Links
 */

?>

<ul class="social-profiles">
	<?php

	while ( have_rows('site_social', 'option') ) {
		the_row();

		$link = get_sub_field('link');

		?>
		<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
	<?php } ?>
</ul>