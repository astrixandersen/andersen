import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'andersen/project-info', {
	title: __( 'Prosjektinfo' ),
	description: __( 'Kort introduksjon til prosjektet.' ),
	category: 'layout',
	icon: 'dashicons-align-right',
	edit: () => {
		return <div>Test.</div>;
	},
	save: () => {
		return <div>Test.</div>;
	},
} );