<?php
/**
 * Partials => Block Row
 *
 * @package roststarter
 */
?>

<div class="block-row row row-eq-height">

    <?php if( !empty(get_sub_field('one')) ) : ?>
        <div class="col-md-6">
            <?php the_sub_field('one'); ?>
        </div> <!-- .col -->
    <?php endif; ?>

    <?php if( !empty(get_sub_field('two')) ) : ?>
        <div class="col-md-6">
            <?php the_sub_field('two'); ?>
        </div> <!-- .col -->
    <?php endif; ?>

</div> <!-- .block-row -->