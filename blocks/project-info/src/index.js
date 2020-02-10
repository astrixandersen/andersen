import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'andersen/project-info', {
	title: 'Prosjektinfo',
	icon: 'align-right',
	category: 'layout',
	description: 'Kort introduksjon til prosjektet.',
	edit: ( {className} ) => {
		return <div className={ className }>Hei hei</div>;
	},
	save: () => {
		return <div>Hei hei</div>;
	},
} );