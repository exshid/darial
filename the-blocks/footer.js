import { registerBlockType } from "@wordpress/blocks"
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

wp.blocks.registerBlockType("theblocktheme/footer", {
    title: "Footer",
    edit: EditComponent,
    save: SaveComponent
})

function EditComponent(props) {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <InnerBlocks className="myfooter" />
        </div>
    );

}

function SaveComponent(props) {
    const blockProps = useBlockProps.save();

    return (
        <div {...blockProps}>
            <InnerBlocks.Content className="myfooter" />
        </div>
    );
}