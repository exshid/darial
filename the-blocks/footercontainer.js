import { registerBlockType } from "@wordpress/blocks"
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';


registerBlockType("theblocktheme/footercontainer", {
    title: "Footer Container",
    attributes: {
        text: { type: "string" },
    },
    edit: EditComponent,
    save: SaveComponent
})

function EditComponent(props) {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <InnerBlocks className="footercontainer" />
        </div>
    );

}

function SaveComponent(props) {
    const blockProps = useBlockProps.save();

    return (
        <div {...blockProps}>
            <InnerBlocks.Content className="footercontainer" />
        </div>
    );
}