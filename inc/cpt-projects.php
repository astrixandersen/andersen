<?php

/**
 * Register CPT => Projects
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @package roststarter
 *
 */

function cpt_project() {
	$labels = array(
		'name'					=> 'Prosjekter',
		'singular_name'			=> 'Prosjekt',
		'menu_name'				=> 'Prosjekter',
		'add_new'				=> 'Legg til ny',
		'add_new_item'			=> 'Legg til nytt prosjekt',
		'edit_item'				=> 'Rediger prosjekt',
		'view_item'				=> 'Vis prosjekt',
		'all_items'				=> 'Alle prosjekter',
		'search_items'          => 'Søk etter prosjekter',
        'not_found'             => 'Ingen prosjekter ble funnet.',
        'not_found_in_trash'  	=> 'Ingen prosjekter ble funnet.',
	);

	$args = array(
		'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'			 => 'dashicons-admin-customizer',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'arbeid' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'project', $args );
}

 add_action( 'init', 'cpt_project' );

 function project_taxonomy() {
    $labels = array(
        'name'              => 'Kategorier',
        'singular_name'     => 'Kategori',
        'search_items'      => 'Søk etter kategorier',
        'all_items'         => 'Alle kategorier',
        'parent_item'       => 'Foreldrekategori',
        'parent_item_colon' => 'Foreldrekategori',
        'edit_item'         => 'Rediger kategori',
        'update_item'       => 'Oppdater kategori',
        'add_new_item'      => 'Legg til ny',
        'new_item_name'     => 'Legg til ny',
        'menu_name'         => 'Prosjektkategori',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'arbeid' ),
    );

    register_taxonomy( 'project-category', array( 'project' ), $args );

 }

 add_action( 'init', 'project_taxonomy' );
