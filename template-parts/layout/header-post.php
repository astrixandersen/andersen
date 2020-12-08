<?php
/**
* The template part for displaying post header
* 
* @package andersen
*/

if ( has_post_thumbnail() ) {
  echo '<section id="post-hero">';
}

?>
<header class="post-header">
<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
</header>

<?php if ( has_post_thumbnail() ) { ?>
<figure class="post-thumbnail">
<?php the_post_thumbnail( 'square' ); ?>
</figure> <!-- .post-thumbnail -->
<?php } ?>

<?php

if ( has_post_thumbnail() ) {
  echo '</section> <!-- #post-hero -->';
}

?>