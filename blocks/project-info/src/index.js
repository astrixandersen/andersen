import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';
import { RichText } from '@wordpress/block-editor';

registerBlockType( 'andersen/project-info', {
	title: 'Prosjektinfo',
	icon: 'align-right',
	category: 'layout',
	description: 'Kort introduksjon til prosjektet.',
	attributes: {
		content: {
			type: 'array',
			source: 'children',
			multiline: 'p',
			selector: 'p',
		},
	},

edit: ( props ) => {
	const ALLOWED_BLOCKS = [ 'core/image' ];
	const GET_IMAGE = [ [ 'core/image', {} ] ];
	const { attributes: { content }, setAttributes } = props;
	const onChangeContent = ( newContent ) => {
		setAttributes( { content: newContent } );
	};

	return (
		<div className="project-info">

		<InnerBlocks className="image" allowedBlocks={ ALLOWED_BLOCKS } template={ GET_IMAGE } templateLock="insert" />

		<div className="content">
		<RichText tagName="p" onChange={ onChangeContent } value={ content } placeholder="Kort informasjon om prosjektet." keepPlaceholderOnFocus="true" />
		</div>

		</div>
		);
},

save: ( props ) => {
	return(
		<div className="project-info">

		<InnerBlocks.Content />

		<div className="content">
		<RichText.Content tagName="p" value={ props.attributes.content } />
		</div>

		</div>
		);
},
} );