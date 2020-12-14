<?php
/**
* The template part for displaying social profiles
* 
* @package andersen
*/
?>

<ul class="social-profiles">
<?php

while ( have_rows('site_social', 'option') ) {
	the_row();
	
	$link = get_sub_field('link');
	
	echo sprintf(
		'<li><a href="%1$s" target="%2$s">%3$s</a></li>',
		$link['url'],
		$link['target'],
		$link['title']
	);
}

?>
</ul>