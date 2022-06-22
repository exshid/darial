wp.blocks.registerBlockType("theblocktheme/comments", {
    title: "Comments",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Comments")
    },
    save: function () {
        return null
    }
})