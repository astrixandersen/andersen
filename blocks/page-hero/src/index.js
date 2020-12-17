import { registerBlockType } from "@wordpress/blocks";
import { RichText } from "@wordpress/block-editor";

registerBlockType("andersen/page-hero", {
  title: "Hero",
  icon: "admin-post",
  category: "layout",
  description: "Viser en blokk med tekst på toppen av siden.",
  attributes: {
    content: {
      type: "string",
      source: "html",
      selector: "p"
    }
  },
  edit({ className, attributes, setAttributes }) {
    return (
      <RichText
        tagName="p"
        className={className}
        value={attributes.content}
        formattingControls={["bold", "italic"]}
        onChange={content => setAttributes({ content })}
        placeholder={"Skriv noe kult her!"}
      />
    );
  },
  save({ className, attributes }) {
    return (
      <div className={className}>
        <h2 className="screen-reader-text">Introduksjon</h2>
        <RichText.Content tagName="p" value={attributes.content} />
      </div>
    );
  }
});
