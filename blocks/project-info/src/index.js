import { registerBlockType } from '@wordpress/blocks';
import {
	RichText,
	AlignmentToolbar,
	BlockControls,
	InspectorControls
} from '@wordpress/block-editor';

registerBlockType( 'andersen/project-info', {
	title: 'Prosjektinfo',
	icon: 'align-right',
	category: 'layout',
	description: 'Kort introduksjon til prosjektet.',
	attributes: {
		content: {
			type: 'array',
			source: 'children',
			selector: 'p',
		},
		alignment: {
			type: 'string',
			default: 'none',
		}
	},
	example: {
		attributes: {
			content: 'Hei hei',
			alignment: 'center',
		},
	},
	edit: ( props ) => {
		const {
			attributes: {
				content,
				alignment,
			},
			className
		} = props;

		const onChangeContent = ( newContent) => {
			props.setAttributes( { content: newContent } );
		};

		const onChangeAlignment = ( newAlignment ) => {
			props.setAttributes( { alignment: newAlignment === undefined ? 'none' : newAlignment } );
		};

		return (
			<div>
			{
				<BlockControls>
				<AlignmentToolbar
				value={ alignment }
				onChange={ onChangeAlignment }
				/>
				</BlockControls>
			}
			<RichText
			tagname="p"
			className={ className }
			style={ {textAlign : alignment} }
			onChange={ onChangeContent }
			value={ content }
			/>
			</div>
			);
	},
	save: ( props ) => {
		return(
			<RichText.Content
			tagName="p"
			className={ `andersen-blocks-align-${ props.attributes.alignment }` }
			value={ props.attributes.content }
			/>
			);
	},
} );